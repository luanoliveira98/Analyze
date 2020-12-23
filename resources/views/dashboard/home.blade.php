<x-layouts.admin title="Home" active="home">
    <div class="row">
        <x-dashboard.widget count="6" label="Administração" icon="fas fa-user-tie" route="{{route('membros.administracao')}}"/>
        <x-dashboard.widget count="9" label="Staff" icon="fas fa-user-graduate" route="{{route('membros.staff')}}"/>
        <x-dashboard.widget count="43" label="Elenco" icon="fas fa-user-friends" route="{{route('membros.elenco')}}"/>
        <x-dashboard.widget count="4" label="Equipes" icon="fas fa-sitemap" route="{{route('equipes.lista')}}"/>
    </div>
</x-layouts.admin>