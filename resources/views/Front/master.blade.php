







<!-- headerpart -->
@include('Front.layouts.header')
   
    <!-- Quick view -->
    <!-- quick view to be inserted -->
    <!-- Header  -->
    @include('Front.layouts.nav')

   <!-- End Header  -->




   @include('Front.layouts.mobilenav')
    <!--End header-->

    <main class="main">
      @yield('main-content')
    </main>
    @include('Front.layouts.footer')
   @include('Front.layouts.script')