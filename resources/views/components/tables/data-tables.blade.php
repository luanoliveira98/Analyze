<x-tables.data-tables-css/>
<table id="DataTable" class="table table-bordered table-striped">
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
                <td>{{$item->id}}</td>
                <td>{{$item->nome}}</td>
                <td>{{$item->created_at}}</td>
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