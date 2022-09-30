@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">Update phone no</div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ Session::get('success') }}
                                <span type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></span>
                            </div>
                        @elseif (Session::has('error'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ Session::get('error') }}
                                <span type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></span>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('phoneNo.update') }}">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Phone No</label>

                                <div class="col-md-6">
                                    <input id="phone_no" type="text"
                                           class="form-control @error('email') is-invalid @enderror" name="phone_no"
                                           value="{{ @$contact->title }}" required autofocus>

                                    @error('phone_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
