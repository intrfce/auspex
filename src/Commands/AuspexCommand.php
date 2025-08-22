<?php

namespace Intrfce\Auspex\Commands;

use Illuminate\Console\Command;

class AuspexCommand extends Command
{
    public $signature = 'auspex';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
