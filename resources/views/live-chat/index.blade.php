@extends('layout.app')
@section('title', 'Create Brands')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <main class="content">
            <div class="container-fluid p-0">

                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Live Chat </h1>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Live Chat</h5>
                                <h6 class="card-subtitle text-muted">List</h6>
                            </div>
                            <div class="card-body">
                                <table id="datatables-multi" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Message</th>
                                            <th>Timestamp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($messages as $message)
                                        <tr>
                                            <td>{{ $message->name }}</td>
                                            <td>{{ $message->message ?? 'Unknown' }}</td>
                                            <td>{{ $message->created_at->format('Y-m-d H:i') }}</td>
                                            <td>

                                                <form action="{{ route('customer-support.destroy', $message->id) }}" method="POST" style="display:inline;">
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
    </div>
</main>
@endsection
