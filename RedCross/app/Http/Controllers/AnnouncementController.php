<?php

namespace App\Http\Controllers;
use App\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index(){
        $announcements = Announcement::where('active', true)->get();
        return view('donor', ['announcements' => $announcements]);
       }
}
