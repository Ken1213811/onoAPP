<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Onos</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        <h2 class="name">
            【{{ $ono->name }}】の意味
        </h2>
        <div class="description">
                意味：
                <p>{{ $ono->description }}</p>           
        </div>
      
        <a href="/categories/{{ $ono->category->id }}" class="cate">{{ $ono->category->name }}</a>
        
        @if($ono->image_url)
        <div class="image">
                <img src="{{ $ono->image_url }}" alt="画像が読み込めません。">
        </div>
        @endif
    <form action="/onomatopes/{{$ono->id}}" method="POST" >
     @csrf
     @method('PUT')
        <div class="memo">
            Memo:
            <p>
            @if($ono->memo==0)
                <textarea name="ono[memo]" cols="65" rows="6" placeholder="自由に使ってください!"></textarea>
            @else
                <textarea name="ono[memo]" cols="65" rows="6">{{$ono->memo}}</textarea>
            @endif
            </p>
        </div>
        <input type="submit" class="sub" value="store"/>
    </form>
        <div class="footer">
        <input type="button" onclick="history.back()" value="戻る">
        </div>
    </body>
</html>

<!--CSS-->
<style>
.name {
    padding: 0.5em;/*文字周りの余白*/
    color: #494949;/*文字色*/
    background: #fffaf4;/*背景色*/
    border-left: solid 5px #ffaf58;/*左線（実線 太さ 色）*/

}

.description{
    position: relative;
    background: #fff0cd;
    box-shadow: 0px 0px 0px 5px #fff0cd;
    border: dashed 2px white;
    padding: 0.2em 0.5em;
    color: #454545;
}
.description:after{
    position: absolute;
    content: '';
    right: -7px;
    top: -7px;
    border-width: 0 15px 15px 0;
    border-style: solid;
    border-color: #ffdb88 #fff #ffdb88;
    box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.15);
}
.description p {
    margin: 0; 
    padding: 0;
}
.cate {
  display: inline-block;
  padding: 0.2em 0.4em;
  text-decoration: none;
  background: #f7f7f7;
  border-left: solid 6px #ff7c5c;/*左線*/
  color: #ff7c5c;/*文字色*/
  font-weight: bold;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.29);
  margin-top: 15px;
}
.cate:active{
  box-shadow: inset 0 0 2px rgba(128, 128, 128, 0.1);
  transform: translateY(2px);
}
.image{
    padding:0 !important;
    text-align: center;
}
.image img{
    border:1px solid #aaa;
    
}
.memo{
    position: relative;
    background: #fff0cd;
    box-shadow: 0px 0px 0px 5px #fff0cd;
    border: dashed 2px white;
    padding: 0.2em 0.5em;
    color: #454545;
    line-height:2.0;
}
.memo:after{
    position: absolute;
    content: '';
    right: -7px;
    top: -7px;
    border-width: 0 15px 15px 0;
    border-style: solid;
    border-color: #ffdb88 #fff #ffdb88;
    box-shadow: -1px 1px 1px rgba(0, 0, 0, 0.15);
}
.memo p {
    margin: 0; 
    padding: 0;
}
.sub{
    margin-top: 10px;
    border: 2px solid #b84c00;
}
.footer{
    margin-top: 5px;
    cursor:pointer
}







</style>