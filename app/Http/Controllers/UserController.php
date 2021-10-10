<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
   
    public function index(Request $request){

        $roles = Role::all()->pluck('name');
        $permissions = Permission::all()->pluck('name');
        
        if (request()->ajax()) {

            $users = User::with(['permissions'])
            ->where('status', 'LIKE', '%' . $request->status . '%')
            ->whereHas('roles', function ($query) use($request) {
                return $query->where('name', 'LIKE', '%' . $request->role . '%');
            })->get();
          
            return datatables()->of($users)
                ->addIndexColumn()
                ->addColumn('action', function($users){
                    return view('admin.user.action', compact('users'));
                })
                ->addColumn('roles', function($row){
                    $array= array();
                    foreach ($row->roles as $key => $value) {
                        array_push($array, '<span class="badge badge-primary">'.$value->name.'</span>');
                    }
                    return implode(" ", $array); 
             })
             ->addColumn('permissions', function($row){
                $array= array();
                foreach ($row->permissions as $key => $value) {
                    array_push($array, '<span class="badge badge-primary">'.$value->name.'</span>');
                }
                return implode(" ", $array); 
         })
         ->addColumn('status', function($row){
             if($row->status=='actived')
               return '<span class="badge badge-success">'.$row->status.'</span>';
             else return '<span class="badge badge-danger">'.$row->status.'</span>';
        })
             ->rawColumns(['action','roles','email','permissions','status'])
             ->make(true);
        }

        return view('admin.user.index', compact('roles','permissions'));
    }

    public function storeUser(UserStoreRequest $request){
       
        try {
            $validated = $request->validated();
            if($validated){
                $user =  User::create([
                    'name'  => $request->name,
                    'username'   => $request->username,
                    'password' => Hash::make($request->password)
                ])->assignRole([$request->roles])->givePermissionTo([$request->permissions]);
                return $this->successResponse($user, "Success Add User");
            }else{
                return $this->errorResponse($validated->errors(), 422);
            }
            } catch (\Throwable $th) {
                return $this->errorResponse("Terjadi Kesalahan".$th, 400);
            }
    }

    public function update(UserUpdateRequest $request){
       
        try {
            $validated = $request->validated();
            if($validated){

                $user = User::find($request->id);
                $user->name     = $request->name;
                $user->status   = $request->status;
                $user->save();
                $user->syncRoles([$request->roles])->syncPermissions([$request->permissions]);

                return $this->successResponse($request->all(), "Success Update User");
            }else{
                return $this->errorResponse($validated->errors(), 422);
            }
            } catch (\Throwable $th) {
                return $this->errorResponse("Terjadi Kesalahan".$th, 400);
            }
    }

    public function detailUser(Request $request){
        $users = User::with('roles','permissions' )->find($request->id);
        $users->makeHidden('roles','permissions');
        $users->setAttribute('roles_array', $users->roles->pluck('name'));
        $users->setAttribute('permissions_array', $users->permissions->pluck('name'));
        return response()->json($users);
    }
    
    public function ubahPassword(Request $request){
        try {

            if (Hash::check($request->pass_lama, Auth::user()->password)) {
                $user = User::find(Auth::user()->id);
                $user->password = Hash::make($request->pass_baru);
                $user->save();

                return $this->successResponse($request->pass_baru, "berhasil ubah password");
            } else {
                return $this->errorResponse("Password Lama Tidak cocok" , 400);
            }
        } catch (\Throwable $th) {
            return $this->errorResponse("Terjadi Kesalahan" . $th, 400);
        }
    }

    public function Destroy($id){
        try {
            User::destroy($id);
        } catch (\Throwable $th) {
            return $this->errorResponse("Terjadi Kesalahan" . $th, 400);
        }
    }

    public function filter(Request $request){
        try {

      
        $users = User::with(['roles','permissions'])->where('status',$request->status);
        
        if (request()->ajax()) {
           
            return datatables()->of($users)
                ->addIndexColumn()
                ->addColumn('action', function($users){
                    return view('admin.user.action', compact('users'));
                })
                ->addColumn('roles', function($row){
                    $array= array();
                    foreach ($row->roles as $key => $value) {
                        array_push($array, '<span class="badge badge-primary">'.$value->name.'</span>');
                    }
                    return implode(" ", $array); 
             })
         
             ->addColumn('permissions', function($row){
                $array= array();
                foreach ($row->permissions as $key => $value) {
                    array_push($array, '<span class="badge badge-primary">'.$value->name.'</span>');
                }
                return implode(" ", $array); 
         })
             ->rawColumns(['action','roles','email','permissions'])
             ->make(true);
        }

            return $this->successResponse($users, "berhasil ubah password");
        } catch (\Throwable $th) {
            return $this->errorResponse("Terjadi Kesalahan" . $th, 400);
        }
    }
}
