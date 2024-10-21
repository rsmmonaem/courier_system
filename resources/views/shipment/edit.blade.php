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
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('shipments.update', $shipment->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="scheduled_pickup_date">Scheduled Pickup Date</label>
                                            <input type="date" class="form-control" id="scheduled_pickup_date"
                                                name="scheduled_pickup_date"
                                                value="{{ $shipment->scheduled_pickup_date->format('Y-m-d') }}" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="suser_name">Sender Name</label>
                                            <input type="text" class="form-control" id="suser_name" name="suser_name"
                                                value="{{ $shipment->suser_name }}" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="suser_number">Sender Number</label>
                                            <input type="text" class="form-control" id="suser_number" name="suser_number"
                                                value="{{ $shipment->suser_number }}" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="origin_address">Origin Address</label>
                                            <textarea class="form-control" id="origin_address" name="origin_address" required>{{ $shipment->origin_address }}</textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="delivery_charge">Delivery Charge</label>
                                            <input type="text" class="form-control" id="delivery_charge"
                                                name="delivery_charge" value="{{ $shipment->delivery_charge }}" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="service_charge">Service Charge</label>
                                            <input type="text" class="form-control" id="service_charge"
                                                name="service_charge" value="{{ $shipment->service_charge }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-2">
                                            <label for="delivery_date">Delivery Date</label>
                                            <input type="date" class="form-control" id="delivery_date"
                                                name="delivery_date" value="{{ $shipment->delivery_date->format('Y-m-d') }}"
                                                required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="ruser_name">Receiver Name</label>
                                            <input type="text" class="form-control" id="ruser_name" name="ruser_name"
                                                value="{{ $shipment->ruser_name }}" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="ruser_number">Receiver Number</label>
                                            <input type="text" class="form-control" id="ruser_number" name="ruser_number"
                                                value="{{ $shipment->ruser_number }}" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="destination_address">Destination Address</label>
                                            <textarea class="form-control" id="destination_address" name="destination_address" required>{{ $shipment->destination_address }}</textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="cod">COD</label>
                                            <input type="text" class="form-control" id="cod" name="cod"
                                                value="{{ $shipment->cod }}" required>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label for="total">Total</label>
                                            <input type="text" class="form-control" id="total" name="total"
                                                value="{{ $shipment->total }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="product_details">Product Details</label>
                                                <input type="text" class="form-control" id="product_details"
                                                    name="product_details" value="{{ $shipment->product_details }}"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="product_weight">Product Weight</label>
                                                <input type="text" class="form-control" id="product_weight"
                                                    name="product_weight" value="{{ $shipment->product_weight }}"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="product_lot">Product Lot</label>
                                                <input type="text" class="form-control" id="product_lot"
                                                    name="product_lot" value="{{ $shipment->product_lot }}" required>
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="product_quantity">Product Quantity</label>
                                                <input type="text" class="form-control" id="product_quantity"
                                                    name="product_quantity" value="{{ $shipment->product_quantity }}"
                                                    required>
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="remark">Remark</label>
                                                <input type="text" class="form-control" id="remark" name="remark"
                                                    value="{{ $shipment->remark }}">
                                            </div>
                                            <div class="form-group col-md-6 mb-2">
                                                <label for="status">Status</label>
                                                <select class="form-control" id="status" name="status" required>
                                                    <option value="pending"
                                                        {{ $shipment->status == 'pending' ? 'selected' : '' }}>Pending
                                                    </option>
                                                    <option value="processing"
                                                        {{ $shipment->status == 'processing' ? 'selected' : '' }}>
                                                        Processing</option>
                                                    <option value="ready for shipping"
                                                        {{ $shipment->status == 'ready for shipping' ? 'selected' : '' }}>
                                                        Ready for Shipping</option>
                                                    <option value="shipping"
                                                        {{ $shipment->status == 'shipping' ? 'selected' : '' }}>Shipping
                                                    </option>
                                                    <option value="out for delivery"
                                                        {{ $shipment->status == 'out for delivery' ? 'selected' : '' }}>Out
                                                        for Delivery</option>
                                                    <option value="shipped"
                                                        {{ $shipment->status == 'shipped' ? 'selected' : '' }}>Shipped
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection
