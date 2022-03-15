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
          <div class="card-header"><h4>Daftar Lokasi</h4></div>
            <div class="card-body">
                <button class="btn btn-linkedin" id="add" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus mr-1"></i>Tambah Lokasi</button>
                <table 
                class="table-sm"
                id="table"
                data-toggle="table"
                data-search="true"
                data-pagination="true"
                data-toolbar="#add">
                <thead>
                    <tr class="bg-light text-dark">
                    <th data-halign="center" data-width="50">#</th>
                    <th data-halign="center" data-width="300">Lokasi</th>
                    <th data-halign="center" data-width="150">Unit Terjual</th>
                    <th data-halign="center" data-width="150">Unit Tersedia</th>
                    <th data-halign="center" data-width="150">Total Unit</th>
                    <th data-halign="center" data-width="140">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach ($lokasi as $item)
                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td>{{ $item->nama }}</td>
                            <td class="text-center"></td>
                            <td class="text-center"></td>
                            <td class="text-center">{{ $item->unit->count() }}</td>
                            <td class="text-center">
                                <a class="btn btn-primary btn-sm edit_btn" href="#" data-toggle="modal" data-target=".edit" data-nama="{{ $item->nama }}" data-id="{{ $item->id }}"><i class="fa fa-edit"></i> Edit</a>
                                <a class="btn btn-danger btn-sm delete_btn" href="#" data-toggle="modal" data-target=".delete" data-nama="{{ $item->nama }}" data-id="{{ $item->id }}"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                         </tr>
                         @php $i++; @endphp
                    @endforeach
                </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
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
        <p>Apakah Anda yakin ingin menghapus Data Marketing: <b><span id="nama"></span></b>? <br>Seluruh data yang tersimpan di server akan hilang secara permanen!</p>
      </div>
      <div class=""></div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <form method="POST" action="{{ route('lokasi.delete') }}">
            @csrf
            <input type="hidden" value="" id="id" name="id">
            <input type="hidden" value="" id="nama_input" name="nama">
            <button class="btn btn-danger" type="submit">Ya, Saya mengerti</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Add -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Lokasi Baru</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{ route('lokasi.add') }}" method="POST">
        @csrf
          <div class="form-group">
                <label>Nama Lokasi</label>
                <input type="text" placeholder="Nama Lokasi" name="nama" class="form-control" value="{{old('nama')}}">
                @error('nama')
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

<!-- Edit -->
<div class="modal fade edit" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-light">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Lokasi</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{ route('lokasi.edit') }}" method="POST">
        @csrf
        <input type="hidden" value="" id="id_edit" name="id">
          <div class="form-group">
                <label>Nama Lokasi</label>
                <input type="text" placeholder="Nama Lokasi" id="nama_edit" name="nama" class="form-control" value="">
                @error('nama')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-linkedin"><i class="fa fa-save mr-1"></i>Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>


@endsection

@section('javascript')
<script>
     $(document).on("click", ".delete_btn", function () {
     var id = $(this).data('id');
     var nama = $(this).data('nama');
     var nik = $(this).data('nik');
     $("#id").val(id);
     $("#nama_input").val(nama);
     $("#nik").val(nik);
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