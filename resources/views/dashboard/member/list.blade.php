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
          <div class="card-header"><h4>List User</h4></div>
            <div class="card-body">
                <table 
                class="table-sm"
                id="table"
                data-toggle="table"
                data-search="true"
                data-pagination="true">
                <thead>
                    <tr class="bg-light text-dark">
                    <th data-halign="center" data-width="10">#</th>
                    <th data-halign="center" data-width="150">NIK</th>
                    <th data-halign="center">Nama</th>
                    <th data-halign="center" data-width="140">Nomor HP</th>
                    <th data-halign="center" data-width="140">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1; @endphp
                    @foreach ($member as $item)
                        <tr>
                            <td class="text-center">{{ $i }}</td>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->hp }}</td>
                            <td class="text-center">
                                <a class="btn btn-info btn-sm" href="/user/profile/{{ $item->id }}"><i class="fa fa-user"></i></a>
                                <a class="btn btn-primary btn-sm" href="/user/edit/{{ $item->id }}"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-danger btn-sm delete_btn" href="#" data-toggle="modal" data-target=".delete" data-nama="{{ $item->nama }}" data-nik="{{ $item->nik }}" data-id="{{ $item->id }}"><i class="fa fa-trash"></i></a>
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
        <p>Apakah Anda yakin ingin menghapus Data User: <b><span id="nama"></span></b>? <br>Seluruh data yang tersimpan di server akan hilang secara permanen!</p>
      </div>
      <div class=""></div>
      <div class="modal-footer">
          
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <form method="POST" action="{{ route('user.delete') }}">
            @csrf
            <input type="hidden" value="" id="id" name="id">
            <input type="hidden" value="" id="nama_input" name="nama">
            <input type="hidden" value="" id="nik" name="nik">
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
     var nik = $(this).data('nik');
     $("#id").val(id);
     $("#nama_input").val(nama);
     $("#nik").val(nik);
     $("#nama").html(nama);

});
</script>
 <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.19.1/dist/bootstrap-table.min.js"></script>

@endsection