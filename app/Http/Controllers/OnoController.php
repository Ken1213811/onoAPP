<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ono;
class OnoController extends Controller
{
    public function index(Ono $ono)
    {
        
        return view('onos.index')->with(['onos'=>$ono->getPaginateByLimit()]);
    }
}
