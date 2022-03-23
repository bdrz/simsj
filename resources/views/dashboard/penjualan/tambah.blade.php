@extends('dashboard.base')

@section('css')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
@endsection

@section('content')


<div class="container-fluid">
  <div class="fade-in">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header"><h4>Penjualan Baru</h4></div>
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
                        <form method="POST" action="{{ route('penjualan.proses') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>User</label>
                                <select class="form-control select2" name="member_id" id="member" >
                                    <option value="" disabled selected>Pilih User</option>
                                    @foreach ($member as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                @error('member_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Lokasi</label>
                                <select class="form-control" name="lokasi_id" id="lokasi">
                                    <option value="" disabled selected>Pilih Lokasi</option>
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
                                <select class="form-control select2" name="unit_id" id="unit">
                                    <option value="" disabled selected>Pilih Unit</option>
                                </select>
                                @error('unit_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Leader</label>
                                <select class="form-control select2" name="leader_id" id="leader">
                                    <option value="" disabled selected>Pilih Leader</option>
                                    @foreach ($leader as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                                @error('lokasi_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Marketing</label>
                                <select class="form-control select2" name="marketing_id" id="marketing">
                                    <option value="" disabled selected>Pilih Marketing</option>
                                </select>
                                @error('marketing_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <hr>
                             <div class="form-group">
                                <label>Harga Unit</label>
                                <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control"  placeholder="Harga Unit" name="harga" class="form-control uang" value="" id="harga" class="harga" >
                                </div>
                                @error('harga')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Metode Pembelian</label>
                                <select class="form-control mb-1" name="metode_pembelian" id="metode_pembelian">
                                    <option value="" disabled selected>Pilih Metode Pembelian</option>
                                     @foreach ($metode as $item)
                                    <option value="{{ $item->id }}">{{ $item->metode }}</option>
                                    @endforeach
                                </select>
                                @error('unit_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Tanggal Pembelian</label>
                                <input type="date" name="tgl_pembelian" class="form-control" value="">
                                @error('tgl_pembelian')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="col-6">
                            <h5>Informasi User</h5>
                            <div class="text-center border p-3">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT26A3Z-FdINZpPOZly5EsEb8vplujI7XXEIg&usqp=CAU" alt="" class="col-12" id="ktp">
                            </div>
                        <table class="table table-sm table-bordered">
                            <tr>
                                <td class="bg-light text-dark" width="100">NIK</td>
                                <td id="nik"></td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark">Nama</td>
                                <td id="nama"></td>
                            </tr>
                            <tr>
                                <td class="bg-light text-dark">Nomor HP</td>
                                <td id="hp"></td>
                            </tr>
                        </table>
                        

                        <table class="table table-bordered">
                            <tr>
                                <td>Harga Unit</td>
                                <td><h3 class="textfield_label" id="res">$0.00</h3></td>
                            </tr>
                        </table>
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

<script>

const number = 123456.789;

// another example 
console.log(new Intl.NumberFormat('ja-JP',  {
  style: 'currency',
  currency: 'IDR',
}).format(number));

    $('#harga').keyup(function(){
    var harga = $(this).val();
    var dp = $("#dp").val();

        $("#harga_show").val(harga);

        $("#cicilan1").val((harga-dp)/3);
        $("#cicilan2").val((harga-dp)/3);
        $("#cicilan3").val((harga-dp)/3); 
   });
   
    $('#dp').keyup(function(){
    var dp = $(this).val();
    var harga = $("#harga").val();

        $("#cicilan1").val((harga-dp)/3);
        $("#cicilan2").val((harga-dp)/3);
        $("#cicilan3").val((harga-dp)/3);
    ;  
   });


    // In your Javascript (external .js resource or <script> tag)
    $('#lokasi').change(function(){
    var id = $(this).val();    
    if(id){
        $.ajax({
           type:"GET",
           url:"/penjualan/getunit?id="+id,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#unit").empty();
                $.each(res,function(nama,id){
                    $("#unit").append('<option value="'+id+'">'+nama+'</option>');
                });
            }else{
               $("#unit").empty();
            }
           }
        });
    }else{
        $("#unit").empty();
    }      
   });

    $('#leader').change(function(){
    var id = $(this).val();    
    if(id){
        $.ajax({
           type:"GET",
           url:"/penjualan/getmarketing?id="+id,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#marketing").empty();
                $.each(res,function(nama,id){
                    $("#marketing").append('<option value="'+id+'">'+nama+'</option>');
                });
            }else{
               $("#marketing").empty();
            }
           }
        });
    }else{
        $("#marketing").empty();
    }      
   });








    $('#member').change(function(){
    var id = $(this).val();
    if(id){
        $.ajax({
           type:"GET",
           url:"/penjualan/getmember?id="+id,
           dataType: 'JSON',
           success:function(res){               
            if(res){
                $("#ktp").attr("src","https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT26A3Z-FdINZpPOZly5EsEb8vplujI7XXEIg&usqp=CAU");
                $("#nik").html(res.nik);
                $("#nama").html(res.nama);
                $("#hp").html(res.hp);
                if (res.ktp_path) {
                    $("#ktp").attr("src","/"+res.ktp_path);
                }
            }else{
               $("#nik").empty();
            }
           }
        });
    }else{
        $("#nik").empty();
    }      
   });


$(document).ready(function() {
    $('.select2').select2();
});
</script>
<script>
    // Jquery Dependency

$("input[data-type='currency']").on({
    ready: function() {
      formatCurrency($(this));
    },
    blur: function() { 
      formatCurrency($(this), "blur");
    }
});


function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".")
}


function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.
  
  // get input value
  var input_val = input.val();
  
  // don't validate empty input
  if (input_val === "") { return; }
  
  // original length
  var original_len = input_val.length;

  // initial caret position 
  var caret_pos = input.prop("selectionStart");
    
  // check for decimal
  if (input_val.indexOf(",") >= 0) {

    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(",");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);
    
    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }
    
    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "Rp. " + left_side + "," + right_side;

  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "Rp. " + input_val;
    
    // final formatting
    if (blur === "blur") {
      input_val += "";
    }
  }
  
  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}




</script>
@endsection