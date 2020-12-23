<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{$title}}</h1>
            </div>
            @if(!empty($breadcrumbs))
                <x-breadcrumbs.base>
                    <x-breadcrumbs.item route="{{route('admin.home')}}" label="Home"/>
                    @foreach ($breadcrumbs as $item)
                    <x-breadcrumbs.item route="{{route($item->route)}}" label="{{$item->label}}" active="{{$active}}"/>
                    @endforeach
                </x-breadcrumbs.base>
            @endif
        </div>
    </div>
</div>