<?php

namespace KishorRajbanshi\LaravelBlade\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class BladeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:blade {arg}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Blade file using the Artisan command.';

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
     * @return void
     */
    public function handle(): void
    {
        $arg = $this->argument('arg');

        $blade = $this->blade($arg);

        $this->createDir($blade);

        if (File::exists($blade)) {
            $this->error("$blade already exists!");
            return;
        }

        File::put($blade, $blade);

        $this->info("$blade created.");
    }

    /**
     * Get absolute blade.
     *
     * @param string $arg
     * @return string
     */
    public function blade(string $arg): string
    {
        $name = str_replace('.', '/', $arg);

        return "resources/views/{$name}.blade.php";
    }

    /**
     * Create blade directory if not exists.
     *
     * @param string $blade
     * @return void
     */
    public function createDir(string $blade): void
    {
        if (!file_exists($dir = dirname($blade))) {
            mkdir($dir, 0777, true);
        }
    }
}
