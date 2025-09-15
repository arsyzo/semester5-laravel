<h1>Daftar Kategori</h1>
<ul>
    @foreach ($categories as $category)
        <li><strong>{{ $category->name }}</strong> - {{ $category->description }}</li>
    @endforeach
</ul>
