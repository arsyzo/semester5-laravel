<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman barang</title>
</head>
<body>
    <p>barang <?php echo $isi_data; ?></p>
</body>
</html> -->

@extends('utama')

@section('judul_menu')
    <p>ini adalah tampilan dari judul menu user dengan id; {{ $isi_data }}</p>
@if($isi_data>20)
    <p>isi data kurang 20</p>
@elseif($isi_data > 25)
    <p>isi kurang dari 25</p>
@else
    <p>isi data kurang dari 15</p>
@endif

    @endsection

@section('isi_menu')
<p>ini adalah tampilan dari isi menu</p>    
@endsection


