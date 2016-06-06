<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreatePermissionRoleRequest;
use App\Http\Requests\UpdatePermissionRoleRequest;
use App\Repositories\PermissionRoleRepository;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Repositories\PermissionRepository;
use App\Repositories\RolRepository;

class PermissionRoleController extends AppBaseController
{
    /** @var  PermissionRoleRepository */
    private $permissionRoleRepository;

    public function __construct(PermissionRoleRepository $permissionRoleRepo)
    {
        $this->permissionRoleRepository = $permissionRoleRepo;
    }

    /**
     * Display a listing of the PermissionRole.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->permissionRoleRepository->pushCriteria(new RequestCriteria($request));
        $permissionRoles = $this->permissionRoleRepository->all();

        return view('permissionRoles.index')
            ->with('permissionRoles', $permissionRoles);
    }

    /**
     * Show the form for creating a new PermissionRole.
     *
     * @return Response
     */
    public function create(PermissionRepository $permissionRepo,RolRepository $rolRepo)
    {
        #select Permission
        $this->permissionRepository = $permissionRepo;
        $permissions = $this->permissionRepository->all();
        $selectPermission = [];
        foreach($permissions as $perm):
            $selectPermission["$perm->id"] = $perm->name;
        endforeach;
        $defaultSelectPermission = null;

        #select Rol
        $this->rolRepository = $rolRepo;
        $rols = $this->rolRepository->all();
        $selectRol = [];
        foreach($rols as $rol):
            $selectRol["$rol->id"] = $rol->name;
        endforeach;
        $defaultSelectRol = null;

        return view('permissionRoles.create')
            ->with('selectPermission', $selectPermission)
            ->with('defaultSelectPermission',$defaultSelectPermission)
            ->with('selectRol', $selectRol)
            ->with('defaultSelectRol',$defaultSelectRol);
    }

    /**
     * Store a newly created PermissionRole in storage.
     *
     * @param CreatePermissionRoleRequest $request
     *
     * @return Response
     */
    public function store(CreatePermissionRoleRequest $request)
    {
        $input = $request->all();

        $permissionRole = $this->permissionRoleRepository->create($input);

        Flash::success('PermissionRole saved successfully.');

        return redirect(route('permissionRoles.index'));
    }

    /**
     * Display the specified PermissionRole.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $permissionRole = $this->permissionRoleRepository->findWithoutFail($id);

        if (empty($permissionRole)) {
            Flash::error('PermissionRole not found');

            return redirect(route('permissionRoles.index'));
        }

        return view('permissionRoles.show')->with('permissionRole', $permissionRole);
    }

    /**
     * Show the form for editing the specified PermissionRole.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $permissionRole = $this->permissionRoleRepository->findWithoutFail($id);

        if (empty($permissionRole)) {
            Flash::error('PermissionRole not found');

            return redirect(route('permissionRoles.index'));
        }

        return view('permissionRoles.edit')->with('permissionRole', $permissionRole);
    }

    /**
     * Update the specified PermissionRole in storage.
     *
     * @param  int              $id
     * @param UpdatePermissionRoleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePermissionRoleRequest $request)
    {
        $permissionRole = $this->permissionRoleRepository->findWithoutFail($id);

        if (empty($permissionRole)) {
            Flash::error('PermissionRole not found');

            return redirect(route('permissionRoles.index'));
        }

        $permissionRole = $this->permissionRoleRepository->update($request->all(), $id);

        Flash::success('PermissionRole updated successfully.');

        return redirect(route('permissionRoles.index'));
    }

    /**
     * Remove the specified PermissionRole from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $permissionRole = $this->permissionRoleRepository->findWithoutFail($id);

        if (empty($permissionRole)) {
            Flash::error('PermissionRole not found');

            return redirect(route('permissionRoles.index'));
        }

        $this->permissionRoleRepository->delete($id);

        Flash::success('PermissionRole deleted successfully.');

        return redirect(route('permissionRoles.index'));
    }
}
