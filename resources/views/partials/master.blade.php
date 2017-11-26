<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="/favicon.ico">
        <!-- App title -->
        <title>@yield('title')</title>

        @include('partials.styles')
    </head>

    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">
                @include('partials.header')
            </div>
            <!-- Top Bar End -->

            @include('partials.sidebar')


            <!-- ================================== -->
            <!-- Start right Content here -->
            <!-- ================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3>@yield('heading')</h3>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- Session Messages -->
                        <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has($msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get($msg) }}</p>
                                @endif
                            @endforeach
                        </div>
                        <!-- End Session Messages -->

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Oops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @yield('content')

                    </div> <!-- container -->

                </div> <!-- content -->

                @include('partials.footer')

            </div>

        </div>
        <!-- END wrapper -->

        @include('partials.scripts')
        @yield('page_scripts')
    </body>
</html>