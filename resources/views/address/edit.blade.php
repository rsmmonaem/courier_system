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
                        <h5 class="card-title">Address</h5>
                        <h6 class="card-subtitle text-muted">Create Now</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('addresses.update', $address->id) }}" >
                            @csrf
                            @method('PUT')
                            {{-- @dd($address) --}}
                            <div class="mb-3">
                                <label class="form-label">Street</label>
                                <input type="text" class="form-control" name="street" placeholder="Street" required value="{{ old('street', $address->street ?? '') }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <input type="text" class="form-control" name="city" placeholder="City" required value="{{ old('city', $address->city) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">State</label>
                                <input type="text" class="form-control" name="state" placeholder="State" required value="{{ old('state', $address->state) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">ZIP Code</label>
                                <input type="text" class="form-control" name="zip_code" placeholder="ZIP Code" required value="{{ old('zip_code', $address->zip_code) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Country</label>
                                <input type="text" class="form-control" name="country" placeholder="Country" required value="{{ old('country', $address->country) }}">
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
