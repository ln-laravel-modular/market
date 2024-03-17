<?php

namespace Modules\Market\Console\Commands\Package;

use App\Support\Arr;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class PackageRefreshCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'market:package-refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset and rebuild all public packages.';

    protected $path = 'public\\vendor';

    protected $files = [];
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
     * @return mixed
     */
    public function handle()
    {
        //
        $packages = $this->getPackages();

        $return = [];
        foreach ($packages as $package) {
            $return[$package] = [
                "name" => $package,
                'files' => $this->getPackageFiles($package),
                "versions" => [],
            ];
            foreach ($this->getPackages($package) ?? [] as $version) {
                $return[$package]['versions'][$version] = [
                    "name" => $package . '-' . $version,
                    'files' => $this->getPackageFiles($package . '\\' . $version),
                    'version' => $version,
                ];
            }
        }

        $this->write($return);
        return 0;
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['example', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }

    public function setPath($path)
    {
        $this->path = $path;
    }
    public function getPath()
    {
        return $this->path;
    }
    public function getPackages($relativePath = null)
    {
        return array_map(function ($package) {
            return basename($package);
        }, app('files')->directories($this->getPath() . (empty($relativePath) ? '' : '\\' . $relativePath)));
    }
    public function getPackageFiles($packageName)
    {
        return array_map(function ($file) {
            return $file->getRelativePathname();
        }, app('files')->allFiles($this->getPath() . '\\' . $packageName));
    }

    public function write($content)
    {
        app('files')->replace($this->getPath() . '\packages.lock', json_encode($content, JSON_PRETTY_PRINT));
    }
}
