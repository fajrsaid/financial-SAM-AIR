@extends('layouts.main')
@section('container')
<!-- Begin Page Content -->

<div class="container-fluid">
<div class="container text-center p-4">
<title>Pengajuan {{$pengajuan->nama_project}}</title>
</head>
<body>

<div class="container mt-3">
  <div class="row">
    <div class="col-12">

    <div class="pt-3 d-flex justify-content-end align-items-center">
      <h1 class="h2 mr-auto">Pengajuan {{$pengajuan->nama_project}}</h1>
    </div>
    <hr>

    <ul>
      <li>Nama: <a href ="/{{$pengajuan->file}}"> {{$pengajuan->nama_project}}</a></td></li>
      <li>Tanggal: {{$pengajuan->tanggal_pengajuan}} </li>
      <li>Total: {{$pengajuan->total}} </li>
      <li>Status: {{$pengajuan->id_status}} </li>
    </ul>
    <a href="{{ route('pengajuan.edit',['pengajuan' => $pengajuan->id]) }}"
    class="btn btn-primary">Edit</a>
    <form action="{{ route('pengajuan.destroy',['pengajuan'=>$pengajuan->id]) }}" method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger ml-3">Hapus</button>
    </form>
</ol>
</div>
    <!-- Page Heading -->
   
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="js/demo/chart-bar-demo.js"></script>
@endsection

</html>