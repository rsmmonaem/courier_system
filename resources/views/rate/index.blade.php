@extends('layout.app')

@section('title', 'List of Rate')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <div class="mb-3">
            {{-- <h1 class="h3 d-inline align-middle">Create RATE </h1> --}}
            <a href="{{ route('rates.create') }}" class="btn btn-primary ">Add Rate</a>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Rate</h5>
                        <h6 class="card-subtitle text-muted">List</h6>
                    </div>
                    <div class="card-body">
                        <table id="datatables-multi" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>SL.</th>
                                    <th>Weight</th>
                                    <th>Distance</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($rates as $rate)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $rate->weight ?? 'Unknown' }}</td>
                                    <td>{{ $rate->distance ?? 'Unknown' }}</td>
                                    <td>{{ $rate->price ?? 'Unknown' }}</td>
                                    <td>{{ $rate->created_at->format('Y-m-d H:i') }}</td>
                                    <td>
                                        <a href="{{ route('rates.edit', $rate->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('rates.destroy', $rate->id) }}" method="POST" style="display:inline;">
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
