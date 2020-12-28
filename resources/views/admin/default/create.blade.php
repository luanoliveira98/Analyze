<x-layouts.admin title="{{$config->create->title}}" active="{{$config->active}}" :breadcrumbs="$breadcrumbs">
    <x-cards.base>
        <x-cards.header title="{{$config->create->title}}">
        </x-cards.header>
        <x-cards.body>
            <x-forms.base action="{{route($config->route.'.salvar')}}" method="post">
                <div class="row">
                    @foreach($config->fields as $field)
                        @if($field->type == 'select')
                        <x-forms.select
                            name="{{$field->name}}" label="{{$field->label}}" placeholder="{{$field->placeholder}}" :options=$field/>
                        @else
                        <x-forms.input 
                            type="{{$field->type}}" name="{{$field->name}}" label="{{$field->label}}" placeholder="{{$field->placeholder}}"/>
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