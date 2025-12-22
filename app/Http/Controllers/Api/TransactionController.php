<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTransactionRequest;
use App\Models\Order;
use App\Jobs\VerifyTransaction;
use App\Models\Transaction;
use Illuminate\Http\Response;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Transaction::class);
    }

    public function store(StoreTransactionRequest $request, Order $order)
    {
        $transaction = $request->fulfill();

        return response()->api('Transaction initialized', compact('transaction'));
    }

    /**
     * Paystack callback endpoint
     */
    public function update(Transaction $transaction)
    {
        // Dispatch verification job (non-blocking)
        VerifyTransaction::dispatchAfterResponse($transaction);
        // Paystack expects a fast 200 response
        return response()->noContent();
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();

        return response()->api('Transaction cancelled successfully');
    }
}
