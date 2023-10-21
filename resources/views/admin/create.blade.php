@extends('home.adminhome')
@section('content')

      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Input Profil Admin</h5>
              <div class="card">
                <div class="card-body">
                  <form role="form" action="{{url('/user/store')}}" method="POST">
                          {{csrf_field()}}
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Status</label>
                      <select class="custom-select2 form-control"  name="prodi" id="prodi" style="width:100%; height:38px;" >
                      <optgroup label="Pilih Prodi">
                       <option value="" disabled selected>Tambah Status</option>
                        <option value="guru"> Guru</option>
                        <option value="admin"> Admin</option>
                      </optgroup>
                      </select>
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