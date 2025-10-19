<div class="sidebar">

     <a href="{{ route('umkm.dashboard') }}" class="{{ request()->routeIs('umkm.dashboard') ? 'active' : '' }}">
            <i class="bi bi-house-door"></i> Dashboard
        </a>
        <a href="{{ route('umkm.proyek') }}" class="{{ request()->routeIs('umkm.proyek') ? 'active' : '' }}">
            <i class="bi bi-kanban"></i> Proyek Saya
        </a>
        <a href="{{ route('umkm.pesan') }}" class="{{ request()->routeIs('umkm.pesan') ? 'active' : '' }}">
            <i class="bi bi-chat-dots"></i> Pesan
        </a>
        <a href="{{ route('umkm.profil') }}" class="{{ request()->routeIs('umkm.profil') ? 'active' : '' }}">
            <i class="bi bi-person"></i> Profil
        </a>
</div>
