<x-layouts.admin title="Home" active="home">
    <div class="row">
        <x-dashboard.widget 
            count="{{$quantidades->administracao}}" label="Administração" icon="fas fa-user-tie" route="{{route('admin.membros.administracao')}}"/>
        <x-dashboard.widget 
            count="{{$quantidades->staff}}" label="Staff" icon="fas fa-user-graduate" route="{{route('admin.membros.staff')}}"/>
        <x-dashboard.widget 
            count="{{$quantidades->elenco}}" label="Elenco" icon="fas fa-user-friends" route="{{route('admin.membros.elenco')}}"/>
        <x-dashboard.widget 
            count="{{$quantidades->equipes}}" label="Equipes" icon="fas fa-sitemap" route="{{route('admin.equipes.listar')}}"/>
        <x-dashboard.widget 
            count="{{$quantidades->adversarios}}" label="Adversários" icon="fas fa-sitemap" route="{{route('admin.adversarios.listar')}}"/>
    </div>
</x-layouts.admin>