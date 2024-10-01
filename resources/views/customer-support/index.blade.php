@extends('layout.app')

@section('title', 'Customer-Service')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Customer Support </h1>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Customer Support</h5>
                        <h6 class="card-subtitle text-muted">List</h6>
                    </div>
                    <div class="card-body">
                        <table id="datatables-multi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Customer Name</th>
                                    <th>Message</th>
                                    <th>Timestamp</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($customer_supports as $c_support)
                                <tr>
                                    <td>{{ $c_support->name }}</td>
                                    <td>{{ $c_support->message ?? 'Unknown' }}</td>
                                    <td>{{ $c_support->created_at->format('Y-m-d H:i') }}</td>
                                    <td>{{ $c_support->status }}</td>
                                    <td>

                                        <form action="{{ route('customer-support.destroy', $c_support->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</main>
@endsection
