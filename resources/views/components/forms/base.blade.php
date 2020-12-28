<form action="{{$action}}" method="{{($method != 'GET') ? 'POST' : 'GET'}}" class="row">
    @csrf
    @if($method == 'PUT') @method('PUT')
    @elseif($method == 'DELETE') @method('DELETE')
    @endif
    {{$slot}}
</form>