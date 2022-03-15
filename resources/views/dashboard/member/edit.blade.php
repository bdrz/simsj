@extends('dashboard.base')

@section('css')

@endsection

@section('content')
<style>
   .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  /* background-color: rgba(75,75,75,0.7); */
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.hovereffect:hover .overlay {
  background-color:rgba(75,75,75,0.7);
}

.hovereffect img {
  display: block;
  position: relative;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
  -webkit-transform: translateY(45px);
  -ms-transform: translateY(45px);
  transform: translateY(45px);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(5px);
  -ms-transform: translateY(5px);
  transform: translateY(5px);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 14px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  background-color: transparent;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
  font-weight: normal;
  margin:  15% 0;
  /* margin: -52px 0 0 0; */
  padding: 10% 35%;
}

.hovereffect:hover a.info {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}
</style>
    
<div class="container-fluid mt-0">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header">
                <h4>
                <a href="/user/profile/{{ $profile->id }}">
                    <i class="fa fa-arrow-left mr-1"></i>
                </a>
               Edit User
                </h4>
            </div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif   
               <form method="POST" action="{{ route('user.edit') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $profile->id }}">
                <div class="row">
                    <div class="col-8">
                        <h5>Data User</h5>
                        <table class="table table-bordered table-sm text-sm">
                            <tr>
                                <td class="bg-light text-dark align-middle">NIK</td>
                                <td><input type="text" name="nik" class="form-control" value="{{ $profile->nik }}"></td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark align-middle">Nama</td>
                                <td><input type="text" name="nama" class="form-control" value="{{ $profile->nama }}"></td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark align-middle">Nomor HP</td>
                                <td><input type="text" name="hp" class="form-control" value="{{ $profile->hp }}"></td>
                            </tr>
                            <tr>
                                <td class="align-middle">NPWP</td>
                                <td><input type="text" name="nomor_npwp" class="form-control" value="{{ $profile->nomor_npwp }}"></td>
                            </tr>
                            <tr>
                                <td class="align-middle">Jenis Kelamin</td>
                                <td>
                                  <select class="form-control" name="jenis_kelamin">
                                    @php $list = ['LAKI-LAKI','PEREMPUAN']@endphp 
                                      @foreach ($list as $item)
                                      @if ($item == $profile->jenis_kelamin)
                                      <option value="{{ $item }}" selected>{{ $item }}</option>
                                      @else
                                      <option value="{{ $item }}">{{ $item }}</option>
                                      @endif 
                                      @endforeach
                                  </select>
                              </td>
                            </tr>
                            <tr>
                                <td class="align-middle">Tempat Lahir</td>
                                <td><input type="text" name="tempat_lahir" class="form-control" value="{{ $profile->tempat_lahir }}"></td>
                            </tr>
                            <tr>
                                <td class="align-middle">Tanggal Lahir</td>
                                <td><input type="date" name="tgl_lahir" class="form-control" value="{{ $profile->tgl_lahir }}"></td>
                            </tr>
                            <tr>
                                <td class="align-middle">Alamat</td>
                                <td><input type="text" name="alamat" class="form-control" value="{{ $profile->alamat }}"></td>
                            </tr>
                            <tr>
                                <td class="align-middle">Agama</td>
                                <td><select class="form-control" name="agama">
                                    @php $list = ['ISLAM','KRISTEN','HINDU','BUDHA','KATOLIK','KONGHUCU']@endphp
                                      @foreach ($list as $item)
                                      @if ($item == $profile->agama)
                                      <option value="{{ $item }}" selected>{{ $item }}</option>
                                      @else
                                      <option value="{{ $item }}">{{ $item }}</option>
                                      @endif 
                                      @endforeach
                                  </select></td>
                            </tr>
                            <tr>
                                <td class="align-middle">Pekerjaan</td>
                                <td><input type="text" name="pekerjaan" class="form-control" value="{{ $profile->pekerjaan }}"></td>
                            </tr>
                            <tr>
                                <td>Kewarganegaraan</td>
                                <td><select class="form-control" name="kewarganegaraan">
                                    @php $list = ['WNI','WNA']@endphp
                                      @foreach ($list as $item)
                                      @if ($item == $profile->kewarganegaraan)
                                      <option value="{{ $item }}" selected>{{ $item }}</option>
                                      @else
                                      <option value="{{ $item }}">{{ $item }}</option>
                                      @endif 
                                      @endforeach
                                  </select></td>
                            </tr>
                        </table>
                        
                        <h5>Data Unit</h5>
                    </div>
                    <div class="col-4">
                        <div class="row mb-3">
                            <h5>Berkas</h5>
                            @if ($profile->ktp_upload == true)
                                <div class="border bg-dark text-white border-dark col-12 p-1"><i class="fa fa-check-circle mx-2"></i><b>KTP</b></div>
                                <div class="hovereffect">
                                    <img src="{{ asset($profile->ktp_path) }}" alt="ktp" class="col-12 border p-1 img-responsive">
                                    <div class="overlay">
                                        <a class="info" href="#" data-toggle="modal" data-target=".ktp">PREVIEW</a>
                                    </div>
                                </div>
                            @else
                                <div class="border bg-dark text-white border-dark col-12 p-1"><i class="fa fa-times-circle mx-2"></i><b>KTP</b></div>
                            @endif
                            <input class="border col-12 py-2" type="file" id="ktp" name="ktp" accept="image/png, image/gif, image/jpeg" >
                        </div>
                        <div class="row mb-3">
                            @if ($profile->kk_upload == true)
                                <div class="border bg-dark text-white border-dark col-12 p-1"><i class="fa fa-check-circle mx-2"></i><b>Kartu Keluarga</b></div>
                                <div class="hovereffect">
                                    <img src="{{ asset($profile->kk_path) }}" alt="kk" class="col-12 border p-1 img-responsive">
                                    <div class="overlay">
                                        <a class="info" href="#" data-toggle="modal" data-target=".kk">PREVIEW</a>
                                    </div>
                                </div>
                            @else
                                <div class="border bg-dark text-white border-dark col-12 p-1"><i class="fa fa-times-circle mx-2"></i><b>Kartu Keluarga</b></div>
                            @endif
                            <input class="border col-12 py-2" type="file" id="kk" name="kk" accept="image/png, image/gif, image/jpeg" >
                        </div>
                        <div class="row mb-3">
                            @if ($profile->npwp_upload == true)
                                <div class="border bg-dark text-white border-dark col-12 p-1"><i class="fa fa-check-circle mx-2"></i><b>NPWP</b></div>
                                <div class="hovereffect">
                                    <img src="{{ asset($profile->npwp_path) }}" alt="npwp" class="col-12 border p-1 img-responsive">
                                    <div class="overlay">
                                        <a class="info" href="#" data-toggle="modal" data-target=".npwp">PREVIEW</a>
                                    </div>
                                </div>
                            @else
                                <div class="border bg-dark text-white border-dark col-12 p-1"><i class="fa fa-times-circle mx-2"></i><b>NPWP</b></div>
                            @endif
                            <input class="border col-12 py-2" type="file" id="npwp" name="npwp" accept="image/png, image/gif, image/jpeg" >
                        </div>
                    </div>

                    <div class="col-12"> 
                      <button class="btn btn-success float-right"><i class="fa fa-save mr-1"></i> SIMPAN</button>
                    </div>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade ktp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header py-1 bg-dark text-light">
        <h5 class="modal-title" id="exampleModalLabel">KTP</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <img src="{{ asset($profile->ktp_path) }}" alt="ktp" class="col-12 border p-1">
    </div>
  </div>
</div>

<div class="modal fade kk" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header py-1 bg-dark text-light">
        <h5 class="modal-title" id="exampleModalLabel">Kartu Keluarga</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <img src="{{ asset($profile->kk_path) }}" alt="KK" class="col-12 border p-1">
    </div>
  </div>
</div>

<div class="modal fade npwp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header py-1 bg-dark text-light">
        <h5 class="modal-title" id="exampleModalLabel">NPWP</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <img src="{{ asset($profile->npwp_path) }}" alt="NPWP" class="col-12 border p-1">
    </div>
  </div>
</div>
@endsection

@section('javascript')


@endsection