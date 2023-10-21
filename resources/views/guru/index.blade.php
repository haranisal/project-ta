@extends('home.guruhome')
@section('content')
<div class="container-fluid">
<div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Data Antrian</h5>
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Judul</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Nis</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">guru_pembimbing</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tanggal Upload</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Author</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Prodi</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Thumbnail</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Dokumen</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Aksi</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
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
                    </tbody>
                    @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection