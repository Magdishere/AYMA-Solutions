<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LocaleController extends Controller
{
    public function setLocale(Request $request)
    {
        // Validate the request data if necessary

        // Set the application locale
        app()->setLocale($request->input('locale'));

        // Save the locale in the session
        $request->session()->put('locale', $request->input('locale'));

        // Get the localized URL for the current route
        $redirectUrl = LaravelLocalization::getLocalizedURL($request->input('locale'), null, [], true);

        // Trim "/set-locale" from the URL
        $redirectUrl = str_replace('/set-locale', '', $redirectUrl);

        // Return a JSON response with the modified redirect URL
        return response()->json(['message' => 'Locale updated successfully', 'redirectUrl' => $redirectUrl]);
    }
}
