<?php

namespace App\Http\Controllers;
use App\Models\Submission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;

class SubmissionController extends Controller
{
    // プロパティを作成
    private $inputs = ["distance","contents","thoughts"];

    private $validator = [
      'distance' => 'required|max:8',
      'contents' => 'required|max:400',
      'thoughts' => 'required|max:400',
    ];

    // 初期画面
    public function index()
      {
        return view('submissions.index');
      }
    // セッションに書き込む
    public function post(Request $request)
      {
        $input = $request->only($this->inputs);

        $validator = Validator::make($input,$this->validator);
        if($validator->fails()){
          return redirect()
            ->route('submissions.index')
            ->withInput()
            ->withErrors($validator);
        }

        $request->session()->put("form_input",$input);

        return redirect()->route('submissions.confirm');
       }

       // 確認画面
      public function confirm(Request $request)
      {
        // セッションから値を取り出す<session()->get(key)>
        $input = $request->session()->get("form_input");

        // セッションの値がなければ戻る
        if(!$input){
          return redirect()->route('submissions.index');
        }
        return view('submissions.confirm',['input' => $input]);
      }


      public function send(Request $request)
      {
        $input = $request->session()->get('form_input');

        // 戻るを押した際の処理 withInputで値を保持したまま戻る
        if($request->has("back")) {
          return redirect()->route('submissions.index')
            ->withInput($input);
        }

        if(!$input){
          return redirect()->route('submissions.index');
        }

        $request->session()->forget('form_input');

        return redirect()->route('submissions.complete');
      }

      public function complete(){
        return view('submissions.complete');
      }


}
