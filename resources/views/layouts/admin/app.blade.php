<!--

=========================================================
* Volt Pro - Premium Bootstrap 5 Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)
* License (https://themesberg.com/licensing)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

{{-- START CSS --}}

@include('layouts.admin.css')
{{-- END CSS --}}

<body>

    {{-- START SIDEBAR --}}
    @include('layouts.admin.sidebar')
    {{-- END SIDEBAR --}}


    <main class="content">

        {{-- START Header --}}
        @include('layouts.admin.header')
        {{-- END header --}}


        {{-- start main content --}}
        @yield('content')
        {{-- END main content --}}

        {{-- start footer --}}
        @include('layouts.admin.footer')
        {{-- END footer --}}

    </main>


    {{-- start js --}}
    <!-- Core -->
    @include('layouts.admin.js')
    {{-- END js --}}

</body>

</html>
