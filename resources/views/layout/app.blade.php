@extends('layout.app')

@section('title', 'Proyek Tersedia')
@section('content')
@section('user_role', 'Developer')
<div class="container-fluid">
  

    <table class="table table-striped align-middle shadow-sm">
        <thead class="table-primary">
            <tr>
                <th>Judul Proyek</th>
                <th>Klien</th>
                <th>Status</th>
                <th>Deadline</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Aplikasi Pemesanan Online</td>
                <td>Toko Sukses Jaya</td>
                <td><span class="badge bg-success">Sedang Dikerjakan</span></td>
                <td>30 Okt 2025</td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                </td>
            </tr>
            <tr>
                <td>Website Portofolio UMKM</td>
                <td>Raya Fashion</td>
                <td><span class="badge bg-warning text-dark">Menunggu Review</span></td>
                <td>10 Nov 2025</td>
                <td>
                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
