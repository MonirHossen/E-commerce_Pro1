<div class="sidebar-inner slimscrollleft">
    <div class="user-details">
        <div class="text-center">
            <img src="{{ asset('assets/admin/images/users/avatar-1.jpg') }}" alt="" class="img-circle">
        </div>
        <div class="user-info">
            <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
            </div>

            <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
        </div>
    </div>
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>
            <li>
                <a href="{{ route('admin.dashboard') }}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Users </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('user.create') }}">Create New User</a></li>
                    <li><a href="{{ route('user.index') }}">List Of User</a></li>
                </ul>
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i> <span> Categories </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                <ul class="list-unstyled">
                    <li><a href="{{ route('category.create') }}">Create New Category</a></li>
                    <li><a href="{{ route('category.index') }}">List Of Category</a></li>
                </ul>
            </li>

            <!--<li class="has_sub">-->
            <!--<a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Menu </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
            <!--<ul>-->
            <!--<li class="has_sub">-->
            <!--<a href="javascript:void(0);" class="waves-effect"><span>Menu Item 1.1</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
            <!--<ul style="">-->
            <!--<li><a href="javascript:void(0);"><span>Menu Item 2.1</span></a></li>-->
            <!--<li><a href="javascript:void(0);"><span>Menu Item 2.2</span></a></li>-->
            <!--</ul>-->
            <!--</li>-->
            <!--<li>-->
            <!--<a href="javascript:void(0);"><span>Menu Item 1.2</span></a>-->
            <!--</li>-->
            <!--</ul>-->
            <!--</li>-->
        </ul>
    </div>
    <div class="clearfix"></div>
</div> <!-- end sidebarinner -->
