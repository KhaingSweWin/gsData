<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GsController extends Controller
{
    public function showData()
    {
      $datafromGs=file_get_contents('http://gsx2json.com/api?id=15PY9AM3-o-ajJFaX81s0dQu1617mux_RmYXYs9q5Kvk');
      $gsdata=json_decode($datafromGs);
      return view('pages.home',['data'=>$gsdata->rows]);
    }
}
