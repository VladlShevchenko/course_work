<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    private $orders = [];

    public function index()
    {
        $plans = Plan::all();
        $users = User::all();
        return view('index', ['plans'=>$plans, 'users'=>$users]);
    }
    public function plans($id)
    {
        $plans = Plan::find($id);
        return view('plans', ['plan' => $plans]);
    }
    public function faq()
    {
        return view('faq');
    }
    public function createFeedback()
    {
        $users = User::all();
        return view('createFeedback', ['users'=>$users]);
    }
    public function createFeedbackPost(Request $request)
    {
        $feedback = new Feedback();
        $feedback->text = $request->text;
        $feedback->estimate = $request->estimate;
        $feedback->user_id = $request->user_id;
        $feedback->save();
        return response()->view('createFeedback', [
            "users" => User::all(),
            "feedbacks" => Feedback::all(),
            "status" => true
        ], 200);
    }
}
