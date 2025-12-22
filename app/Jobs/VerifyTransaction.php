<?php

namespace App\Jobs;

use App\Models\Transaction;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Http;

class VerifyTransaction
{
    use Dispatchable;

    /**
     * Create a new job instance.
     */
    public function __construct(public Transaction $transaction) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Prevent double processing
        if ($this->transaction->paid_at) {
            return;
        }

        $response = Http::paystack()
            ->get("/transaction/verify/{$this->transaction->reference}")
            ->throw();

        if ($response->json('data.status') === 'success') {
            $this->transaction->markAsPaid();
        }
    }
}
