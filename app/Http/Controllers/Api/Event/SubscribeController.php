<?php

namespace App\Http\Controllers\Api\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $result = auth()->user()->events()->toggle($request->id);

        return response()->json([
            'success' => true,
            'attached' => ! empty($result['attached']),
        ]);
    }
}
