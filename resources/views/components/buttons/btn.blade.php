<button type="{{$type}}" class="btn btn-{{$color}} @if($size) btn-{{$size}} @endif" title="{{$title}}">
    @if($icon) <i class="{{$icon}}"></i>
    @else {{$label}}
    @endif
</button>