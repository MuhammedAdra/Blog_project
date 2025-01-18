<!DOCTYPE html>
<html lang="en">
@include('them.partials.head')



<body>
    @include('them.partials.header')

    @yield('content')
    @include('them.partials.footer')

    @include('them.partials.script')

</body>

</html>
