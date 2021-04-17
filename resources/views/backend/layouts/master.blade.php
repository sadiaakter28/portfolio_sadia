<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>
            @yield('title','Admin')
        </title>
        <link href="{{asset('css/dashboard_styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body>
        @include('backend.partials.navbar')

        <div id="layoutSidenav">
            @include('backend.partials.sidenavbar')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        @yield('main')
                    </div>
                </main>
                @include('backend.partials.footer')
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/dashboard_js.js')}}"></script>
    </body>
</html>
