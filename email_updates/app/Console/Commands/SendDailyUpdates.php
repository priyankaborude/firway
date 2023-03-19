<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendDailyUpdateJob;
use App\Models\Subscriber;


class SendDailyUpdates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:daily-updates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */

        
        public function handle()
        {
            // Fetch list of email addresses to send updates to
            $subscribers = Subscriber::all();
        
            // Dispatch a job to the queue for each subscriber
            foreach ($subscribers as $subscriber) {
                SendDailyUpdateJob::dispatch($subscriber->email);
            }
        }
        
}
