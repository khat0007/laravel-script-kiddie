@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">My Invoices</h1>

        @if(session('message'))
            <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
                {{ session('message') }}
            </div>
        @endif

        @foreach ($invoices as $invoice)
            <div class="bg-white shadow-md rounded p-4 mb-4">
                <p><strong>Invoice ID:</strong> {{ $invoice->id }}</p>
                <p><strong>Amount:</strong> ${{ $invoice->amount }}</p>
                <a href="{{ route('invoices.show', $invoice->id) }}" class="text-blue-500 hover:underline">View</a>

                @if(auth()->user()->isAdmin())
                    <form action="{{ route('invoices.destroy', $invoice->id) }}" method="POST" class="inline-block ml-4" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                @endif
            </div>
        @endforeach
    </div>
@endsection
