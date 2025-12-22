<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\VerifyTransaction;
use App\Models\Transaction;
use Illuminate\Http\Response;

class TransactionsController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Transaction::class, 'transaction', [
            'except' => ['update'],
        ]);
    }

    /**
     * Paystack callback endpoint
     */
    public function update(Transaction $transaction)
    {
        // Verify asynchronously after response
        VerifyTransaction::dispatchAfterResponse($transaction);

        // Paystack requires a fast 2xx response
        return response()->noContent();
    }
}
