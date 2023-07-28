


@include('Back.layout.head')
@include('Back.layout.nav')

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
               @include('Back.layout.sidenav')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    @yield('main-content')
                   
                </main>
 @include('Back.layout.footer')