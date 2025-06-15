<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Only show invoices belonging to authenticated user
        $invoices = auth()->user()->invoices;
        return view('invoices.index', compact('invoices'));
    }

    public function show(Invoice $invoice)
    {
        // Use Laravel Policy for authorization instead of manual check
        $this->authorize('view', $invoice);

        return view('invoices.show', compact('invoice'));
    }
}
