@extends('layout.app')

@section('title', 'List of Addrees')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Create address </h1>
            {{-- <a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/"
                target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a> --}}
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">address</h5>
                        <h6 class="card-subtitle text-muted">Create Now</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('addresses.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Street</label>
                                <input type="text" class="form-control" name="street" placeholder="Street" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="city" placeholder="City" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" name="state" placeholder="State" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ZIP Code</label>
                                <input type="text" class="form-control" name="zip_code" placeholder="ZIP Code" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" name="country" placeholder="Country" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
