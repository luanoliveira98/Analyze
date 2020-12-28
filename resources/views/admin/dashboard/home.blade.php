<x-layouts.admin title="Home" active="home">
    <div class="row">
        {{-- {{dd(config('menu.items'))}} --}}
        @foreach (config('menu.items') as $key => $item)
            @if(!$item->dashboard)
            @elseif(!isset($item->subitems))
            <x-dashboard.widget 
                count="{{$quantidades->$key}}" label="{{$item->label}}" icon="{{$item->icon}}" route="{{route($item->route)}}"/>
            @else
                @foreach ($item->subitems as $subkey => $subitem)
                <x-dashboard.widget 
                    count="{{$quantidades->$subkey}}" label="{{$subitem->label}}" icon="{{$subitem->icon}}" route="{{route($subitem->route)}}"/>
                @endforeach
            @endif
        @endforeach
    </div>
</x-layouts.admin>