<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ono;
class OnoController extends Controller
{
    public function index(Ono $ono)
    {
        return $ono->get();
    }
}
