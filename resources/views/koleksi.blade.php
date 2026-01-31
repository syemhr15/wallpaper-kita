<!DOCTYPE html>
<html>
<head>
    <title>Koleksi Saya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .stats-text { font-size: 0.75rem; color: #6c757d; }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-light bg-white shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand fw-bold text-info" href="/">WALLPAPERKITA</a>
            <a href="/" class="btn btn-outline-info btn-sm rounded-pill">Kembali Cari</a>
        </div>
    </nav>

    <div class="container">
        <h3 class="fw-bold mb-4 text-center text-secondary">KOLEKSI FAVORIT SAYA</h3>
        <div class="row g-4">
            @forelse($koleksi as $k)
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <img src="{{ $k->image_url }}" class="card-img-top" style="height:250px; object-fit:cover;">
                        <div class="card-body">
                            <h6 class="fw-bold mb-1 text-truncate">{{ $k->desc }}</h6>
                            <p class="text-muted small mb-2">Oleh: <b>{{ $k->photographer }}</b></p>
                            
                            <div class="d-flex justify-content-between stats-text mb-3">
                                <span>📅 {{ $k->created_at->format('d M Y') }}</span>
                                <span>👁️ {{ number_format($k->views ?? 0) }}</span>
                                <span>📥 {{ number_format($k->downloads ?? 0) }}</span>
                            </div>

                            <form action="/koleksi/{{ $k->id }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-outline-danger btn-sm w-100 rounded-pill">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="text-muted">Opss... belum ada koleksi</p>
                </div>
            @endforelse
        </div>
    </div>
</body>
</html>