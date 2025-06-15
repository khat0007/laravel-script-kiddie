<?php

namespace App\Policies;

use App\Models\Invoice;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class InvoicePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function view(User $user, Invoice $invoice)
    {
        // Allow if user owns the invoice or user is admin
        return $user->id === $invoice->user_id || $user->isAdmin();
    }

    public function update(User $user, Invoice $invoice)
    {
        // Example: only owner or admin can update
        return $user->id === $invoice->user_id || $user->isAdmin();
    }

    public function delete(User $user, Invoice $invoice)
    {
        // Example: only admin can delete invoices
        return $user->isAdmin();
    }
}
