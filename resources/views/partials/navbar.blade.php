<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            🏥 RS Cepat Sembuh
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navRS" aria-controls="navRS" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navRS">
            <ul class="navbar-nav ms-auto">
                <!-- Home Link -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <!-- Staf Links -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('staf.index') }}">Data Staf</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('staf.create') }}">Tambah Staf</a>
                </li>
                <!-- Dokter Links -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dokter.index') }}">Dokter</a>
                </li>
                <!-- Rekam Medis Links -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('rekam-medis.index') }}">Rekam Medis</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
