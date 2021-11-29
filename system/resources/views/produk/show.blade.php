@extends('admin.template.base')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-10 mt-5">
          <div class="card">
              <div class="card-header">
                  detail Data produk
              </div>

              <div class="card-body">
                  <h1> {{$produk->nama}}</h1>
                  <hr>
                  <p>{{$produk->harga}} |
                     Stok : {{$produk->stok}} |
                     Berat : {{$produk->berat}} gr |
                     Seller : {{$produk->seller->nama}} |
                     No. HP : {{$produk->seller->detail->no_handphone}} |
                     Tanggal Produk : {{$produk->created_at->format("d M Y")}}
                  </p>
                  <p>
                       {!! nl2br($produk->deskripsi) !!}
                  </p>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection