<x-layouts.admin title="Editar Equipe" active="equipes" :breadcrumbs="$breadcrumbs">
    <x-cards.base>
        <x-cards.header title="Editar Equipe">
        </x-cards.header>
        <x-cards.body>
            <x-forms.base action="{{route('admin.equipes.atualizar', ['id' => $equipe->id])}}" method="put">
                <x-forms.input name="nome" label="Nome" placeholder="Nome da Equipe" value="{{$equipe->nome}}"/>
                <div class="text-right">
                    <x-buttons.btn color="primary"/>
                </div>
            </x-forms.base>
        </x-cards.body>
    </x-cards.base>
</x-layouts.admin>

<x-toasts.success/>