<x-tables.data-tables-css/>
<table id="DataTable" class="table table-bordered table-striped text-center">
    <thead>
        <tr>
            @foreach ($thead as $tr)
                @if($tr == 'id') <th>#</th>
                @else <th>{{ucfirst($tr)}}</th>
                @endif
            @endforeach
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            @foreach ($thead as $tr)
                <td>{{$item->$tr}}</td>
            @endforeach
            <td>
                <x-forms.base action="{{route($route.'.excluir', ['id' => $item->id])}}" method="delete">
                    <x-buttons.link route="{{route($route.'.editar', ['id' => $item->id])}}" color="info" icon="fas fa-pencil-alt" title="Editar"/>
                    <x-buttons.btn color="danger" icon="fas fa-trash-alt" title="Excluir" size="sm"/>
                </x-forms.base>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            @foreach ($thead as $tr)
                @if($tr == 'id') <th>#</th>
                @else <th>{{ucfirst($tr)}}</th>
                @endif
            @endforeach
            <th>Ações</th>
        </tr>
    </tfoot>
</table>