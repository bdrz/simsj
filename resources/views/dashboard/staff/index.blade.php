@extends('dashboard.base')

@section('css')
 <link href="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.css" rel="stylesheet">
 <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Akun</h4></div>
            <div class="card-body">
              @if(Session::has('message'))
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        </div>
                    </div>
                @endif   
                <div>
                  <button class="btn btn-success mb-2" id="add" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus mr-1"></i>Tambah Akun</button>
                  <table class="table table-bordered table-sm table-hover">
                    <tr class="text-center align-middle bg-linkedin text-white">
                      <th width="10"><i class="fa fa-user-circle"></i></th>
                      <th>Nama Akun</th>
                      <th>Username</th>
                      <th>Jabatan</th>
                      <th>Action</th>
                    </tr>
                    @foreach ($user as $item)
                        @if ($item->id != 1)
                        <tr>
                          
                          <td class="float-middle"><div class="c-avatar-sm m-1"><img class="c-avatar-img" src="/public/{{ $item->path }}"></div></td>
                          <td class="align-middle">{{ $item->name }}</td>
                          <td class="text-center align-middle">{{ $item->email }}</td>
                          <td class="text-center align-middle">
                            @if ($item->menuroles=='manager')
                                MANAGER
                            @else
                                STAFF
                            @endif
                            </td>
                          <td>
                              <a class="btn btn-primary btn-sm edit_btn" href="#" data-toggle="modal" data-target=".edit" data-nama="{{ $item->nama }}" data-id="{{ $item->id }}"><i class="fa fa-edit"></i> Edit</a>
                              <a class="btn btn-danger btn-sm delete_btn" href="#" data-toggle="modal" data-target=".delete" data-nama="{{ $item->name }}" data-id="{{ $item->id }}"><i class="fa fa-trash"></i> Hapus</a>
                              
                          </td>
                        </tr>
                        @endif
                    @endforeach
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-light">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Akun Baru</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{ route('staff.add') }}" method="POST"
      oninput='re_password.setCustomValidity(password.value != re_password.value ? "Password tidak sama" : "")'>
        @csrf
      
            <div class="form-group">
                <label>Nama Akun</label>
                <input type="text" placeholder="Nama Akun" name="name" class="form-control" value="{{old('name')}}" required>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" placeholder="Username" name="email" class="form-control" value="{{old('email')}}" required>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" class="form-control" value="{{old('password')}}" required>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label>Re-Password</label>
                <input type="password" placeholder="Re-Password" name="re_password" class="form-control" value="{{old('re_password')}}" required>
                @error('re_password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-linkedin"><i class="fa fa-plus mr-1"></i>Tambahkan</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Delete -->
<div class="modal delete" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus Data Akun: <b><span id="nama"></span></b>? <br>Seluruh data yang tersimpan di server akan hilang secara permanen!</p>
      </div>
      <div class=""></div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <form method="POST" action="{{ route('staff.delete') }}">
            @csrf
            <input type="hidden" value="" id="id" name="id">
            <button class="btn btn-danger" type="submit">Ya, Saya mengerti</button>
        </form>
      </div>
    </div>
  </div>
</div>




@endsection

@section('javascript')
<script>
     $(document).on("click", ".delete_btn", function () {
     var id = $(this).data('id');
     var nama = $(this).data('nama');
     $("#id").val(id);
     $("#nama").html(nama);
});

$(document).on("click", ".edit_btn", function () {
     var id = $(this).data('id');
     var nama = $(this).data('nama');
     $("#id_edit").val(id);
     $("#nama_edit").val(nama);

});
</script>

    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>

@endsection