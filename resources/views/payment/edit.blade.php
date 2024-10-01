@extends('layout.app')

@section('title', 'Edit Payment')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Payment </h1>
            {{-- <a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/"
                target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a> --}}
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Payment</h5>
                        <h6 class="card-subtitle text-muted">Edit Payment</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('payments.edit', $payment->id) }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Shipment Id</label>
                                <input type="number" class="form-control" name="shipment_id" placeholder="Shipment Id" required value="{{ old('shipment_id', $payment->shipment_id) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Amount</label>
                                <input type="number" class="form-control" name="amount" placeholder="Amount" required value="{{ old('amount', $payment->amount) }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Payment Method</label>
                                <input type="text" class="form-control" name="payment_method" placeholder="Payment Method" required value="{{ old('payment_method', $payment->payment_method) }}" >
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Payment Status</label>
                                <input type="text" class="form-control" name="payment_status" placeholder="Payment Status" required value="{{ old('payment_status', $payment->payment_status) }}"  >
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
