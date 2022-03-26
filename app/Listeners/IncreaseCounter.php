<?php

namespace App\Listeners;
use App\Events\PortfolioViewr;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class IncreaseCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(PortfolioViewr $event)
    {
     
     $this -> updateViewr($event -> eventViwer ); 
    }

    function updateViewr($eventViwer){
        $eventViwer -> viwer = $eventViwer -> viwer + 1;

        $eventViwer -> save();
    }
}
