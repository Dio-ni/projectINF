<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class MainController extends Controller
{
    public function homeL($l)
    {
        App::setlocale($l);
        return view('home');
    }
    public function home()
    {
        return view('home');
    }
    public function courses()
    {
        $courses = new Course();
        $teacher = new Teacher();
        //dd($reviews->all());
        return view('teacher', ['teachers' => $teacher->all()], ['courses' => $courses->all()]);
    }
    public function coursesL($l)
    {
        App::setlocale($l);
        $courses = new Course();
        $teacher = new Teacher();
        //dd($reviews->all());
        return view('teacher', ['teachers' => $teacher->all()], ['courses' => $courses->all()]);
    }
    public function uploadL($l)
    {
        App::setlocale($l);

        return view('upload');
    }
    public function Mathematics()
    {

        $courses = Course::wherecourse_name('Mathematics')->first()->toArray();
        return view('math', ['courses' => $courses]);
    }

    public function test()
    {
        return view('test');
    }
    public function review_check(Request $request)
    {
        $valid = $request->validate(
            [
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required|max:500'
            ]
        );
        //create new [table] row
        //$review = new Contact();
        //save info from form input
        //$review->email = $request->input('email');
        //$review->subject = $request->input('subject');
        // $review->message = $request->input('message');


        // $review->save();

        return redirect('review');
    }
}
