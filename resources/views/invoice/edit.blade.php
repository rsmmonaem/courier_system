@extends('layout.app')

@section('title', 'Edit Ivoice')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Edit Ivoice </h1>
            {{-- <a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/"
                target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a> --}}
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Invoice</h5>
                        <h6 class="card-subtitle text-muted">Edit Ivoice</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('invoices.update', $invoice->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Shipment Id</label>
                                <input type="text" class="form-control" name="shipment_id" placeholder="Street" required value="{{ old('shipment_id', $invoice->shipment_id) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Amount </label>
                                <input type="number" class="form-control" name="amount" placeholder="amount" required value="{{ old('amount', $invoice->amount) }}">
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
