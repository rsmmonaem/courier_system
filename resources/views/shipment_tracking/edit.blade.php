@extends('layout.app')

@section('title', 'Create Shipment Tracking')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Create Shipment Tracking</h1>
            {{-- <a class="badge bg-primary ms-2" href="https://adminkit.io/pricing/"
                target="_blank">Pro Component <i class="fas fa-fw fa-external-link-alt"></i></a> --}}
        </div>

        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Shipment Tracking</h5>
                        <h6 class="card-subtitle text-muted">Create Shipment Tracking</h6>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('shipment_trackings.update', $shipment_tracking->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Shipment Id :</label>
                                <input type="number" class="form-control" name="shipment_id"  required value="{{ old('shipment_id',  $shipment_tracking->shipment_id) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Location : </label>
                                <input type="text" class="form-control" name="location"  required value="{{ old('location',  $shipment_tracking->location) }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status Update : </label>
                                <input type="text" class="form-control" name="status_update"  required value="{{ old('status_update',  $shipment_tracking->status_update) }}">
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
