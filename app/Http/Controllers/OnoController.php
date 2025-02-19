<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onomatope;
use App\Models\Category;    
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Redirect;
use Cloudinary;

use Symfony\Component\HttpFoundation\JsonResponse;
class OnoController extends Controller

{
    
    public function index(Onomatope $ono)
    {
        $onomatopes = $ono->orderBy('name', 'asc')->paginate(10);
        $checkedCount = $onomatopes->where('checked', true)->count();// チェック済みの数
        $totalCount = $ono->get()->count();// 全データの数

        $user = Auth::user();
        $count = $user -> onomatopes() -> count();
        $progress = $count/$totalCount * 100;
       
        return view('onos.index')->with([
            'onos'=>$onomatopes ,
            'progress' => $progress, // 進捗率をビューに渡す
            'user'=>$user
         ]); 

    }

    public function show(Onomatope $onomatope)
    {
        return view('onos.show')->with(['ono' => $onomatope]);
    }
   
    public function delete(Onomatope $onomatope)
    {
        $onomatope->users()->detach();
        $onomatope->delete();
        return redirect('/');
    }

    public function create(Category $category)
    {
        return view('onos.create')->with(['categories' => $category->get()]);
    }

    public function store(Request $request, Onomatope $ono)
    {   
        $input = $request['ono'];
        if($request->file('image')){ //画像ファイルが送られた時だけ処理が実行される
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image_url' => $image_url];  
        }
        $ono->fill($input)->save();
        return redirect('/onomatopes/' . $ono->id);
        

    }
    public function update(Request $request, Onomatope $onomatope)
    {
        $input_ono = $request['ono'];
        
        $onomatope->fill($input_ono)->save();
       
        return redirect('/onomatopes/' . $onomatope->id); //web.phpと同じインスタンスにして、自動的にどこかを更新するのかをわからせる
    }





       
  
    public function updateCheck(Request $request,Onomatope $ono)
    {   //中間テーブル->数を数える->リダイレクト
        // 最新の進捗率を計算
        $id = Auth::id();
        //attachメソッドを使って中間テーブルにデータを保存
        $ono->users()->attach($id);
        
       /* $user = Auth::user();
        $count = $user -> onomatopes() -> count();
        $onomatopes = $onomatopes->orderBy('name', 'asc')->paginate(5); 
        $onocount = $onomatopes -> count();
        $progress = $count/$onocount * 100;
        */
        
        return  redirect()->back();
    
    }

    

    
}
