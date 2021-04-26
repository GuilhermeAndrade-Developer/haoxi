<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use App\Models\User;


class RoleController extends Controller
{
    protected $repository;

    function __construct(Role $role)
    {
        $this->repositorytory = $role;
    }

    public function index()
    {

        if(auth()->check() && auth()->user()->is_admin == 1) {

            $role = $this->repository->get();

        }else{
            return back()->withMessage("You need to have admin to access this page");
        }

        return view ('role.index', compact('name', 'guard_name'));

    }

    public function store(Request $request)
    {
        if(auth()->check() && auth()->user()->is_admin == 1) 
        {

            Permission::create(['name' => 'register_product']);
            Permission::create(['name' => 'edit_product']);
            Permission::create(['name' => 'delete_product']);

            $user = User::where('is_admin', 1)->get();
            
            $role = Role::create(['name' => 'admin']);
            $role->givePermissionTo('register_product');
            $role->givePermissionTo('edit_product');
            $role->givePermissionTo('delete_product');

            $user->assigned($role);

            $role = $this->repository->where('name', $request->name)->first();

            if (isset($role)) {
                $data = [
                    'message' => 'Rule already registered.',
                    'status' => 'ERROR'
                ];
            }

            return $role = $this->repository->create($request->all());
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

}
