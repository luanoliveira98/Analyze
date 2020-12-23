<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <x-navs.parts.navbar-bars-item/>
        <x-navs.parts.navbar-item label="Home" route="{{route('admin.home')}}"/>
    </ul>
    <ul class="navbar-nav ml-auto">
        <x-navs.parts.navbar-item label="Logout" route="{{route('admin.logout')}}"/>
    </ul>
</nav>