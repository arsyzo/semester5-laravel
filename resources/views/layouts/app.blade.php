<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield(section: 'title', default: 'Praktikum Blade')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Blade Praktikum</a>
    </nav>  

    <div class="container mt-4">
        @yield(section:'content')
    </div>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uts</title>
</head>
<body>
    @include('layouts.header')
    <div class="content">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>
</html>


