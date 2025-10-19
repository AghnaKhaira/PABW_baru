@extends('layout.app')

@section('title', 'Profil Developer')
@section('content')
@section('user_role', 'Developer')
<div class="container-fluid">
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama Studio / Developer</label>
                    <input type="text" class="form-control" value="Raka Dev Studio">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="raka@devstudio.com">
                </div>
                <div class="mb-3">
                    <label class="form-label">Deskripsi / Keahlian</label>
                    <textarea class="form-control" rows="3">Spesialis pembuatan website UMKM dan aplikasi kasir online.</textarea>
                </div>
                <div class="text-end">
                    <button class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
