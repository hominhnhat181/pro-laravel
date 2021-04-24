<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
                <li><a  href="{{URL('admin')}}">Home</a> </li>
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
                            <li><a href="{{URL('add-object/'.strtolower($key->catName).'/'.$key->id)}}">New {{$key->catName}}</a> </li>
                            <li><a href="{{URL('list-object/'.strtolower($key->catName).'/'.$key->id)}}">List {{$key->catName}}</a> </li>
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>