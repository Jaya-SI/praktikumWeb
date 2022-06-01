@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fuild">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Data Jabatan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/jabatan/create" method="POST">
                    @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="nama_jabatan">Nama Jabatan</label>
                          <input type="text" name="nama_jabatan" class="form-control" id="nama_jabatan" placeholder="Masukkan Nama Jabatan">
                        </div>
                        <div class="form-group">
                            <label for="gapok">Gaji Pokok</label>
                            <input type="text" name="gapok" class="form-control" id="gapok" placeholder="Gaji Pokok">
                        </div>
                        <div class="form-group">
                            <label for="tunjangan">Tunjangan</label>
                            <input type="text" name="tunjangan" class="form-control" id="tunjangan" placeholder="Tunjangan">
                        </div>
                        <div class="form-group">
                            <label for="uang_makan">Uang Makan</label>
                            <input type="text" name="uang_makan" class="form-control" id="uang_makan" placeholder="Uang Makan">
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
            </div>
        </div>
    </div>
</section>
@endsection