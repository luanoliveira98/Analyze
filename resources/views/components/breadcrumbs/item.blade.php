<li class="breadcrumb-item @if($active) active @endif">
    @if(!$active)
        <a href="{{$route}}">{{$label}}</a>
    @else
        {{$label}}
    @endif
</li>