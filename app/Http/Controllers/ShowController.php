<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function qrCodeLanding(Request $request)
{
    // Check if the user came from the QR code
    if ($request->query('source') == 'qr-code') {
         // Generate a unique ID for the user (for example, using UUID)
        $userId = (string) \Illuminate\Support\Str::uuid();
        dd($userId);

        // Store the ID in the session for later use
        session(['user_id' => $userId]);

        // Send the ID to an endpoint (e.g., API)
        $this->sendUserIdToEndpoint($userId);

        // Return view where user can input their name
        return view('user-input')->with('userId', $userId);
    }

    else {
        return view('index');
    }

    return redirect('/');
}

// Send user ID to an external endpoint
private function sendUserIdToEndpoint($userId)
{
    Http::post('https://api.yourwebsite.com/user', [
        'user_id' => $userId,
    ]);
}

}
