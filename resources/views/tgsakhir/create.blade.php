@extends('home.siswahome')
@section('content')
   <!--  Header End -->
   <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Input Tugas Akhir</h5>
              <div class="card">
                <div class="card-body">
                  <form role="form" action="{{url('/antrianta/store')}}" method="POST"  enctype="multipart/form-data">
                          {{csrf_field()}}
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Judul</label>
                      <input type="text" class="form-control" id="judul" name="judul" >
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Guru Pembimbing</label>
                      <select class="custom-select2 form-control"  name="guru_pembimbing" id="guru_pembimbing" style="width:100%; height:38px;" >
                      <optgroup label="Pilih Guru Pembimbing">
                        @foreach ($dataguru as $data)
                        <option value="{{$data->id}}">
                          {{$data->nama}}
                        </option>
                        @endforeach
                      </optgroup>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Tanggal Upload</label>
                      <input type="date" class="form-control" id="tgl_upload" name="tgl_upload">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Author</label>
                      <input type="text" class="form-control" id="author" name="author">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Nis</label>
                      <input type="text" class="form-control" id="nis" name="nis">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Prodi</label>
                      <select class="custom-select2 form-control"  name="prodi" id="prodi" style="width:100%; height:38px;" >
                      <optgroup label="Pilih Prodi">
                        @foreach ($datasiswa as $data)
                        <option value="{{$data->id}}">
                          {{$data->prodi}}
                        </option>
                        @endforeach
                      </optgroup>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Thumbnail</label>
                      <input type="file" class="form-control" id="thumbnail" name="thumbnail">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Dokumen</label>
                      <input type="file" class="form-control" id="dokumen" name="dokumen">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
               
                <div class="table-responsive m-t-40">
                                        	<div class="kotak_detail">
                                        		<table id="myTable" class="table table-bordered table-stiped">
                                        	 <thead>
                                            <tr>
                                              <th>No  </th>
                                                <th>Judul</th>
                                                <th>Nis</th>
                                                <th>Guru Pembimbing</th>
                                                <th>Prodi</th>
                                                <th>Author</th>
                                                <th>Thumbnail</th>
                                                <th>Dokumen</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="add-row">
                                        @foreach($antrianta as $data)
                     <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$data->judul}}</td>
                        <td>{{$data->nis}}</td>
                        <td>{{$data->guru_pembimbing}}</td>
                        <td>{{$data->tgl_upload}}</td>
                        <td>{{$data->author}}</td>
                        <td>{{$data->prodi}}</td>
                       <td><img src="{{asset('storage/'.$data->thumbnail)}}" style="width: 50px;"></td> 
                       <td><a href="Storage/{{$data->dokumen}}"> <button type="button" class="btn btn-primary m-1">Download</button></a>
                       <a href="Storage/{{$data->dokumen}}"  target="_blank"><button type="button" class="btn btn-outline-primary m-1">Priview</button></a>
                       </td>
                        <td>  
                            <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{url('/antrianta/edit/'.$data->id)}}"
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="{{url('/antrianta/destroy/'.$data->id)}}"
                                ><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div></td>
                     </tr> 
                     @endforeach                      
                    </tbody>
                   

                                        		</table>
                                        	</div>
                                        </div>
                                        <hr>
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