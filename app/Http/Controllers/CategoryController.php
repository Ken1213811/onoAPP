<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Onomatope;  
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller

{

    public function index(Onomatope $ono,Category $category)
    {
        $onomatopes =$category->getByCategory();
        $totalCount = $category->getByCategory()->count();// 全データの数
        $user = Auth::user(); 
        $count = $user -> onomatopes()->where('category_id',$category->id) -> count();
                                                      //カテゴリid中urlのidと一致するやつを数える
      
        $progress = $count/$totalCount * 100;
       
        return view('categories.index')->with([
            'onomatopes'=>$onomatopes ,
            'progress' => $progress, // 進捗率をビューに渡す
            'user'=>$user
         ]); 

    }
}