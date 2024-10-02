@extends('layout.app')

@section('title', 'Edit Shipment')
@section('content')
<main class="content">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="card">
                   <div class="card-header d-flex justify-content-between pb-0">
                        <div>
                          <h2 class="fs-30 fw-700">Shipment Edit</h2>
                        </div>
                        <div>
                           {{-- <a href="#" class="btn btn-primary ">Edit Shipment</a> --}} 
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('shipments.update', $shipment->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="row">
                             <div class="mb-3 col-md-6">
                                    <label class="form-label">Origin Address :</label>
                                    <select class="form-control" name="origin_address_id"  required>
                                        <option>--Select Origin</option>
                                        @forelse ($address as $d)
                                            <option value="{{ $d->id }}" {{$shipment->origin_address_id == $d->id ? 'Selected':''}}>{{ $d->street }} - {{ $d->zip_code }}</option>
                                        @empty
                                            No Address Found
                                        @endforelse
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Destination Address : </label>
                                    <select class="form-control" name="destination_address_id"  required>
                                        <option>--Select Destination</option>
                                        @forelse ($address as $d)
                                            <option value="{{ $d->id }}" {{$shipment->destination_address_id == $d->id ? 'Selected':''}}>{{ $d->street }} - {{ $d->zip_code }}</option>
                                        @empty
                                            No Address Found
                                        @endforelse
                                    </select>
                                </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">PickUp Date</label>
                                <input type="date" class="form-control" name="scheduled_pickup_date"  required  value="{{ old('scheduled_pickup_date', optional($shipment->scheduled_pickup_date)->format('Y-m-d')) }}">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Delivery Date</label>
                                <input type="date" class="form-control" name="delivery_date"  required value="{{ old('scheduled_pickup_date', optional($shipment->delivery_date)->format('Y-m-d')) }}">
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="price" placeholder="date" required value="{{ old('price', $shipment->price) }}">
                            </div>
                             <div class="mb-3 col-md-6">
                                    <label class="form-label">Status : </label>
                                    <select class="form-control" name="status"  required>
                                        <option>--Select Status --</option>
                                        <option value="active" {{ $shipment->status == 'active' ? 'selected':'' }}>Active</option>
                                        <option value="inactive" {{ $shipment->status == 'inactive' ? 'selected':'' }}>Inactive</option>
                                    </select>
                                </div>
                            <button type="submit" class="btn btn-primary">Update Shipment</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection
