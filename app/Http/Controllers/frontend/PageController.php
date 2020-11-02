<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Project;
use App\Vacancy;
use App\Visit;

class PageController extends Controller
{
    public function app(Request $request) {
        return view('layouts.site');
    }

    public function quizSite(Request $request) {

        return view('layouts.quiz_site');
    }

    public function quizPromo(Request $request) {

        return view('layouts.quiz_promo');
    }

    public function spa(Request $request) {

        return [
            'projects' => Project::where('status', 'active')->get(),
            'vacancys' => Vacancy::where('status', 'active')->get()
        ];
    }

    public function lead(){
        return view('layouts.lead');
    }

}
