<x-layouts.admin title="{{$config->edit->title}}" active="{{$config->active}}" :breadcrumbs="$breadcrumbs">
    <x-cards.base>
        <x-cards.header title="{{$config->edit->title}}">
        </x-cards.header>
        <x-cards.body>
            <x-forms.base action="{{route($config->route.'.atualizar', ['id' => $data->id])}}" method="put">
                @foreach($config->fields as $key => $field)
                    <x-forms.input 
                        type="{{$field->type}}" name="{{$field->name}}" label="{{$field->label}}" placeholder="{{$field->placeholder}}" value="{{$data->$key}}"/>
                @endforeach
                <div class="text-right">
                    <x-buttons.btn color="primary"/>
                </div>
            </x-forms.base>
        </x-cards.body>
    </x-cards.base>
</x-layouts.admin>

<x-toasts.success/>