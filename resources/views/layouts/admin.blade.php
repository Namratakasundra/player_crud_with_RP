<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.include.head')
    </head>
    
    <body>    

    <header class="navbar navbar-header navbar-header-fixed">
        @include('layouts.include.header')
    </header><!-- navbar -->

    <div class="">
        <div class="container-fluid">
            <div class="content">
            </div>
            <link rel="stylesheet" href="{{ ('/custom.css') }}">
             
            <!-- breadcrumb-->
            @include('layouts.include.breadcrumb')
            
            @yield('content')   
        </div><!-- container -->
    </div><!-- content -->
        
    <footer class="content-footer">
        @include('layouts.include.footer')  
    </footer><!-- content-footer -->

    <!-- script -->
    @include('layouts.include.script')

    
    
    </body>
</html>

