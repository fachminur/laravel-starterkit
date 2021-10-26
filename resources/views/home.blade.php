@extends('layouts.main')

@section('content')
<!-- Main Content -->
<section class="section">
    <div class="section-header">
        <h1>Beranda</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Components</a></div>
            <div class="breadcrumb-item">Hero</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Beranda</h2>
        <p class="section-lead">Components that can be used to make something bigger than the header.</p>

        <div class="row">
            <div class="col-12 mb-4">
                <div class="hero bg-primary text-white">
                    <div class="hero-inner">
                    <h2>Welcome Back, {{ Auth::User()->name }}!</h2>
                    <p class="lead">This page is a place to manage everything.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
