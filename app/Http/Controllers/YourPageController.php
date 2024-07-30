<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class YourPageController extends Controller
{
    /**
     * Display the user's page.
     */
    public function view(Request $request): View
    {
        return view('yourPage.view', [
            'user' => $request->user(),
        ]);
    }   

    }