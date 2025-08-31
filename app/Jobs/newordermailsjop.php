<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Mail;
use App\Mail\userInvoice;
use App\Mail\adminInvoice;
use App\Mail\vindorInvoice;
class newordermailsjop implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct( public $cuastamer, public $admin, public $vindur)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
      Mail::to($this->cuastamer)->queue(new userInvoice());
      Mail::to($this->admin)->queue(new adminInvoice());
      Mail::to($this->vindur)->queue(new vindorInvoice());
    }
}
