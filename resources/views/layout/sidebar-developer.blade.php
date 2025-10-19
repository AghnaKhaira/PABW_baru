<div class="sidebar">

     <a href="{{ route('developer.dashboard') }}" class="{{ request()->routeIs('developer.dashboard') ? 'active' : '' }}">
            <i class="bi bi-house-door"></i> Dashboard
        </a>
        <a href="{{ route('developer.proyek') }}" class="{{ request()->routeIs('developer.proyek') ? 'active' : '' }}">
            <i class="bi bi-kanban"></i> Proyek Tersedia
        </a>
        <a href="{{ route('developer.pesan') }}" class="{{ request()->routeIs('developer.pesan') ? 'active' : '' }}">
            <i class="bi bi-chat-dots"></i> Pesan
        </a>
        <a href="{{ route('developer.profil') }}" class="{{ request()->routeIs('developer.profil') ? 'active' : '' }}">
            <i class="bi bi-person"></i> Profil
        </a>
</div>
