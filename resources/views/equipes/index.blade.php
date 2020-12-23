{{-- {{dd($breadcrumbs)}} --}}
<x-layouts.admin title="Equipes" active="equipes" :breadcrumbs="$breadcrumbs">
    <x-tables.data-tables :data=$data :thead=$thead/>
</x-layouts.admin>
<x-tables.data-tables-js/>