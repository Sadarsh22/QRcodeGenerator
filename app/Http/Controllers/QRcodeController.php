<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRcodeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function generate(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $value = ($request->color);
        list($r, $g, $b) = sscanf($value, "#%02x%02x%02x");
        $qr = QrCode::size(200)->color($r, $g, $b)->generate($request->name);
        return view('generated', compact('qr'));
    }
}
