<?php

namespace App\Http\Controllers\Back;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreate;
use App\Http\Requests\UserUpdate;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;


class UserController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:user-index', ['only' => ['index']]);
        $this->middleware('permission:user-create', ['only' => ['create']]);
        $this->middleware('permission:user-store', ['only' => ['store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit']]);
        $this->middleware('permission:user-update', ['only' => ['update']]);
        $this->middleware('permission:user-destroy', ['only' => ['destroy']]);
    }

    public function index()
    {
        $users = User::orderBydesc('id')->paginate(10);

        return view('back.user.list', compact('users'));
    }

    public function create()
    {
        $permission = Permission::get();
        return view('back.user.create', compact('permission'));
    }

    public function store(UserCreate $request)
    {
        $user = new User;
        $user->name       = $request->name;
        $user->email      = $request->email;
        $user->password   = Hash::make($request->password);

        $user->save();

        if (!empty($request->input('permission'))) {
            foreach ($request->permission as $per) {
                $i = Permission::whereName($per)->first();

                DB::table('model_has_permissions')->insert([
                    'permission_id' =>  $i->id,
                    'model_type'    => 'App\Models\User',
                    'model_id'      => $user->id
                ]);
            }
        }


        return redirect()->route('users.index')->withSuccess('İstifadəçi əlavə edildi...');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = user::find($id) ?? abort(403, 'İstifadəçi Tapılmadı...');
        $permission = Permission::get();
        $userPermissions = DB::table('model_has_permissions')->get();

        return view('back.user.edit', compact('user', 'permission', 'userPermissions'));
    }

    public function update(UserUpdate $request, $id)
    {
        $user = User::find($id) ?? abort(403, 'İstifadəçi Tapılmadı...');
        $user->name       = $request->name;
        $user->email      = $request->email;
        if(!empty($request->input('password'))){
            $user->password   = Hash::make($request->password);
        }
        $user->save();

        $all = $request->input('permission');
        if (!empty($all)) {
            DB::table("model_has_permissions")->where('model_id', $user->id)->whereNotIn('permission_id', $all)->delete();
        }

        if (empty($all)) {
            DB::table("model_has_permissions")->where('model_id', $user->id)->delete();
        }

        if (!empty($all)) {

            foreach ($request->permission as $per) {
                $i = Permission::whereName($per)->first();

                DB::table('model_has_permissions')->insert([
                    'permission_id' =>  $i->id,
                    'model_type'    => 'App\Models\User',
                    'model_id'      =>  $id
                ]);
            }
        }

        return redirect()->route('users.index')->withSuccess('Uğurla Yeniləndi...');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        DB::table("model_has_permissions")->where('model_id', $id)->delete();
        return redirect()->back()->withSuccess('Uğurla silindi...');
    }
}
