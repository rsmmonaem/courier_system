@extends('layout.app')

@section('title', 'List of Shipment')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="card">

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
                            
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div>
                                <h2 class="fs-30 fw-700">Bulk Import Shipment</h2>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="{{ route('import.shipment.view') }}" class="btn btn-primary ">Bulk Import</a>
                                <a href="{{ route('shipments.create') }}" class="btn btn-primary ">Add Shipment</a>
                            </div>
                        </div>
                        <div class="card-body">

                            @if (session('success'))
                                <div>{{ session('success') }}</div>
                            @endif

                            @if ($errors->any())
                                <div>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('import.shipment') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 col-md-6 mx-auto">
                                    <label class="form-label">Select File</label>
                                    <input type="file" name="file" accept=".xlsx, .xls, .csv" class="form-control mb-2"
                                        required>
                                    <button type="submit" class="btn btn-primary">Import Data</button>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </main>

@endsection
