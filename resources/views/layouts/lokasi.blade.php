@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Lokasi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                {{ $no = 0; }}
                @foreach ($data_lokasi as $lokasi)
                {{ $no++ }}
                <tr>
                    <td>{{ $no }}</td>
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
          <div class="container mb-3 d-flex justify-content-end">
            <a href="/lokasi/tambah" class="btn btn-primary">Tambah Data</a>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection