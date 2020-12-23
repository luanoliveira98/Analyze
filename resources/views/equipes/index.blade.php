{{-- {{dd($breadcrumbs)}} --}}
<x-layouts.admin title="Equipes" active="equipes" :breadcrumbs="$breadcrumbs">
    <x-tables.data-tables route="admin.equipes" :data=$data :thead=$thead/>
</x-layouts.admin>
<x-tables.data-tables-js/>