<x-layouts.admin title="Dashboard" active="equipes">
    <div class="row">
        <x-dashboard.widget count="50" label="Membros" icon="ion ion-bag" route="{{route('admin.home')}}"/>
        <x-dashboard.widget count="4" label="Equipes" icon="fas fa-sitemap" route="{{route('admin.home')}}"/>
    </div>
</x-layouts.admin>