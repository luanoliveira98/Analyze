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
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">{{$title}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="content">
                    <div class="container-fluid">
                        {{$slot}}
                    </div>
                </section>
            </div>
        </div>

        <x-layout.parts.footer/>
        <x-layouts.js.admin/>
    </body>
</html>