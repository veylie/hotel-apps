@extends('app')
@section('title', 'Reservasi Baru')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">{{$title ?? ''}} </h3>
                <form action="{{route('reservation.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                        <label for="" class="form-label">Nama Tamu *</label>
                        <input type="text" name="guest_name" class="form-control" placeholder="Masukkan nama tamu" required>
                    </div>
                       <div class="mb-3">
                        <label for="" class="form-label">Telpon/Hp</label>
                        <input type="number" name="phone" class="form-control" placeholder="Masukkan No Telp">
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Kategori Kamar *</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Pilih Kategori Kamar</option>
                            @foreach ($categories as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Nomor Kamar *</label>
                        <select name="guest_room_number" id="" class="form-control">
                            <option value="">Pilih Kategori Kamar</option>
                            @foreach ($categories as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Metode Bayar *</label>
                        <select name="payment_method" id="" class="form-control">
                            <option value="cc">Credit Card</option>
                            <option value="cash">Cash</option>
                            <option value="bank">Bank Transfer</option>
                        </select>
                    </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="mb-3">
                        <label for="" class="form-label">Email </label>
                        <input type="email" name="guest_email" class="form-control" placeholder="Masukkan email">
                    </div>     <div class="mb-3">
                        <label for="" class="form-label">Jumlah Tamu</label>
                        <select name="guest_qty" id="" class="form-control">
                            <option value="1">1 Tamu</option>
                            <option value="2">2 Tamu</option>
                            <option value="3">3 Tamu</option>
                            <option value="4">4 Tamu</option>
                        </select>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Nama Kamar *</label>
                        <select name="room_id" id="room_id" class="form-control">
                            <option value="">Pilih Kamar</option>
                            @foreach ($categories as $category )
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                     <div class="mb-3">
                        <label for="" class="form-label">Note </label>
                        <textarea name="guest_note" id="" class="form-control"></textarea>
                    </div>
                    <div class="card bg-light">
                       <div class="card-body">
                        <h6 class="card-title">Rangkuman Pembayaran</h6>
                        <div class="d-flex justify-content-between">
                            <span>Harga Kamar (per malam)</span>
                            <span id="roomRate">Rp.0</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Berapa Malam</span>
                            <span id="totalNight">0</span>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>Subtotal</span>
                            <span id="subtotal">Rp.0</span>
                        </div>
                          <div class="d-flex justify-content-between">
                            <span>Tax (10%)</span>
                            <span id="tax">Rp.0</span>
                        </div>
                          <div class="d-flex justify-content-between">
                            <span>Grand Total</span>
                            <span id="totalAmout">Rp.0</span>
                        </div>

                    </div>
                        </div>

                    </div>

                     <div class="mb-3">
                        <label for="" class="form-label">Gambar *</label>
                        <input type="file" name="image_cover" required>
                    </div>

                    <div class="mb-3">
                        <button class="btn btn-primary">Simpan</button>
                        <a href="{{url()->previous()}}" class="text-muted"></a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection
