@extends('dashboard.base')

@section('css')

@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Tambah User Baru</h4></div>
            <div class="card-body">
                @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif            
                <div class="row">
                    <div class="col-6">
                        <form method="POST" action="{{ route('user.add') }}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number" placeholder="NIK" name="nik" class="form-control" value="{{old('nik')}}">
                                @error('nik')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" placeholder="Nama" name="nama" class="form-control" value="{{old('nama')}}">
                                @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="number" placeholder="Nomor HP" name="hp" class="form-control" value="{{old('hp')}}">
                                @error('hp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>NPWP</label>
                                <input type="text" placeholder="NPWP" name="nomor_npwp" class="form-control" value="{{old('nomor_npwp')}}">
                                @error('nomor_npwp')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                 <select class="form-control" name="jenis_kelamin" >
                                    <option value="LAKI-LAKI">LAKI-LAKI</option>
                                    <option value="PEREMPUAN">PEREMPUAN</option> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" placeholder="Tempat Lahir" name="tempat_lahir" class="form-control" value="{{old('tempat_lahir')}}">
                                @error('tempat_lahir')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" placeholder="Tanggal Lahir" name="tgl_lahir" class="form-control" value="{{old('tgl_lahir')}}">
                                @error('tgl_lahir')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" placeholder="Alamat" name="alamat" class="form-control" value="{{old('alamat')}}">
                                @error('alamat')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Agama</label>
                                <select class="form-control" name="agama">
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option> 
                                    <option value="HINDU">HINDU</option> 
                                    <option value="BUDHA">BUDHA</option> 
                                    <option value="KATOLIK">KATOLIK</option> 
                                    <option value="KONGHUCU">KONGHUCU</option> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input type="text" placeholder="Pekerjaan" name="pekerjaan" class="form-control" value="{{old('pekerjaan')}}">
                                @error('pekerjaan')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Kewarganegaraan</label>
                                <select class="form-control" name="kewarganegaraan" value="{{old('kewarganegaraan')}}">
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option> 
                                </select>
                            </div>
                            
                            
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">KTP</label>
                            <input class="border col-12 py-2" type="file" id="ktp" name="ktp" accept="image/png, image/gif, image/jpeg" >
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">KARTU KELUARGA</label>
                            <input class="border col-12 py-2" type="file" id="kk" name="kk" accept="image/png, image/gif, image/jpeg">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">NPWP</label>
                            <input class="border col-12 py-2" type="file" id="npwp" name="npwp" accept="image/png, image/gif, image/jpeg">
                        </div>
                    </div>
                    <div class="col-12">
                            <button type="submit" class="btn btn-primary float-right">
                                Submit
                            </button>
                          
                        </form></div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('javascript')


@endsection