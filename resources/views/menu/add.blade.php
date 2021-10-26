<!-- Main Layout -->
@extends('layouts.main')

@section('content')
<section class="section">
    <div class="section-body">
        <div class="card">
            <form class="needs-validation" novalidate="" method="POST" action="{{ route('menu.store') }}">
                @csrf
                <div class="card-header">
                    <h4>JavaScript Validation</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" class="form-control" required="">
                        <div class="invalid-feedback">
                            What's your name?
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required="">
                        <div class="invalid-feedback">
                            Oh no! Email is invalid.
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <input type="email" class="form-control">
                        <div class="valid-feedback">
                            Good job!
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <label>Message</label>
                        <textarea class="form-control" required="" rows="3"></textarea>
                        <div class="invalid-feedback">
                            What do you wanna say?
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ route('menu.index') }}" class="btn btn-info icon-left"><i class="fas fa-arrow-left mr-1"></i>Back</a>
                    <button class="btn btn-primary"><i class="far fa-save mr-1"></i>Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection