@extends('layouts.main-layout')

@section('content')
    
    <form method="POST" action="{{ route('submitForm') }}">

        @csrf
        @method('POST')

        <div class="form-group row">
            <label for="name">Name</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name">
            </div>

            <label for="lastname">Lastname</label>
            <div class="col-md-6">
                <input id="lastname" type="text" class="form-control" name="lastname">
            </div>

            <label for="date_of_birth">Date of birth</label>
            <div class="col-md-6">
                <input id="date_of_birth" type="date" class="form-control" name="date_of_birth">
            </div>

            <label for="document_type">Document type</label>
            <div class="col-md-6">
                <input id="document_type" type="text" class="form-control" name="document_type">
            </div>

            <label for="document_number">Document number</label>
            <div class="col-md-6">
                <input id="document_number" type="text" class="form-control" name="document_number">
            </div>

            <button type="submit">Submit</button>
        </div>

    </form>
@endsection