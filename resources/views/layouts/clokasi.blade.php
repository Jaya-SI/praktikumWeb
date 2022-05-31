@extends('layouts.master')
@section('content')
<section class="content">
    <div class="container-fuild">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Data Lokasi</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/lokasi/create" method="POST">
                    @csrf
                      <div class="card-body">
                        <div class="form-group">
                          <label for="lokasi">Lokasi</label>
                          <input type="text" name="nama" class="form-control" id="lokasi" placeholder="Masukkan Lokasi">
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