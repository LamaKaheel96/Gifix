<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.head')

<body class="skin-dark">
    <div class="main-wrapper">
        @include('layouts.navbar')
        @include('layouts.content')
        @include('layouts.footer')
    </div>
    @include('layouts.scripts')
</body>
</html>
