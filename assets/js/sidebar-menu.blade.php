<div class="col-md-3 left_col">
    <div class="scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title">
                <img src="{{URL::to('/assets/images/main_photo.jpeg')}}" style="margin-left: 8px;" height="50" alt="" />
            </a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix" style="margin-left: 3px; margin-top: 18px;">
            <div class="profile_info">
                <h2>{{Auth::user()->name}}</h2>
                <span>
                    Admin
                </span>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a href="{{ URL::to('/') }}"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="{{ URL::to('/dashboard/users') }}"><i class="fa fa-users"></i> Users</a></li>
                    <li><a href="{{ URL::to('/dashboard/products') }}"><i class="fa fa-product-hunt"></i> Products</a></li>
                    <li><a href="{{ URL::to('/dashboard/variables') }}"><i class="fa fa-cogs"></i> Variables</a></li>
                    <li><a href="{{ URL::to('/dashboard/messages') }}"><i class="fa fa-envelope-o"></i> Messages</a></li>

                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings" href="{{ URL::to('settings') }}">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Doctors">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Patients">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ URL::to('/login') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>
