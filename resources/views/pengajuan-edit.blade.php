@extends('layouts.main')
@section('container')
<div class="container pt-4 bg-white">
  <div class="row">
    <div class="col-md-8 col-xl-6">
      <h1>Edit Project</h1>
      <hr>

      <form action="{{ route('pengajuan.update',['pengajuan' => $pengajuan->id]) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="file">Dokumen</label>
          <a href="/{{$pengajuan->file}}"> {{$pengajuan->file}}</a>
          <div class="col-md-6">
    <div class="custom-file">
    <input type="file" id="file" name="file" accept="pdf/*"
    class="custom-file-input @error('file') is-invalid @enderror">
    <label class="custom-file-label col-md-12" for="file"
    onchange="$('#file').val($(this).val());">
      {{ $pengajuan->file ?? 'Pilih file...'}}
    </label>
    @error('file')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
    </div>
  </div>
</div>
  <div class="form-group">
    <label for="nama_project">Nama Project</label>
    <input type="text" class="form-control @error('nama_project') is-invalid @enderror" id="nama_project" name="nama project" value="{{ old('nama_project') ?? $pengajuan-> nama_project}}">
    @error('nama_project')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="tanggal_pengajuan">Tanggal Pengajuan</label>
    <input type="date" class="form-control @error('tanggal_pengajuan') is-invalid @enderror" id="tanggal_pengajuan" name="tanggal pengajuan" value="{{old('tanggal_pengajuan') ?? $pengajuan -> tanggal_pengajuan}}">
    @error('tanggal_pengajuan')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="total">Total</label>
    <input type="text" class="form-control @error('total') is-invalid @enderror" id="total" name="total" value="{{old('total') ?? $pengajuan -> total}}">
    @error('total')
    <div class="text-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="id_status">Status</label>
    <select class="form-control" name="id_status" id="id_status">
      <option value="Pending" {{ (old('id_status') ?? $pengajuan->id_status)==
            'Pending' ? 'selected': '' }}>
        Pending
      </option>
      <option value="Tidak Setuju" {{ (old('id_status') ?? $pengajuan->id_status)==
            'Tidak Setuju' ? 'selected': '' }}>
        Tidak Setuju
      </option>
      <option value="Setuju" {{ (old('id_status') ?? $pengajuan->id_status)==
            'Setuju' ? 'selected': '' }}>
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