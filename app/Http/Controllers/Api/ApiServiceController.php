<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ApiServiceController extends Controller
{
    function index() {
        $services = Service::all();
        return response()->json($services);
    }
}