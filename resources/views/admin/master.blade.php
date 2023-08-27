<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roksyn - Bootstrap 5 Admin Template</title>

    @include('admin.inc.style')

  </head>
  <body>

    <!--start header-->

    @include('admin.partials.header')

     <!--end header-->


     <!--start sidebar-->

     @include('admin.partials.sidebar')

     <!--end sidebar-->


    <!--start main content-->
     <main class="page-content">
        @yield('content')
     </main>
     <!--end main content-->


    <!--start overlay-->
      <div class="overlay btn-toggle-menu"></div>
    <!--end overlay-->

    <!-- Search Modal -->
    @include('admin.partials.search-modal')



    <!--start theme customization-->

    @include('admin.partials.customization')

    <!--end theme customization-->

    @include('admin.inc.script')


  </body>
</html>
