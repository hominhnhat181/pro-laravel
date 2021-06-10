<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
                <li><a  href="{{URL('admin')}}">Home</a> </li>  
                <li style="display: hidden"><a class="menuitem" href="{{URL('admin')}}"></a> </li>
                <li><a class="menuitem">Admin</a>
                    <ul class="submenu">
                        <li><a href="{{URL('add-admin')}}">New Admin</a> </li>
                        <li><a href="{{URL('list-admin')}}">List Admin</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Categories</a>
                    <ul class="submenu">
                        <li><a href="{{URL('add-category')}}">New Category</a> </li>
                        <li><a href="{{URL('list-category')}}">List Categories</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Types</a>
                    <ul class="submenu">
                        <li><a href="{{URL('add-type')}}">New Type</a> </li>
                        <li><a href="{{URL('list-type')}}">List Type</a> </li>
                    </ul>
                </li>
                
                @foreach ($data as $key)
                    <li><a class="menuitem">{{$key->catName}}</a>
                        <ul class="submenu">
                            <li><a href="{{URL('new-'.strtolower($key->catName))}}">New {{$key->catName}}</a> </li>
                            <li><a href="{{URL('list-'.strtolower($key->catName))}}">List {{$key->catName}}</a> </li>
                        </ul>
                    </li>
                    {{-- .strtolower($key->catName) --}}
                @endforeach

            </ul>
        </div>
    </div>
</div>