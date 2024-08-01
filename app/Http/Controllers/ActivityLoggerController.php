<?php

namespace App\Http\Controllers;

use App\Models\ActivityLogger;
use Illuminate\Http\Request;

class ActivityLoggerController extends Controller
{
    public function log()
    {
        $activityLogs = ActivityLogger::latest()->paginate(15);
        return view('pages.log', compact('activityLogs'));
    }
    public function logActivity($data){
        ActivityLogger::create($data);
    }
}
