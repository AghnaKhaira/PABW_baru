@extends('layout.app')

@section('title', 'Pesan')
@section('content')
@section('user_role', 'Developer')
<div class="container-fluid">
    

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Toko Sukses Jaya</strong> <span class="text-muted small">- 1 jam lalu</span>
                    <p class="mb-0">Halo, kami sudah melihat proposal Anda. Mari berdiskusi lebih lanjut!</p>
                </li>
                <li class="list-group-item">
                    <strong>Warung Kita</strong> <span class="text-muted small">- 3 jam lalu</span>
                    <p class="mb-0">Kami tertarik dengan penawaran Anda. Bisa kirim contoh UI-nya?</p>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
