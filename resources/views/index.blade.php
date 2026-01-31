<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>WallpaperKita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; }
        .navbar { background: white !important; }
        .glass-card { background: white; border-radius: 15px; padding: 40px; }
        #search { color: #000 !important; }
        .stats-text { font-size: 0.75rem; color: #6c757d; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm px-4">
        <a class="navbar-brand fw-bold text-info" href="/">WALLPAPERKITA</a>
        <div class="ms-auto d-flex align-items-center">
            @auth
                <span class="me-3 small">Hi, <b>{{ Auth::user()->name }}</b></span>
                <a href="/koleksi" class="btn btn-info btn-sm text-white rounded-pill px-3 me-2">Lihat Koleksi</a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-danger btn-sm rounded-pill">Keluar</button>
                </form>
            @else
                <a href="/login" class="btn btn-outline-info btn-sm me-2 rounded-pill px-3">Login</a>
                <a href="/register" class="btn btn-info btn-sm text-white rounded-pill px-3">Register</a>
            @endauth
        </div>
    </nav>

    <div class="container text-center mt-5">
        <div class="glass-card shadow-sm">
            <h1 class="fw-bold">Temukan Wallpaper Disini</h1>
            <div class="d-flex justify-content-center mt-4">
                <input type="text" id="search" class="form-control w-50 shadow-sm me-2 rounded-pill px-4" placeholder="Cari foto...">
                <button onclick="fetchUnsplash()" class="btn btn-info text-white px-4 fw-bold rounded-pill">CARI</button>
            </div>
        </div>
        <div id="results" class="row mt-5 pb-5 text-start"></div>
    </div>

    <script>
        const accessKey = 'gh9ZB3mcwEM-Ma4WlVzXf7Ac3ZwgmD0vekvjAai9DYg'; 

        window.onload = () => fetchUnsplash('Modern Wallpaper');

        async function fetchUnsplash(queryOverride = null) {
            const query = queryOverride || document.getElementById('search').value || 'Nature';
            const res = await fetch(`https://api.unsplash.com/search/photos?query=${query}&client_id=${accessKey}&per_page=12`);
            const data = await res.json();
            let html = '';
            
            for (const photo of data.results) {
                const detailRes = await fetch(`https://api.unsplash.com/photos/${photo.id}?client_id=${accessKey}`);
                const detail = await detailRes.json();

                const date = new Date(photo.created_at).toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' });
                const desc = photo.description || photo.alt_description || 'Tidak ada deskripsi';

                html += `
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm rounded-3 overflow-hidden">
                        <img src="${photo.urls.small}" class="card-img-top" style="height:250px; object-fit:cover">
                        <div class="card-body bg-white">
                            <h6 class="fw-bold mb-1 text-truncate">${desc}</h6>
                            <p class="text-muted small mb-2">Oleh: <b>${photo.user.name}</b></p>
                            <div class="d-flex justify-content-between stats-text mb-3">
                                <span>📅 ${date}</span>
                                <span>👁️ ${detail.views.toLocaleString()}</span>
                                <span>📥 ${detail.downloads.toLocaleString()}</span>
                            </div>
                            <button onclick="simpan('${photo.urls.regular}', '${photo.user.name}', '${photo.links.html}')" class="btn btn-danger btn-sm w-100 rounded-pill"> Simpan Gambar</button>
                        </div>
                    </div>
                </div>`;
            }
            document.getElementById('results').innerHTML = html;
        }

        async function simpan(url, photographer, link) {
            const res = await fetch('/koleksi', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                body: JSON.stringify({ image_url: url, photographer: photographer, unsplash_link: link })
            });

            if(res.status === 401) {
                alert('Login dulu atuh ceng');
                window.location.href = '/login';
            } else if(res.ok) {
                alert('wallpaper berhasil masuk ke koleksi');
            }
        }
    </script>
</body>
</html>