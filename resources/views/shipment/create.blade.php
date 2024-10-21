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
                            <div class="container">
                                <form action="{{ route('shipments.store') }}" method="POST">
                                    @method('POST')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="scheduled_pickup_date">Scheduled Pickup Date</label>
                                                <input type="date" class="form-control" id="scheduled_pickup_date"
                                                    name="scheduled_pickup_date" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="suser_name">Sender Name</label>
                                                <input type="text" class="form-control" id="suser_name" name="suser_name"
                                                    required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="suser_number">Sender Number</label>
                                                <input type="text" class="form-control" id="suser_number"
                                                    name="suser_number" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="origin_address">Origin Address</label>
                                                <textarea class="form-control" id="origin_address" name="origin_address" required></textarea>
                                            </div>

                                            <div class="form-group mb-2">
                                                <label for="delivery_charge">Delivery Charge</label>
                                                <input type="text" class="form-control" id="delivery_charge"
                                                    name="delivery_charge" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="service_charge">Service Charge</label>
                                                <input type="text" class="form-control" id="service_charge"
                                                    name="service_charge" required>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-2">
                                                <label for="delivery_date">Delivery Date</label>
                                                <input type="date" class="form-control" id="delivery_date"
                                                    name="delivery_date" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="ruser_name">Receiver Name</label>
                                                <input type="text" class="form-control" id="ruser_name" name="ruser_name"
                                                    required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="ruser_number">Receiver Number</label>
                                                <input type="text" class="form-control" id="ruser_number"
                                                    name="ruser_number" required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="destination_address">Destination Address</label>
                                                <textarea class="form-control" id="destination_address" name="destination_address" required></textarea>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="cod">COD</label>
                                                <input type="text" class="form-control" id="cod" name="cod"
                                                    required>
                                            </div>
                                            <div class="form-group mb-2">
                                                <label for="total">Total</label>
                                                <input type="text" class="form-control" id="total" name="total"
                                                    required>
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="form-group col-md-6 mb-2">
                                                    <label for="product_details">Product Details</label>
                                                    <input type="text" class="form-control" id="product_details"
                                                        name="product_details" required>
                                                </div>
                                                <div class="form-group col-md-6 mb-2">
                                                    <label for="product_weight">Product Weight</label>
                                                    <input type="text" class="form-control" id="product_weight"
                                                        name="product_weight" required>
                                                </div>
                                                <div class="form-group col-md-6 mb-2">
                                                    <label for="product_lot">Product Lot</label>
                                                    <input type="text" class="form-control" id="product_lot"
                                                        name="product_lot" required>
                                                </div>
                                                <div class="form-group col-md-6 mb-2">
                                                    <label for="product_quantity">Product Quantity</label>
                                                    <input type="text" class="form-control" id="product_quantity"
                                                        name="product_quantity" required>
                                                </div>
                                                <div class="form-group col-md-6 mb-2">
                                                    <label for="remark">Remark</label>
                                                    <input type="text" class="form-control" id="remark"
                                                        name="remark">
                                                </div>
                                                <div class="form-group col-md-6 mb-2">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" id="status" name="status" required>
                                                        <option value="pending">Pending</option>
                                                        <option value="processing">Processing</option>
                                                        <option value="ready for shipping">Ready for Shipping</option>
                                                        <option value="shipping">Shipping</option>
                                                        <option value="out for delivery">Out for Delivery</option>
                                                        <option value="shipped">Shipped</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection
