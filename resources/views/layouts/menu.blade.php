<li class="treeview {{$menuSeguridad ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-share"></i> <span>Seguridad</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu {{$menuSeguridad ? 'menu-open' : '' }}">
        <li class="{{ Request::is('products*') ? 'active' : '' }}">
            <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
        </li>

        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
        </li>

        <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
            <a href="{!! route('permissions.index') !!}"><i class="fa fa-edit"></i><span>Permissions</span></a>
        </li>

        <li class="{{ Request::is('rols*') ? 'active' : '' }}">
            <a href="{!! route('rols.index') !!}"><i class="fa fa-edit"></i><span>Rols</span></a>
        </li>

        <li class="{{ Request::is('permissionRoles*') ? 'active' : '' }}">
            <a href="{!! route('permissionRoles.index') !!}"><i class="fa fa-edit"></i><span>PermissionRoles</span></a>
        </li>

        <li class="{{ Request::is('userRolProducts*') ? 'active' : '' }}">
            <a href="{!! route('userRolProducts.index') !!}"><i class="fa fa-edit"></i><span>UserRolProducts</span></a>
        </li>
    </ul>
</li>
<li class="treeview {{$menuSeguridad ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-share"></i> <span>Libros</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu {{$menuSeguridad ? 'menu-open' : '' }}">
        <li class="{{ Request::is('products*') ? 'active' : '' }}">
            <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
        </li>

        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
        </li>

        <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
            <a href="{!! route('permissions.index') !!}"><i class="fa fa-edit"></i><span>Permissions</span></a>
        </li>

        <li class="{{ Request::is('rols*') ? 'active' : '' }}">
            <a href="{!! route('rols.index') !!}"><i class="fa fa-edit"></i><span>Rols</span></a>
        </li>

        <li class="{{ Request::is('permissionRoles*') ? 'active' : '' }}">
            <a href="{!! route('permissionRoles.index') !!}"><i class="fa fa-edit"></i><span>PermissionRoles</span></a>
        </li>

        <li class="{{ Request::is('userRolProducts*') ? 'active' : '' }}">
            <a href="{!! route('userRolProducts.index') !!}"><i class="fa fa-edit"></i><span>UserRolProducts</span></a>
        </li>
    </ul>
</li>

<li class="treeview {{$menuSeguridad ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-share"></i> <span>Re asignar</span>
        <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu {{$menuSeguridad ? 'menu-open' : '' }}">
        <li class="{{ Request::is('products*') ? 'active' : '' }}">
            <a href="{!! route('products.index') !!}"><i class="fa fa-edit"></i><span>Products</span></a>
        </li>

        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
        </li>

        <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
            <a href="{!! route('permissions.index') !!}"><i class="fa fa-edit"></i><span>Permissions</span></a>
        </li>

        <li class="{{ Request::is('rols*') ? 'active' : '' }}">
            <a href="{!! route('rols.index') !!}"><i class="fa fa-edit"></i><span>Rols</span></a>
        </li>

        <li class="{{ Request::is('permissionRoles*') ? 'active' : '' }}">
            <a href="{!! route('permissionRoles.index') !!}"><i class="fa fa-edit"></i><span>PermissionRoles</span></a>
        </li>

        <li class="{{ Request::is('userRolProducts*') ? 'active' : '' }}">
            <a href="{!! route('userRolProducts.index') !!}"><i class="fa fa-edit"></i><span>UserRolProducts</span></a>
        </li>
    </ul>
</li>


<li class="{{ Request::is('books*') ? 'active' : '' }}">
    <a href="{!! route('books.index') !!}"><i class="fa fa-edit"></i><span>Books</span></a>
</li>

