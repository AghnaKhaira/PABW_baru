@extends('layout.app')

@section('title', 'Pesan')
@section('content')
@section('user_role', 'UMKM')

<div class="container-fluid">
   

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Cari pesan...">
            </div>

            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Raka Dev Studio</strong> <span class="text-muted small">- 2 jam lalu</span>
                    <p class="mb-0">Halo! Kami tertarik untuk mengerjakan proyek Anda.</p>
                </li>
                <li class="list-group-item">
                    <strong>WebCraft Indonesia</strong> <span class="text-muted small">- 5 jam lalu</span>
                    <p class="mb-0">Apakah proyek masih tersedia?</p>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection

