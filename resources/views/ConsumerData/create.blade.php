@extends('layout')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card w-75">
        <div class="card-header">
            <h3>Create Consumer</h3>
        </div>
        <div class="card-body p-4">
            <form action="{{ route('consumer-data.store') }}" method="post">
                @csrf
                <div class="mb-3 row">
                    <div class="col-md-4">
                        <label for="name" class="form-label">Name</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-4">
                        <label for="nik" class="form-label">NIK</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}">
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-4">
                        <label for="dob" class="form-label">Date of Birth</label>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control @error('dob') is-invalid @enderror" id="dob" name="dob" value="{{ old('dob') }}">
                        @error('dob')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-4">
                        <label for="nik" class="form-label">NIK</label>
                    </div>
                    <div class="col-md-8">
                        <select class="form-select" aria-label="Default select example">
                            <option value="BELUM MENIKAH">Belum Menikah</option>
                            <option value="MENIKAH">Menikah</option>
                            <option value="CERAI">Cerai</option>
                        </select>
                        {{-- <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" value="{{ old('nik') }}"> --}}
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
