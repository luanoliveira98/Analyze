<x-layouts.admin title="{{$config->index->title}}" active="{{$config->active}}" :breadcrumbs="$breadcrumbs">
    <x-cards.base>
        <x-cards.header title="{{$config->index->title}}">
            <div class="ml-auto">
                <x-buttons.link 
                    route="{{route($config->route.'.inserir')}}" color="success" icon="fas fa-plus" title="Inserir"/>
            </div>
        </x-cards.header>
        <x-cards.body>
            <x-tables.data-tables route="{{$config->route}}" :data=$data :thead=$thead/>
        </x-cards.body>
    </x-cards.base>
</x-layouts.admin>
<x-tables.data-tables-js/>

<x-toasts.success/>