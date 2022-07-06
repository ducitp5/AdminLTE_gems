<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.include.head')
</head>
<body>

<div id="wrapper">

    @include('admin.include.navbar')

    @yield('content')

</div>
<!-- /#wrapper -->

    @include('admin.include.script')
</body>
</html>
