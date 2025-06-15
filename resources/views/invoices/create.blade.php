<x-guest-layout>
    <form method="POST" action="{{ route('invoices.store') }}">
        @csrf

        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>

        <label for="amount">Amount</label>
        <input type="number" name="amount" id="amount" required>

        <button type="submit">Create Invoice</button>
    </form>
</x-guest-layout>
