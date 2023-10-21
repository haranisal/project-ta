@extends('home.siswahome')
@section('content')

      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Tambah Data Siswa</h5>
              <div class="card">
                <div class="card-body">
                  <form role="form" action="{{url('/datasiswa/store')}}" method="POST">
                          {{csrf_field()}}
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Nis</label>
                      <input type="text" class="form-control" id="nis" name="nis">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Prodi</label>
                      <input type="text" class="form-control" id="prodi" name="prodi">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
@endsection