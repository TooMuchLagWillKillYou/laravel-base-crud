@extends('layouts.main-layout')

@section('content')
    
    <a href="{{ route('addOspite') }}">
        <button>Add New</button>
    </a>

    <ul>
        @foreach ($ospiti as $ospite)

            <a href="{{ route('ospite', $ospite -> id) }}">
                <li>
                    {{ $ospite -> name }}
                    {{ $ospite -> lastname }}
                </li>
            </a>

        @endforeach
    </ul>

@endsection