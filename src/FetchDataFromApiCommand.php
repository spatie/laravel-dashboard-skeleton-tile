<?php

namespace Vendor\MyTile;

use Illuminate\Console\Command;

class FetchDataFromApiCommand extends Command
{
    protected $signature = 'dashboard:fetch-data-from-xxx-api';

    protected $description = 'Fetch data for tile';

    public function handle(VeloApi $velo)
    {
        $this->info('Fetching Velo stations...');

        $myData = Http::get($endpoint)->json();

        MyStore::make()->setData($myData);

        $this->info('All done!');
    }
}
