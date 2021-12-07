
    <div class="sidebar">

       <ul class="widget widget-menu unstyled">
            <li class="active"><a href="{{action('Admin\HotelController@index')}}"><i class="menu-icon icon-dashboard"></i>Dashboard
                </a>
            </li>
        </ul>
                <!--/.widget-nav-->
        <ul class="widget widget-menu unstyled">
            <li><a href="{{action('Admin\HotelController@index')}}"><i class="menu-icon icon-bell"></i>Hotels </a></li>
            <li><a href="{{action('Admin\HotelTypeController@index')}}"><i class="menu-icon icon-wrench"></i> Hotel Types </a></li>
        </ul>
        <ul class="widget widget-menu unstyled">
            <li><a href="{{action('Admin\CarController@index')}}"><i class="menu-icon icon-home"></i> Cars </a></li>
            <li><a href="{{action('Admin\PlaceController@index')}}"><i class="menu-icon icon-user-md"></i> Places </a></li>
            <li><a href="{{action('Admin\GalleryController@index')}}"><i class="menu-icon icon-tag"></i> Gallery </a></li> </ul>
                <!--/.widget-nav-->
        
        <ul class="widget widget-menu unstyled">
                <li><a href="{{action('Admin\BlogController@index')}}"><i class="menu-icon icon-signout"></i>Blogs </a></li> 
            </ul>

    </div>
