<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <x-navs.parts.brand-logo/>

    <div class="sidebar">
        <x-navs.parts.user-panel/>
        <x-navs.parts.sidebar-search-form/>        

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <x-navs.parts.nav-item label="Membros" icon="fas fa-users" active="{{$active}}">
                    <x-navs.parts.nav-item 
                        label="Administração" route="{{route('membros.administracao')}}" icon="far fa-circle" active="{{$active}}"/>
                    <x-navs.parts.nav-item 
                        label="Staff" route="{{route('membros.staff')}}" icon="far fa-circle" active="{{$active}}"/>
                    <x-navs.parts.nav-item 
                        label="Elenco" route="{{route('membros.elenco')}}" icon="far fa-circle" active="{{$active}}"/>
                </x-navs.parts.nav-item>
                
                <x-navs.parts.nav-item 
                    label="Equipes" route="{{route('equipes.lista')}}" icon="fas fa-sitemap" active="{{$active}}"/>
            </ul>
        </nav>
    </div>
</aside>