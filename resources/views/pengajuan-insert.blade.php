@extends('layouts.main')
@section('container')
<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Pengajuan project</h1>
      <hr>
      <form action="{{ route('pengajuan.store') }}" method="POST"
      enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="file">Dokumen</label>
          <input type="file" class="form-control-file" id="file" name="file">
          @error('file')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        <label for="nama_project">Nama Project</label>
        <input type="text" class="form-control" id="nama_project" name="nama project">
        @error('nama_project')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
      <input type="date" class="form-control" id="tanggal_pengajuan" name="tanggal pengajuan">
      @error('tanggal_pengajuan')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="total">Total</label>
      <input type="text" class="form-control" id="total" name="total">
      @error('total')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <div class="form-group">
      <label for="id_status">Status</label>
      <select class="form-control" name="id_status" id="id_status">
        <option value="Pending" {{ old('id_status')=='Pending' ? 'selected': '' }}>
          Pending
        </option>
        <option value="Tidak Setuju" {{ old('id_status')=='Tidak Setuju' ? 'selected': '' }}>
          Tidak Setuju
        </option>
        <option value="Setuju" {{ old('id_status')=='Setuju' ? 'selected': '' }}>
          Setuju
        </option>
      </select>
      @error('id_status')
      <div class="text-danger">{{ $message }}</div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary mb-2">Ajukan</button>
    </form>

  </div>
</div>
</div>

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

</body>

</html>