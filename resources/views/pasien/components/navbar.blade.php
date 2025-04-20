<li class="nav-item">
    <a href="/pasien/" class="nav-link {{ request()->is('pasien') || request()->is('pasien/') ? 'active' : '' }}">
        <i class="nav-icon fas fa-house-medical"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="/pasien/periksa" class="nav-link {{ request()->is('pasien/periksa') ? 'active' : '' }}">
        <i class="nav-icon fas fa-stethoscope"></i>
        <p>Periksa</p>
    </a>
</li>
