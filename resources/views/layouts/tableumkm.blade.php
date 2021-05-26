@extends('../admin.layout')
@section('content')
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama UMKM</th>
      <th scope="col">Alamat</th>
      <th scope="col">latitude</th>
      <th scope="col">longitude</th>
      <th scope="col">gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
@endsection