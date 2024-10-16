@extends('layouts.app')
@section('title', 'Landing Page')

@section('content')
    <!-- Hero Section -->
    <section class="jumbotron text-center">
        <div class="container">
            <h2 class="display-4">Selamat datang</h2>
            <p class="lead">Ini adalah halaman sampel untuk Landing Page.</p>
        </div>
    </section>

    <!-- Features Section -->
    <section class="container pt-2">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fitur 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla
                            auctor, vestibulum magna sed,
                            convallis ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fitur 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla
                            auctor, vestibulum magna sed,
                            convallis ex.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Fitur 3</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet nulla
                            auctor, vestibulum magna sed,
                            convallis ex.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
@endsection
