<?php

namespace Saade\FilamentDualListbox\Commands;

use Illuminate\Console\Command;

class FilamentDualListboxCommand extends Command
{
    public $signature = 'filament-dual-listbox';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
