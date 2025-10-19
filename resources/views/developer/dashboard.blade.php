@extends('layout.app')

@section('title', 'Dashboard Developer')
@section('content')
@section('user_role', 'Developer')
<div class="container-fluid">
   

    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 text-center">
                <div class="card-body">
                    <i class="bi bi-briefcase display-5 text-primary"></i>
                    <h5 class="mt-3">Proyek Aktif</h5>
                    <h3>3</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 text-center">
                <div class="card-body">
                    <i class="bi bi-kanban display-5 text-success"></i>
                    <h5 class="mt-3">Proyek Tersedia</h5>
                    <h3>7</h3>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 text-center">
                <div class="card-body">
                    <i class="bi bi-chat-dots display-5 text-warning"></i>
                    <h5 class="mt-3">Pesan Masuk</h5>
                    <h3>5</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
