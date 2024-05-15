<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyMail;
use App\Models\Task;

class SendTaskNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     */
    public function __construct(public array $incoming)
    {

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
    // $email = new PostMail(['name' => $this->incoming['name'], 'title' => $this->incoming['title']]);

    // Mail::to($this->incoming['email'])->send($email);
        // Mail::to($this->incoming['email'])->send(new PostMail(['name' => $this->incoming['name'], 'title' => $this->incoming['title']]));
    }
}
