@extends('layout.app')

@section('title', 'Create Payment')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Create Payment </h1>
            {{-- <a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/"
                target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a> --}}
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Payment</h5>
                        <h6 class="card-subtitle text-muted">Create Payment</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('payments.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Shipment Id</label>
                                <input type="number" class="form-control" name="shipment_id" placeholder="Shipment Id" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Amount</label>
                                <input type="number" class="form-control" name="amount" placeholder="Amount" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Payment Method</label>
                                <input type="text" class="form-control" name="payment_method" placeholder="Payment Method" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Payment Status</label>
                                <input type="text" class="form-control" name="payment_status" placeholder="Payment Status" required>
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
