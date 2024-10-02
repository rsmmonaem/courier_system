@extends('layout.app')

@section('title', 'Create Shipment')
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                         <div class="">
                           <h1 class="h3 d-inline align-middle">Create Shipment </h1>
                        </div>
                        <div class="d-flex gap-2">
                            <h6 class="card-subtitle text-muted">Create Shipment</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('shipments.store') }}">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Origin Address :</label>
                                    <select class="form-control" name="origin_address_id"  required>
                                        <option>--Select Origin</option>
                                        @forelse ($data as $d)
                                            <option value="{{ $d->id }}">{{ $d->street }} - {{ $d->zip_code }}</option>
                                        @empty
                                            No Address Found
                                        @endforelse
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Destination Address : </label>
                                    <select class="form-control" name="destination_address_id"  required>
                                        <option>--Select Destination</option>
                                        @forelse ($data as $d)
                                            <option value="{{ $d->id }}">{{ $d->street }} - {{ $d->zip_code }}</option>
                                        @empty
                                            No Address Found
                                        @endforelse
                                    </select>
                                </div>
                                {{-- <div class="mb-3">
                                    <label class="form-label">Tracking Number : </label>
                                    <input type="text" class="form-control" name="tracking_no"  required>
                                </div> --}}
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">PickUp Date</label>
                                    <input type="date" class="form-control" name="scheduled_pickup_date"  required>
                                </div>
                                <div class="mb-3 col-md-6 ">
                                    <label class="form-label">Delivery Date</label>
                                    <input type="date" class="form-control" name="delivery_date"  required>
                                </div>
                             </div>
                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" placeholder="price" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Create Shipment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
