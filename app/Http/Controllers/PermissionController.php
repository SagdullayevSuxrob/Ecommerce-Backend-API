<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignPermissionToRoleRequest;
use App\Http\Requests\StorePermissionRequest;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
        $this->authorizeResource(Permission::class, 'permission');
    }

    public function index()
    {
        return $this->response(Permission::all());
    }

    public function store(StorePermissionRequest $request)
    {
        if (Permission::where('name', $request->name)->exists()) {
            return $this->error('Permission already exists.', 422);
        }

        $permission = Permission::query()->create(['name' => $request->name, 'guard_name' => 'web']);
        return $this->success('Permission created successfully.', $permission);
    }

    public function assign(AssignPermissionToRoleRequest $request)
    {
        $permission = Permission::findOrFail($request->permission_id);
        $role = Role::findOrFail($request->role_id);

        if ($role->hasPermissionTo($permission->name)) {
            return $this->error('Role already has this permission.', 422);
        }

        $role->givePermissionTo($permission->name);

        return $this->success('Permission assigned to role successfully.');
    }
}
