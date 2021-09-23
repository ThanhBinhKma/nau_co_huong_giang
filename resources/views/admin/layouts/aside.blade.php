<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        @php
            $name = Route::currentRouteName();
            $user = \Auth::user();

        @endphp
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p></p>
                <i class="fa fa-circle text-success"></i> Online
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            @php
                $arg_dashboard = ['system_admin.get_dashboard'];
            @endphp
            @if (in_array($name, $arg_dashboard))
                <li class="active">
                @else
                <li>
            @endif
            <a href="{{ route('system_admin.dashboard.index') }}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
            </li>

            @php
                $arg_staff = ['system_admin.services.index', 'system_admin.services.create', 'system_admin.services.store', 'system_admin.services.edit'];
            @endphp
            @if (in_array($name, $arg_staff))
                <li class="active">
                @else
                <li>
            @endif
            <a href="{{ route('system_admin.services.index') }}">
                <i class="fa fa-database" aria-hidden="true"></i> <span>Dịch vụ</span>
            </a>
            </li>
            @php
                $arg_staff = ['system_admin.menus.index', 'system_admin.menus.create', 'system_admin.menus.store', 'system_admin.menus.edit'];
            @endphp
            @if (in_array($name, $arg_staff))
                <li class="active">
                @else
                <li>
            @endif
            <a href="{{ route('system_admin.menus.index') }}">
                <i class="fa fa-database" aria-hidden="true"></i> <span>Thực đơn cỗ</span>
            </a>
            </li>

            @php
                $arg_staff = ['system_admin.foods.index', 'system_admin.foods.create', 'system_admin.foods.store', 'system_admin.foods.edit'];
            @endphp
            @if (in_array($name, $arg_staff))
                <li class="active">
                @else
                <li>
            @endif
            <a href="{{ route('system_admin.foods.index') }}">
                <i class="fa fa-database" aria-hidden="true"></i> <span>Các món</span>
            </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
