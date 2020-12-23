<x-layouts.admin title="Equipes" active="equipes" :breadcrumbs="$breadcrumbs">
    <x-cards.base>
        <x-cards.header title="Lista de Equipes">
            <div class="ml-auto">
                <x-buttons.link 
                    route="{{route('admin.equipes.inserir')}}" color="success" icon="fas fa-plus" title="Inserir"/>
            </div>
        </x-cards.header>
        <x-cards.body>
            <x-tables.data-tables route="admin.equipes" :data=$data :thead=$thead/>
        </x-cards.body>
    </x-cards.base>
</x-layouts.admin>
<x-tables.data-tables-js/>