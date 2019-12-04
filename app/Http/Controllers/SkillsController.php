<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = Skills::all();
        return view('skills.index', ['skills' => $skills]);
    }
}
