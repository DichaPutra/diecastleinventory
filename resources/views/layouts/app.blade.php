<!doctype html>
<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <link href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <!-- styles -->
        <link href="{{asset('public/css/styles.css')}}" rel="stylesheet">

        @yield('head')
       
    </head>
    <body>
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <!-- Logo -->
                        <div class="logo">
                            <h1><a href="index.html">DiecastleStore Inventory</a></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            @yield('content')
        </div>

        <link href="{{asset('public/vendors/datatables/dataTables.bootstrap.css')}}" rel="stylesheet" media="screen">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery.js"></script>
        <!-- jQuery UI -->
        <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('public/vendors/datatables/dataTables.bootstrap.js')}}"></script>
        <script src="{{asset('public/js/custom.js')}}"></script>
        <script src="{{asset('public/js/tables.js')}}"></script>

        <!--         jQuery UI 
                <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        
                 jQuery (necessary for Bootstrap's JavaScript plugins) 
                <script src="https://code.jquery.com/jquery.js"></script>
                 Include all compiled plugins (below), or include individual files as needed 
                <script src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
                <script src="{{asset('public/js/custom.js')}}"></script>
                <script src="{{asset('public/js/tables.js')}}"></script>-->

        @yield('script')
    </body>
</html>
