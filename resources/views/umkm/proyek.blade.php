@extends('layout.app')

@section('title', 'Proyek Saya')
@section('content')
@section('user_role', 'UMKM')
<div class="container-fluid">
    

  

    <table class="table table-striped align-middle shadow-sm">
        <thead class="table-primary">
            <tr>
                <th>Judul Proyek</th>
                <th>Developer</th>
                <th>Status</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Website Katalog Produk</td>
                <td>-</td>
                <td><span class="badge bg-warning text-dark">Menunggu Developer</span></td>
                
            </tr>
            <tr>
                <td>Aplikasi Pemesanan Online</td>
                <td>Raka Dev Studio</td>
                <td><span class="badge bg-success">Sedang Dikerjakan</span></td>
                
            </tr>
        </tbody>
    </table>
</div>
@endsection

