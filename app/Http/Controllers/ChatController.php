<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatController extends Controller
{
    public function processMessage(Request $request)
{
    $userMessage = $request->input('message');

    $apiKey = env('DEEP_AI_API_KEY');

    $response = Http::withHeaders([
        'api-key' => $apiKey,
    ])->post('https://api.deepai.org/api/text-generator', [
        'text' => $userMessage,
    ]);

    if ($response->successful()) {
        $data = $response->json();
        // For debugging, dump response
        // dd($data);
        $reply = $data['output'] ?? "Sorry, I couldn't process that.";
        return response()->json(['reply' => $reply]);
    } else {
        // Log error for debugging
        \Log::error('DeepAI API error', ['response' => $response->body()]);
        return response()->json(['reply' => "Error connecting to AI service."]);
    }
}
}