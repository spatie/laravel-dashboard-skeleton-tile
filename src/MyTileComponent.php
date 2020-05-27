<?php

namespace Vendor\MyTile;

use Livewire\Component;

class MyTileComponent extends Component
{
    /** @var string */
    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        return view('dashboard-skeleton-tile::tile', [
            'stations' => MyStore::make()->stations(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.skeleton.refresh_interval_in_seconds') ?? 60,

        ]);
    }
}
