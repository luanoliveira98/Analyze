<x-layouts.admin title="Inserir Equipe" active="equipes" :breadcrumbs="$breadcrumbs">
    <x-cards.base>
        <x-cards.header title="Inserir Equipe">
        </x-cards.header>
        <x-cards.body>
            <x-forms.base action="{{route('admin.equipes.salvar')}}" method="post">
                <x-forms.input name="nome" label="Nome" placeholder="Nome da Equipe"/>
                <div class="text-right">
                    <x-buttons.btn color="primary"/>
                </div>
            </x-forms.base>
        </x-cards.body>
    </x-cards.base>
</x-layouts.admin>