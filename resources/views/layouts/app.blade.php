<html>

<head>
    @include('partials.head')

</head>

<body class="boxed-size">
    @include('partials.loader')
    @include('partials.sidebar')
    <div class="container-fluid">
        <div class="main-content d-flex flex-column">
            @include('partials.navbar')
            <div class="main-content-container overflow-hidden">
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials.footer')
    </div>

    @include('partials.script')
</body>

</html>