@extends('layout.app')

@section('title', 'Profil UMKM')
@section('content')
@section('user_role', 'UMKM')
<div class="container-fluid">
    

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama UMKM</label>
                    <input type="text" class="form-control" value="Toko Sukses Jaya">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="umkm@suksesjaya.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea class="form-control" rows="3">Menjual berbagai kebutuhan rumah tangga.</textarea>
                </div>
                <div class="text-end">
                    <button class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

