@extends('layout.app')

@section('title', 'Create Shipment')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Create Shipment </h1>
            {{-- <a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/"
                target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a> --}}
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Shipment</h5>
                        <h6 class="card-subtitle text-muted">Create Shipment</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('shipments.store') }}">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label">Origin Address :</label>
                                <input type="number" class="form-control" name="origin_address_id"  required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Destination Address : </label>
                                <input type="number" class="form-control" name="destination_address_id"  required>
                            </div>
                            {{-- <div class="mb-3">
                                <label class="form-label">Tracking Number : </label>
                                <input type="text" class="form-control" name="tracking_no"  required>
                            </div> --}}
                            <div class="mb-3">
                                <label class="form-label">PickUp Date</label>
                                <input type="date" class="form-control" name="scheduled_pickup_date"  required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Delivery Date</label>
                                <input type="date" class="form-control" name="delivery_date"  required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" placeholder="price" required>
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
