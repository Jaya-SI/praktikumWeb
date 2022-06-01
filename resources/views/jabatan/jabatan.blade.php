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
                  <th>Nama Jabatan</th>
                  <th>Gapok</th>
                  <th>Tunjangan</th>
                  <th>Uang Makan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data_jabatan as $jabatan)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $jabatan->nama_jabatan }}</td>
                    <td>{{ $jabatan->gapok }}</td>
                    <td>{{ $jabatan->tunjangan }}</td>
                    <td>{{ $jabatan->uang_makan }}</td>
                    <td>
                        <a href="/jabatan/{{ $jabatan->id }}/ubah" class="btn btn-warning">Ubah</a>
                        <a href="/jabatan/{{ $jabatan->id }}/hapus" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Nama Jabatan</th>
                    <th>Gapok</th>
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