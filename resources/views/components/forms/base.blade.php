<form action="{{$action}}" method="{{($method != 'GET') ? 'POST' : 'GET'}}">
    @csrf
    @if($method == 'PUT') @method('PUT')
    @elseif($method == 'DELETE') @method('DELETE')
    @endif
    {{$slot}}
</form>