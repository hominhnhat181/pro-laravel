
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
					<h1>WELCOME ADMINS</h1>
					<p>Nothing Is Absolute, Nothing Is Forever, Nothing From Nothing</p>
				</div>
                <div class="floatright">

                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <!-- get user name -->
                            
                           
                            
                            <li>Hello {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}} </li>



                            <li><a href="{{url('logout')}}">Logout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
        <div class="grid_12">
            <ul class="nav main">
                <li class="ic-dashboard"><a href="admin"><span></span></a> </li>
            </ul>
        </div>
        <div class="clear">
        </div>
    