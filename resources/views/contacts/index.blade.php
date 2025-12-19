@extends('layouts.app')

@section('content')
<h1 class="mb-4">Contacts</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">
    Nouveau contact
</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->first_name }} {{ $contact->last_name }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                <a href="{{ route('contacts.edit', $contact->id) }}"
                   class="btn btn-sm btn-warning">
                    Edit
                </a>

                <form action="{{ route('contacts.destroy', $contact->id) }}"
                      method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection
