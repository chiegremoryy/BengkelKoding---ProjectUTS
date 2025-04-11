<li class="nav-item">
    <a href="/pasien/" class="nav-link {{ request()->is('pasien/dashboard') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-house"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="/pasien/periksa" class="nav-link {{ request()->routeIs('pasien/periksa') ? 'active' : '' }}">
        <i class="nav-icon fas fa-solid fa-stethoscope"></i>
        <p>Periksa</p>
    </a>
</li>