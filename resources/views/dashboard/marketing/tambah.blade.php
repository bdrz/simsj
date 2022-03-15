@extends('dashboard.base')

@section('css')

@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Tambah Marketing</h4></div>
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
                        <form method="POST" action="{{ route('marketing.add') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Leader</label>
                                <select class="form-control" name="leader" >
                                    <option value=""></option>
                                    @foreach ($leader as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>

                                @error('leader')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
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
                                <label>Alamat</label>
                                <input type="text" placeholder="Alamat" name="alamat" class="form-control" value="{{old('alamat')}}">
                                @error('alamat')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="border p-3 bg-light">
                            <div class="form-group">
                                <label>Bank</label>
                                <input type="text" placeholder="Bank" name="bank_rek" class="form-control" value="{{old('bank_rek')}}">
                                @error('bank_rek')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nomor Rekening</label>
                                <input type="number" placeholder="Nomor Rekening" name="no_rek" class="form-control" value="{{old('no_rek')}}">
                                @error('no_rek')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Atas Nama Rekening</label>
                                <input type="text" placeholder="Atas Nama Rekening" name="an_rek" class="form-control" value="{{old('an_rek')}}">
                                @error('an_rek')
                                    <label class="text-danger">{{ $message }}</label>
                                @enderror
                            </div>
                            </div>
                            
                    </div>
                    <div class="col-6">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">KTP</label>
                            <input class="border col-12 py-2" type="file" id="ktp" name="ktp" accept="image/png, image/gif, image/jpeg" >
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