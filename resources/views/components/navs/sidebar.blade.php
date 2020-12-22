<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <x-navs.parts.brand-logo/>

    <div class="sidebar">
        <x-navs.parts.user-panel/>
        <x-navs.parts.sidebar-search-form/>        

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <x-navs.parts.nav-item 
                    label="Membros" route="{{route('admin.home')}}" icon="fas fa-users" active="{{$active}}"/>
                
                <x-navs.parts.nav-item label="Equipes" icon="fas fa-sitemap" active="{{$active}}">
                    <x-navs.parts.nav-item 
                        label="Lycans Blue" route="{{route('admin.home')}}" icon="far fa-circle" active="{{$active}}"/>
                    <x-navs.parts.nav-item 
                        label="Lycans Red" route="{{route('admin.home')}}" icon="far fa-circle" active="{{$active}}"/>
                    <x-navs.parts.nav-item 
                        label="Lycans Prime" route="{{route('admin.home')}}" icon="far fa-circle" active="{{$active}}"/>
                    <x-navs.parts.nav-item 
                        label="Lycans Girlz" route="{{route('admin.home')}}" icon="far fa-circle" active="{{$active}}"/>
                </x-navs.parts.nav-item> 
            </ul>
        </nav>
    </div>
</aside>