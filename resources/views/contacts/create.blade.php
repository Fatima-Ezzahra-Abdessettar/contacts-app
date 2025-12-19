@extends('layouts.app')

@section('title', 'Nouveau Contact')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2>Créer un nouveau contact</h2>
            </div>

            <div class="card-body">
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf

                    {{-- Prénom --}}
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Prénom *</label>
                        <input type="text"
                               class="form-control @error('first_name') is-invalid @enderror"
                               id="first_name"
                               name="first_name"
                               value="{{ old('first_name') }}"
                               required>
                        @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Nom --}}
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Nom *</label>
                        <input type="text"
                               class="form-control @error('last_name') is-invalid @enderror"
                               id="last_name"
                               name="last_name"
                               value="{{ old('last_name') }}"
                               required>
                        @error('last_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input type="email"
                               class="form-control @error('email') is-invalid @enderror"
                               id="email"
                               name="email"
                               value="{{ old('email') }}"
                               required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Poste --}}
                    <div class="mb-3">
                        <label for="job_title" class="form-label">Poste</label>
                        <input type="text"
                               class="form-control @error('job_title') is-invalid @enderror"
                               id="job_title"
                               name="job_title"
                               value="{{ old('job_title') }}">
                        @error('job_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Ville --}}
                    <div class="mb-3">
                        <label for="city" class="form-label">Ville</label>
                        <input type="text"
                               class="form-control @error('city') is-invalid @enderror"
                               id="city"
                               name="city"
                               value="{{ old('city') }}">
                        @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Pays --}}
                    <div class="mb-3">
                        <label for="country" class="form-label">Pays</label>
                        <input type="text"
                               class="form-control @error('country') is-invalid @enderror"
                               id="country"
                               name="country"
                               value="{{ old('country') }}">
                        @error('country')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">
                            Annuler
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Enregistrer
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
