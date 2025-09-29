@extends(view: 'layouts.app')

@section(section: 'title', content: 'Halaman Produk')

@section(section: 'content')
    <h1>Ini adalah halaman produk.</h1>
    <h1>Selamat datang di halaman produk kami! {{ $nama }}</h1>

    <p>isi alert : {{ $alertmessage }}</p>
    <p>type alert : {{ $alerttype }}</p>
<!-- hasilnya eror semeentatra blom diperbaiki  -->
@endsection