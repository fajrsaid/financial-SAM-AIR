@extends('layouts.main')
@section('container')
<!-- Begin Page Content -->
<div class="py-4 d-flex justify-content-end align-items-center">
  <h2 class="mr-auto">Data Pengajuan</h2>
  <a href="{{ route('pengajuan.create') }}" class="btn btn-primary">
    Tambah Pengajuan
  </a>
</div>
@if(session()->has('pesan'))
<div class="alert alert-success">
  {{ session()->get('pesan') }}
</div>
@endif

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Tanggal Pengajuan</th>
            <th>Total</th>
            <th>Status</th>
          </tr>
        </thead>
        <tfoot>
        <th>#</th>
            <th>Nama</th>
            <th>Tanggal Pengajuan</th>
            <th>Total</th>
            <th>Status</th>
        </tfoot>
          @forelse ($pengajuans as $pengajuan)
          <tr>
            <th>{{$loop->iteration}}</th>
            <td><a href="{{ route('pengajuan.show',['pengajuan' => $pengajuan->id]) }}">
                {{$pengajuan->nama_project}}</a></td>
            <td>{{$pengajuan->tanggal_pengajuan}}</td>
            <td>{{$pengajuan->total}}</td>
            <td>{{$pengajuan->id_status}}</td>
            </li>
            @empty
            <div class="alert alert-dark d-inline-block">Tidak ada data...</div>
            @endforelse
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
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/datatables-demo.js"></script>
  @endsection

  </html>