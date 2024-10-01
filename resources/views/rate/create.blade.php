@extends('layout.app')

@section('title', 'Create Rate')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Create Rate </h1>
            {{-- <a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/"
                target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a> --}}
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Rate</h5>
                        <h6 class="card-subtitle text-muted">Create Rate</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('rates.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Weight</label>
                                <input type="number" class="form-control" name="weight" placeholder="weight" required >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Distance</label>
                                <input type="number" class="form-control" name="distance" placeholder="distance" required >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" placeholder="price" required >

                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
