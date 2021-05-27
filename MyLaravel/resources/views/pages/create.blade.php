@extends('layouts.main-layout')

@section('content')
    
    <form method="POST" action="{{ route('update') }}">

        @csrf
        @method('POST')

        <div class="form-group row">
            <label for="name">Name</label>
            <div>
                <input id="name" type="text" name="name">
            </div>

            <label for="lastname">Lastname</label>
            <div>
                <input id="lastname" type="text" name="lastname">
            </div>

            <label for="date_of_birth">Date of birth</label>
            <div>
                <input id="date_of_birth" type="date" name="date_of_birth">
            </div>

            <label for="document_type">Document type</label>
            <div>
                <input id="document_type" type="text" name="document_type">
            </div>

            <label for="document_number">Document number</label>
            <div>
                <input id="document_number" type="text" name="document_number">
            </div>

            <button type="submit">Submit</button>
        </div>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
    </form>
@endsection