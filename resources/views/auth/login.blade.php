<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .form-control { color: #000 !important; background-color: #fff !important; }
        .invalid-feedback { font-weight: bold; }
    </style>
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-4 border-0 shadow rounded-4">
                    <h3 class="text-center fw-bold text-info mb-4">LOGIN</h3>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger py-2 small shadow-sm">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus placeholder="nama@email.com">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" required placeholder="Minimal 8 karakter">
                            
                            <div class="form-text mt-2 small text-muted">
                                password minimal 8 karakter-nya ceng euy
                            </div>
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-info w-100 text-white fw-bold py-2 shadow-sm mt-2">MASUK</button>
                        
                        <div class="text-center mt-4">
                            <p class="small text-muted mb-0">Belum punya akun? 
                                <a href="/register" class="text-info text-decoration-none fw-bold">Daftar Sekarang</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>