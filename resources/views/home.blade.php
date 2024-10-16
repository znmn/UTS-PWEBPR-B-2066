@extends('layouts.app')
@section('title', 'Homepage')

@section('content')
    <h2 class="text-center pt-3">Data Kontak Tersimpan</h2>
    <hr class="my-2">
    
    <table class="table table-secondary table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No. HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $contact['name'] }}</td>
                    <td>{{ $contact['email'] }}</td>
                    <td>{{ $contact['phone'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
