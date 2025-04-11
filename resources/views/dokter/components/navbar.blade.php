<li class="nav-item">
    <a href="/dokter/" class="nav-link {{ request()->is('dokter/dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-house"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="/dokter/memeriksa" class="nav-link {{ request()->routeIs('dokter/memeriksa') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-stethoscope"></i>
        <p>Memeriksa</p>
    </a>
</li>
<li class="nav-item">
    <a href="/dokter/obat" class="nav-link {{ request()->routeIs('dokter/obat') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-tablets"></i>
        <p>Obat</p>
    </a>
</li>