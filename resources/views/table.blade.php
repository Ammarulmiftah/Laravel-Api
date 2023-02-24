<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>  
    @if ($message = Session::get('Sukses'))
            <div class="alert alert-info" role="alert">
              {{ $message }}
            </div>
          
            @endif
    <div class="container mt-3">
<a href="/input" class="btn bg-warning mt-1 p-1">Tambah</a>
<table class="table table-striped table-hover">
  <thead class="bg-body-tertiary">
    <tr>
      <th>Nama Barang</th>
      <th>Deskripsi Barang</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    @php
      $no = 1;
    @endphp

    @foreach($data as $row)
    <tr>
      <td>{{ $row->namaBarang }}</td>
      <td>{{ $row->deskripsiBarang }}</td>
      <td>{{ $row->harga }}</td>
      <td>
        <a href="/table/{{ $row->id }}/edit" class="btn btn-danger" style="background-color: green;">Edit</a>
        <a href="/table/{{ $row->id }}/delete" onclick="return confirm('Apakah Kamu Yakin?')" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>