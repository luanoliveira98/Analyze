<li class="nav-item @if($active) menu-open @endif">
    <a href="@if($route){{$route}}@else # @endif" class="nav-link @if($active) active @endif">
        <i class="nav-icon {{$icon}}"></i>
        <p> 
            {{$label}}

            @if(!$route)
            <i class="right fas fa-angle-left"></i>
            @endif
        </p>
    </a>
    @if(!$route)
    <ul class="nav nav-treeview">
        {{$slot}}
    </ul>
    @endif
</li>