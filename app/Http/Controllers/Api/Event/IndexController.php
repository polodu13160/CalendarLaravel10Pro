<?php

namespace App\Http\Controllers\Api\Event;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): JsonResponse
    {
        $eventIds = auth()->user()->events()->pluck('id');
        $events = Event::all()
            ->map(function (Event $event) use ($eventIds): array {
                return [
                    'id' => $eventId = $event->id,
                    'title' => $event->title,
                    'color' => $event->colour,
                    'start' => $event->starts_at->format('Y-m-d H:i:s'),
                    'end' => $event->ends_at->format('Y-m-d H:i:s'),
                    'borderColor' => $eventIds->contains($eventId) ? 'green' : 'yellow',
                ];
            });

        return response()->json([
            'events' => $events,
        ]);

    }
}
