@extends('layout.app')

@section('title', 'Create Ivoice')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Create Ivoice </h1>
            {{-- <a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/"
                target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a> --}}
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Rate</h5>
                        <h6 class="card-subtitle text-muted">Create Ivoice</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('ivoices.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Shipment Id</label>
                                <input type="text" class="form-control" name="shipment_id" placeholder="Street" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Amoiunt </label>
                                <input type="number" class="form-control" name="amount" placeholder="amount" required>
                            </div>
                            {{-- <div class="mb-3">
                                <label class="form-label">State</label>
                                <input type="number" class="form-control" name="price" placeholder="State" required>
                            </div> --}}

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
