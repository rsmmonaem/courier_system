@extends('layout.app')

@section('title', 'Customer-Service')
@section('content')
<main class="content">
    <div class="container-fluid p-0">
{{-- @dd($user) --}}
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Customer Support </h1>
            {{-- <a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/"
                target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a> --}}
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Customer Support</h5>
                        <h6 class="card-subtitle text-muted">Create Now</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('customer-support.store') }}">
                            @csrf
                            <div class="form-label">
                                <label for="name">Name:</label>
                                <input type="text" name="name" value="{{$user->name }}" readonly>
                            </div>
                            <div class="form-label">
                                <label for="name">Email:</label>
                                <input type="text" name="email" value="{{$user->email }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Message</label>
                                <textarea  class="form-control" name="message" placeholder="Write something" required> </textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
