@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="container mb-3 d-flex justify-content-end">
        <div class="row">
            <a href="/lokasi/tambah" class="btn btn-primary mr-1">Tambah</a>
            <a href="/lokasi/print" class="btn btn-info">Print</a>
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
                  <th>Nama Lokasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data_lokasi as $lokasi)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $lokasi->nama }}</td>
                    <td>
                        <a href="/lokasi/{{ $lokasi->id }}/ubah" class="btn btn-warning">Ubah</a>
                        <a href="/lokasi/{{ $lokasi->id }}/hapus" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>Nama Lokasi</th>
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