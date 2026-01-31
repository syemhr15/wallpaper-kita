<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar - WallpaperKita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .form-control { color: #000 !important; background-color: #fff !important; }
        .invalid-feedback { font-size: 0.85em; font-weight: bold; }
    </style>
</head>
<body class="d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card border-0 shadow-lg p-4 rounded-4">
                    <h3 class="text-center fw-bold mb-4 text-info">DAFTAR AKUN</h3>
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label small fw-bold">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autofocus>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold">Email Address</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label small fw-bold">Password (Minimal 8 Karakter)</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                            @error('password')
                                <span class="invalid-feedback">⚠️ {{ $message }}</span>
                            @enderror
                            <div class="form-text text-muted small">Masukan minimal 8 karakter-nya, ceng</div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label small fw-bold">Ulangi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-info w-100 text-white fw-bold py-2 shadow-sm">DAFTAR SEKARANG</button>
                    </form>
                    
                    <p class="text-center mt-3 small">Sudah punya akun? <a href="/login" class="text-info fw-bold">Login di sini, ceng</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>