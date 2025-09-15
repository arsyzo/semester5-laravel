<x-app-layout>
    <div class="max-w-xl mx-auto py-6 px-6 bg-indigo-50 rounded-lg shadow-lg">
        <h2 class="text-xl font-bold mb-4">Tambah Produk Baru</h2>
        

        @if ($errors->any())
            <div class="mb-4 text-red-600">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/products">
            @csrf

            <div class="mb-4">
                <label for="name" class="block font-semibold">Nama Produk</label>
                <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="price" class="block font-semibold">Harga</label>
                <input type="number" name="price" id="price" class="w-full border rounded px-3 py-2" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block font-semibold">Deskripsi</label>
                <textarea name="description" id="description" class="w-full border rounded px-3 py-2"></textarea>
            </div>

            <div class="mb-4">
                <label for="category_id" class="block font-semibold">Kategori</label>
                <select name="category_id" id="category_id" class="w-full border rounded px-3 py-2" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-blue font-semibold px-6 py-2 rounded shadow">
                Simpan
            </button>

        </form>
    </div>
</x-app-layout>