@extends('layouts.main-layout')

@section('content')
    
    <table>
        <tr>
            <td>Name</td>
            <td>{{ $ospite -> name }}</td>
        </tr>
        
        <tr>
            <td>Lastname</td>
            <td>{{ $ospite -> lastname }}</td>
        </tr>
        
        <tr>
            <td>Date of birth</td>
            <td>{{ $ospite -> date_of_birth }}</td>
        </tr>
        
        <tr>
            <td>Document type</td>
            <td>{{ $ospite -> document_type }}</td>
        </tr>
        
        <tr>
            <td>Document number</td>
            <td>{{ $ospite -> document_number }}</td>
        </tr>
    </table>

@endsection