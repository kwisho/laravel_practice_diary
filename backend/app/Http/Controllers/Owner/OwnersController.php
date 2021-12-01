<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:owners');
  }

  public function index()
  {
    dd('日誌一覧です');
  }

}
