<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<div class="container-fluid">
    @include('includes.header')
    <footer class="container-fluid bg-dark text-white text-justify">
        <div class="container">
            <main role="main">
                @yield('content')
            </main>
            @include('includes.footer')
        </div>
    </footer>
</div>
<main role="main">
    @yield('content')
</main>
@include('includes.footer')

</body>
</html>
