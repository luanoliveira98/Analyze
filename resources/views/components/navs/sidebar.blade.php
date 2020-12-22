<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <x-navs.parts.brand-logo/>

    <div class="sidebar">
        <x-navs.parts.user-panel/>
        <x-navs.parts.sidebar-search-form/>        

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @foreach(config('menu.items') as $item)
                    <x-navs.parts.nav-item 
                        label="{{$item->label}}" 
                        route="{{(isset($item->route)) ? route($item->route) : ''}}"
                        icon="{{$item->icon}}" 
                        active="{{$active}}">
                        @if(!isset($item->route))
                            @foreach($item->subitems as $subitem)
                                <x-navs.parts.nav-item 
                                    label="{{$subitem->label}}" 
                                    route="{{route($subitem->route)}}"
                                    icon="far fa-circle" 
                                    active="{{$active}}"/>
                            @endforeach
                        @endif
                    </x-navs.parts.nav-item>
                @endforeach
            </ul>
        </nav>
    </div>
</aside>