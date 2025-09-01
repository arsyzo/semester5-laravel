<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document about</title>
</head>
<body>
    <h1>contoh</h1>
    <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab dolore veniam tenetur sunt, aut, at vero officia, ut natus nesciunt impedit exercitationem ea molestiae quidem voluptas voluptatem consequatur reprehenderit ullam?</h1>

    <a href="{{ route(name: 'contact.page') }}" > Halaman kontak </a> 
    </a href>
    <a href="{{route('edit.page')}}">Pindah Halaman Edit</a>
</body>
</html> -->

<!DOCTYPE html>
<html>
<head>
    <title>About</title>
</head>
<body>
    <h1>Ini Halaman About</h1>

    <h3>Menu Navigasi:</h3>
    <ul>
        <li><a href="{{ route('contact.page') }}">Contact</a></li>
        <li><a href="{{ route('profil.page') }}">Profil</a></li>
        <li><a href="{{ route('setting.page') }}">Setting</a></li>
    </ul>
</body>
</html>
