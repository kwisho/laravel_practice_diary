<?php

namespace App\Http\Controllers;
use App\Models\Submission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    // 初期画面
    public function index()
      {
        return view('submissions.index');
      }

    // 確認画面
    public function confirm(Request $request)
      {

        $request->validate([
          'distance' => 'required',
          'contents' => 'required',
          'thoughts' => 'required',
        ]);

        $inputs = $request->all();


        if ($request->has("back")) {
          return redirect()
            ->route('submissions.index')
            ->withInput($inputs);
        }

        return view('submissions.confirm',[
          'inputs' => $inputs,
        ]);
      }

      public function complete(Request $request)
      {
        return view('submissions.complete');
      }

}
