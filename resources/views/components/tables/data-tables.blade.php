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
                <x-buttons.link route="{{route($route.'.editar', ['id' => $item->id])}}" color="success" icon="fas fa-pencil-alt"/>
                <x-buttons.link route="{{route($route.'.excluir', ['id' => $item->id])}}" color="danger" icon="fas fa-trash-alt"/>               
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