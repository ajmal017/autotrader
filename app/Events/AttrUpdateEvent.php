<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

/**
 * Create an event.
 * This event can have several types which are later classified in vue.js.
 * Also this event is called from Providers/QueEventsServiceProvider.php in order to show how jobs are processed
 * in real-time in Execution.vue (jobs table).
 *
 * Class AttrUpdateEvent
 * @package App\Events
 */
class AttrUpdateEvent implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $update;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($param)
    {
        $this->update = $param;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('ATTR');
    }
}
