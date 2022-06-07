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
                  <th>Tahun</th>
                  <th>Gaji Pokok</th>
                  <th>Tunjangan</th>
                  <th>Uang Makan</th>
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