<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">{{$title}}</h1>
            </div>

            @if(isset($breadcrumbs))
                <x-breadcrumbs.base>
                    <x-breadcrumbs.item route="{{route('home')}}" label="Home" active="{{$active}}"/>
                </x-breadcrumbs.base>
            @endif
        </div>
    </div>
</div>