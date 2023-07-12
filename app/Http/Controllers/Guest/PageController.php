<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{

    public function index() {

       
        // get all students
        $movies = Movie :: all();
        // dd($students[0]);

        // get all students with names which starts with 'g'
        // $students = Student :: where('name', 'like', 'g%')
        //             // order by date of birth descendent
        //             -> orderBy('date_of_birth', 'desc')
        //             // limit max number of resulting students (10)
        //             -> limit(10)
        //             -> get();

        return view('home', compact('movies'));
    }
}