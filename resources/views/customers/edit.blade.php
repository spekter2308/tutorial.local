@extends('layouts.app')

@section('title', 'Edit details for ' . $customer->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Edit details for {{ $customer->name }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers/{{ $customer->id }}" method="POST">
                @method('PATCH')
                @include('customers.form')

                <button type="submit" class="btn-primary">Save customers</button>
            </form>
        </div>
    </div>

@endsection
