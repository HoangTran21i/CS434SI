<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $title = 'Chính sách bảo mật';
        return view('clients.privacy-policy', compact('title'));
    }

}
