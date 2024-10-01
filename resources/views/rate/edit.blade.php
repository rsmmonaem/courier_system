@extends('layout.app')

@section('title', 'Edit Rate')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Rate </h1>
            {{-- <a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/"
                target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a> --}}
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Rate</h5>
                        <h6 class="card-subtitle text-muted">Edit Rate</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('rates.update', $rate->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Weight</label>
                                <input type="number" class="form-control" name="weight" placeholder="weight" required value="{{ old('weight', $rate->weight) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Distance</label>
                                <input type="number" class="form-control" name="distance" placeholder="distance" required value="{{ old('distance', $rate->distance) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" placeholder="price" required value="{{ old('price', $rate->price) }}">

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
