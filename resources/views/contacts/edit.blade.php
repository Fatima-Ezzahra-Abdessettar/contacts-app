@extends('layouts.app')

@section('title', 'Modifier le contact')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h2>Modifier le contact</h2>
            </div>

            <div class="card-body">
                <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- First Name --}}
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Prénom *</label>
                        <input
                            type="text"
                            name="first_name"
                            id="first_name"
                            class="form-control @error('first_name') is-invalid @enderror"
                            value="{{ old('first_name', $contact->first_name) }}"
                            required
                        >
                        @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Last Name --}}
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Nom *</label>
                        <input
                            type="text"
                            name="last_name"
                            id="last_name"
                            class="form-control @error('last_name') is-invalid @enderror"
                            value="{{ old('last_name', $contact->last_name) }}"
                            required
                        >
                        @error('last_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-3">
                        <label for="email" class="form-label">Email *</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $contact->email) }}"
                            required
                        >
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Job Title --}}
                    <div class="mb-3">
                        <label for="job_title" class="form-label">Poste</label>
                        <input
                            type="text"
                            name="job_title"
                            id="job_title"
                            class="form-control @error('job_title') is-invalid @enderror"
                            value="{{ old('job_title', $contact->job_title) }}"
                        >
                        @error('job_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- City --}}
                    <div class="mb-3">
                        <label for="city" class="form-label">Ville</label>
                        <input
                            type="text"
                            name="city"
                            id="city"
                            class="form-control @error('city') is-invalid @enderror"
                            value="{{ old('city', $contact->city) }}"
                        >
                        @error('city')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- Country --}}
                    <div class="mb-3">
                        <label for="country" class="form-label">Pays</label>
                        <input
                            type="text"
                            name="country"
                            id="country"
                            class="form-control @error('country') is-invalid @enderror"
                            value="{{ old('country', $contact->country) }}"
                        >
                        @error('country')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">
                            Annuler
                        </a>
                        <button type="submit" class="btn btn-primary">
                            Mettre à jour
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
