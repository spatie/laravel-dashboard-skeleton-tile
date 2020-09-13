<?php

namespace Vendor\MyTile;

use Livewire\Component;

class MyTileComponent extends Component
{
    public $position;


    public function mount(string $position)
    {
        $this->position = $position;
    }
    
    
    public function render()
    {
        return view('dashboard-skeleton-tile::tile', [
            'myData' => MyStore::make()->getData(),
            'refreshIntervalInSeconds' => config('dashboard.tiles.skeleton.refresh_interval_in_seconds') ?? 60,

        ]);
    }
}
