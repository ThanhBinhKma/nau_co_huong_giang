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
                $arg_staff = ['system_admin.products.index', 'system_admin.products.create', 'system_admin.products.store'];
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
                $arg_staff = ['system_admin.bills.index', 'system_admin.bills.create', 'system_admin.bills.store'];
            @endphp
            @if (in_array($name, $arg_staff))
                <li class="active">
                @else
                <li>
            @endif
            <a href="">
                <i class="fa fa-database" aria-hidden="true"></i> <span>Hoá đơn</span>
            </a>
            </li>

            @php
                $arg_staff = ['system_admin.spendings.index'];
            @endphp
            @if (in_array($name, $arg_staff))
                <li class="active">
                @else
                <li>
            @endif
            <a href="">
                <i class="fa fa-database" aria-hidden="true"></i> <span>Chi tiêu</span>
            </a>
            </li>




        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
