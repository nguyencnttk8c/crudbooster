<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        @include('crudbooster::_admin_template._sidebar.userpanel')

        <div class='main-menu'>
            <ul class="sidebar-menu">
                <li class="header">{{ cbTrans("menu_navigation")}}</li>
                <!-- Optionally, you can add icons to the links -->
                <?php $hasDashboard = \crocodicstudio\crudbooster\Modules\MenuModule\MenuRepo::sidebarDashboard(); ?>
                @includeWhen($hasDashboard, 'crudbooster::_admin_template._sidebar.dashboard')
                @include('crudbooster::_admin_template._sidebar.dynamic_menus')

                @if(CRUDBooster::isSuperadmin())
                    <li class="header">{{ cbTrans('SUPERADMIN') }}</li>
                    @include('crudbooster::_admin_template._sidebar.super_admin.users')
                    @include('crudbooster::_admin_template._sidebar.super_admin.module')
                @endif

                @foreach(app('CbDynamicMenus')->getMenus() as $menu)
                    @include($menu)
                @endforeach
            </ul>
        </div>


    </section>

</aside>


