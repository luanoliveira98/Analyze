<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Analyze | {{$title}}</title>
        <x-layouts.css.admin/>
    </head>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <x-navs.navbar/>
            <x-navs.sidebar active={{$active}}/>

            <div class="content-wrapper">
                <x-layouts.parts.header title={{$title}} active={{$active}}>
                    <x-breadcrumbs.base/>
                </x-layouts.parts.header>
                
                <section class="content">
                    <div class="container-fluid">
                        {{$slot}}
                    </div>
                </section>
            </div>
        </div>

        <x-layouts.parts.footer/>
        <x-layouts.js.admin/>
    </body>
</html>