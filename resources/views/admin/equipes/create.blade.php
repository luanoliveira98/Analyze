<x-layouts.admin title="{{$config->create->title}}" active="{{$config->active}}" :breadcrumbs="$breadcrumbs">
    <x-cards.base>
        <x-cards.header title="{{$config->create->title}}">
        </x-cards.header>
        <x-cards.body>
            <x-forms.base action="{{route($config->route.'.salvar')}}" method="post">
                @foreach($config->create->fields as $field)
                    <x-forms.input 
                        type="{{$field->type}}" name="{{$field->name}}" label="{{$field->label}}" placeholder="{{$field->placeholder}}"/>
                @endforeach
                <div class="text-right">
                    <x-buttons.btn color="primary"/>
                </div>
            </x-forms.base>
        </x-cards.body>
    </x-cards.base>
</x-layouts.admin>