@extends('layouts.app')

@section('content')
    <h1>Invoice #{{ $invoice->id }}</h1>
    <p>User ID: {{ $invoice->user_id }}</p>
    <!-- More invoice details here -->
@endsection
