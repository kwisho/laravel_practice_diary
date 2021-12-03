<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Submission;
use App\Models\User;
use Carbon\Carbon;

class OwnersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:owners');
  }

  public function index()
  {
    $submissions = Submission::all()->sortByDesc("created_at");

    return view('owner.index',['submissions' => $submissions]);
  }

}
