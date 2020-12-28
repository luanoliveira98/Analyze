<x-layouts.admin title="{{$config->edit->title}}" active="{{$config->active}}" :breadcrumbs="$breadcrumbs">
    <x-cards.base>
        <x-cards.header title="{{$config->edit->title}}">
        </x-cards.header>
        <x-cards.body>
            <x-forms.base action="{{route($config->route.'.atualizar', ['id' => $data->id])}}" method="put">
                <div class="row">
                    @foreach($config->fields as $key => $field)
                        @if($field->type == 'select')
                        <x-forms.select
                            name="{{$field->name}}" label="{{$field->label}}" placeholder="{{$field->placeholder}}" :options=$field value="{{$data->$key}}"/>
                        @else
                        <x-forms.input 
                            type="{{$field->type}}" name="{{$field->name}}" label="{{$field->label}}" placeholder="{{$field->placeholder}}" value="{{$data->$key}}"/>
                        @endif
                    @endforeach
                    <div class="ml-auto">
                        <x-buttons.btn color="primary"/>
                    </div>
                </div>
            </x-forms.base>
        </x-cards.body>
    </x-cards.base>
</x-layouts.admin>

<x-toasts.success/>