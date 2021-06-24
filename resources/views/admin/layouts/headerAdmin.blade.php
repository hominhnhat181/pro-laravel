
	 <script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
		    setSidebarHeight();
        });
    </script>


    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">

				<div class="floatleft middle">
					<h1>BLUE-NIGHT</h1>
					<p>Nothing Is Absolute, Nothing Is Forever, Nothing From Nothing</p>
                </div>
                <div class="floatright" style="display: flex">
                    <form style="position: relative;top: -5px; right: 18px;" class="form-search" action="{{URL('admin-search')}}">
                        <div class="input-group rounded">
                            <input type="search" class="form-control rounded" name="search" placeholder="Search" aria-label="Search"
                              aria-describedby="search-addon" />
                        </div>
                      </form>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <!-- get user name -->
                            @if (Auth::guest())

                            @else
                            <li>Admin {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} </li>
                            <li><a  href="{{url('luis')}}">Web</a></li>
                            <li><a  href="{{url('logoutadmin')}}">Logout </a></li>
                            @endif
                        </ul>
                    </div>
                   
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        
        <div class="clear">
        </div>
    