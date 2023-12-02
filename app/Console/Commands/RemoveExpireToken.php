<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Sanctum\PersonalAccessToken;

class RemoveExpireToken extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tokens:remove_all {--day=7 :the number of days to remove expired tokens} ';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove all expired tokens';

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
       $expiration = config('sanctum.expiration');
       if ($expiration) {
        $day = $this->option('day');
        $tokens = PersonalAccessToken::where('created_at', '<',now()->subMinutes($expiration + ($day * 24 * 60)));
        $tokens->delete();
        return 0 ;
       }
       $this->warn('expire time is not set');
    }
}
