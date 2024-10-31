@extends('Layout')

@section('content')
<h1 class="display-4 text-success text-center mb-4">Se connecter</h1>

<form method="POST" action="{{ route('login') }}" class="w-100 max-w-md mx-auto border rounded shadow p-4 mb-4">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label fw-bold text-secondary">Email</label>
        <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
        @error('email')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label fw-bold text-secondary">Mot de passe</label>
        <input id="password" type="password" name="password" class="form-control" value="{{ old('password') }}" autocomplete="current-password" placeholder="Votre mot de passe">
        @error('password')
            <div class="text-danger small mt-1">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-success w-100 mt-3">Se connecter</button>
</form>
@endsection