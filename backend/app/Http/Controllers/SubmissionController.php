<?php

namespace App\Http\Controllers;
use App\Models\Submission;
use App\Http\Requests\SubmissionRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;

class SubmissionController extends Controller
{
    // 初期画面
    public function index()
      {
        return view('user.submissions.index');
      }

    public function post(Request $request)
      {
        $submission = new Submission();

        $submission->fill($request->all());
        $submission->user_id = $request->user()->id;

        $input_data = [
          'distance' => $submission->distance,
          'contents' => $submission->contents,
          'thoughts' => $submission->thoughts
        ];

        return redirect()->route('user.submissions.confirm',$input_data);
       }

       // 確認画面
      public function confirm(Request $request)
      {
        $submission = new Submission();

        $submission->fill($request->all());
        $submission->user_id = $request->user()->id;

        if(!$submission){
          return redirect()->route('user.submissions.index');
        }
        return view('user.submissions.confirm',['submission' => $submission]);
       }


      public function send(Request $request)
      {

        $submission = new Submission();

        $submission->fill($request->all());
        $submission->user_id = $request->user()->id;

        if($request->has("back")) {
          return redirect()->route('user.submissions.index')
              ->withInput();
        } else {
          $submission->save();
        }

        if(!$submission){
          return redirect()->route('user.submissions.index');
        }

        return redirect()->route('user.submissions.complete');
      }

      public function complete(){
          return view('user.submissions.complete');
        }

}
