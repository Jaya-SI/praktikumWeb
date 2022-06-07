@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="container mb-3 d-flex justify-content-end">
        <div class="row">
            <a href="/jabatan/tambah" class="btn btn-primary mr-1">Tambah</a>
            <a href="/jabatan/print" class="btn btn-info">Print</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Tahun</th>
                  <th>Gaji Pokok</th>
                  <th>Tunjangan</th>
                  <th>Uang Makan</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data_penggajian as $penggajian)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $penggajian->tahun }}</td>
                    <td>{{ $penggajian->gapok }}</td>
                    <td>{{ $penggajian->tunjangan }}</td>
                    <td>{{ $penggajian->uang_makan }}</td>
                    <td>
                        <a href="/penggajian/{{ $penggajian->id }}/ubah" class="btn btn-warning">Ubah</a>
                        <a href="/penggajian/{{ $penggajian->id }}/hapus" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Tahun</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan</th>
                    <th>Uang Makan</th>
                    <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection