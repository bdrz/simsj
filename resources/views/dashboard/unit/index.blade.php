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
          <div class="card-header"><h4>Daftar Unit</h4></div>
            <div class="card-body">
                <button class="btn btn-linkedin" id="add" data-toggle="modal" data-target="#tambah"><i class="fa fa-plus mr-1"></i>Tambah Unit</button>
                <table 
                class="table-sm"
                id="table"
                data-toggle="table"
                data-search="true"
                data-pagination="true"
                data-toolbar="#add">
                <thead>
                    <tr class="bg-light text-dark">
                    <th data-halign="center" data-width="10">#</th>
                    <th data-halign="center" data-width="200">Lokasi</th>
                    <th data-halign="center" data-width="100">Unit</th>
                    <th data-halign="center" data-width="150">Jenis</th>
                    <th data-halign="center" data-width="150">LB (Type)</th>
                    <th data-halign="center" data-width="150">LT (m<sup>2</sup>)</th>
                    <th data-halign="center" data-width="200">Status</th>
                    <th data-halign="center" data-width="140">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach ($unit as $item)
                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td>{{ $item->lokasi->nama }}</td>
                            <td class="text-center">{{ $item->nama }}</td>
                            <td class="text-center">{{ $item->jenis }}</td>
                            <td class="text-center">{{ $item->lb }}</td>
                            <td class="text-center">{{ $item->lt }}</td>
                            <td></td>
                            <td class="text-center">
                                <a class="btn btn-primary btn-sm edit_btn" href="#" data-toggle="modal" data-target=".edit" data-nama="{{ $item->nama }}" data-id="{{ $item->id }}" data-jenis="{{ $item->jenis }}" data-lokasi_id="{{ $item->lokasi_id }}" data-lb="{{ $item->lb }}" data-lt="{{ $item->lt }}"><i class="fa fa-edit"></i> Edit</a>
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
        <p>Apakah Anda yakin ingin menghapus Data Unit: <b><span id="nama"></span></b>? <br>Seluruh data yang tersimpan di server akan hilang secara permanen!</p>
      </div>
      <div class=""></div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <form method="POST" action="{{ route('unit.delete') }}">
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
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Unit Baru</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{ route('unit.add') }}" method="POST">
        @csrf
          <div class="form-group">
            <label>Lokasi</label>
              <select class="form-control" name="lokasi_id" >
                <option value=""></option>
                @foreach ($lokasi as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
              </select>
              @error('lokasi_id')
              <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>
          <div class="form-group">
                <label>Unit</label>
                <input type="text" placeholder="Unit" name="nama" class="form-control" value="{{old('nama')}}">
                @error('nama')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label>Jenis</label>
                <select class="form-control" name="jenis" >
                  <option value=""></option>
                  <option value="RUMAH">RUMAH</option>
                  <option value="TANAH">TANAH</option> 
                </select>
                @error('jenis')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label>LB (Type)</label>
                 <input type="text" placeholder="LB" name="lb" class="form-control" value="">
                @error('lb')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label>LT (m<sup>2</sup>)</label>
                 <input type="text" placeholder="LT" name="lt" class="form-control" value="">
                @error('lt')
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
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Unit</h5>
        <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

     <form action="{{ route('unit.edit') }}" method="POST">
        @csrf
        <input type="hidden" name="id" id="id_edit">
          <div class="form-group">
            <label>Lokasi</label>
              <select class="form-control" name="lokasi_id" id="lokasi_id" >
                @foreach ($lokasi as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
              </select>
              @error('lokasi_id')
              <span class="text-danger">{{ $message }}</span>
              @enderror
          </div>
          <div class="form-group">
                <label>Unit</label>
                <input type="text" placeholder="Unit" name="nama" class="form-control" value="" id="nama_edit">
                @error('nama')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label>Jenis</label>
                <select class="form-control" name="jenis" value="" id="jenis">
                  <option value="RUMAH">RUMAH</option>
                  <option value="TANAH">TANAH</option> 
                </select>
                @error('jenis')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label>LB (Type)</label>
                 <input type="text" placeholder="Unit" name="lb" class="form-control" value="" id="lb">
                @error('lb')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
              <label>LT (m<sup>2</sup>)</label>
                 <input type="text" placeholder="Unit" name="lb" class="form-control" value="" id="lt">
                @error('lb')
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
     var data = $(this).data();
     $("#id_edit").val(data.id);
     $("#lokasi_id").val(data.lokasi_id);
     $("#nama_edit").val(data.nama);
     $("#jenis").val(data.jenis);
     $("#lb").val(data.lb);
     $("#lt").val(data.lt);
});
</script>
 <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>

@endsection