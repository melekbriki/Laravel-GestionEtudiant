@extends('layout')

@section('content')
<h1 class="text-center text-success mb-4">Completez vos informations</h1>
<form method="POST" action="{{ route('register') }}" class="container p-4 border rounded shadow-sm">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label font-weight-bold">Nom d'utilisateur</label>
        <input id="name" type="text" name="name" class="form-control" value="{{ old('name') }}" autocomplete="name" placeholder="Nom d'utilisateur" autofocus>
        @error('name')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label font-weight-bold">Email</label>
        <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" autocomplete="email" placeholder="Votre email" autofocus>
        @error('email')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label font-weight-bold">Mot de passe</label>
        <input id="password" type="password" name="password" class="form-control" value="{{ old('password') }}" autocomplete="password" placeholder="Votre mot de passe" autofocus>
        @error('password')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label font-weight-bold">Confirmation du mot de passe</label>
        <input id="password_confirmation" type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" autocomplete="password_confirmation" placeholder="Retapez votre mot de passe" autofocus>
    </div>

    <p class="font-weight-bold">Je veux être :</p>
    <div class="mb-3 d-flex justify-content-between">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="role_id" id="freelance" value="1">
            <label class="form-check-label" for="freelance">Freelance</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="role_id" id="client" value="2">
            <label class="form-check-label" for="client">Client</label>
        </div>
    </div>
    @error('role_id')
    <small class="text-danger d-block">{{ $message }}</small>
    @enderror

    <button type="submit" class="btn btn-success w-100 mt-3">Créer mon compte</button>
</form>
@endsection