@extends('layout')

@section('content')

<div class="container">
    <h5>Consumer Data</h5>
</div>
<div class="container mt-5">
    <div class="container d-flex justify-content-end">
        <a class="btn btn-primary" href="{{ route('consumer-data.create') }}" role="button">
            Create <i class="bi bi-plus"></i>
        </a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center" scope="col">Action</th>
            <th class="text-center" scope="col">Name</th>
            <th class="text-center" scope="col">NIK</th>
            <th class="text-center" scope="col">Date of Birth</th>
            <th class="text-center" scope="col">Marriage Status</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($data as $temp)
            <tr>
                <td class="text-center d-flex justify-content-center">
                    <a type="button" class="btn btn-success me-3" href="{{ route('consumer-data.edit', $temp) }}">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <form action="{{ route('consumer-data.destroy', $temp) }}" method="post">
                    @method('delete')
                    @csrf
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash"></i>
                        </button>
                    </form>
                    {{-- <button type="submit" class="btn btn-danger" id="delete-btn" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <i class="bi bi-trash"></i>
                    </button> --}}
                    <!-- Modal -->
                    {{-- <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="deleteModalLabel">Delete Confirmation</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this data? {{ $temp->part_number }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{ route('consumer-data.destroy', $temp) }}" method="post">
                                    @method('delete')
                                    @csrf
                                        <button type="submit" class="btn btn-danger">
                                            Save changes
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </td>
                <th class="text-center" scope="row">{{ $temp->name }}</th>
                <td class="text-center">{{ $temp->nik }}</td>
                <td class="text-center">{{ $temp->dob }}</td>
                <td class="text-center">{{ $temp->marriage_status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
