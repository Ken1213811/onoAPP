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
            {{ $ono->name }}
        </h2>
        <div class="description">
            <div class="content__ono">
                <h3>説明</h3>
                <p>{{ $ono->description }}</p>    
            </div>
            
        </div>
      
        <a href="/categories/{{ $ono->category->id }}">{{ $ono->category->name }}</a>
        @if($ono->image_url)
        <div>
                <img src="{{ $ono->image_url }}" alt="画像が読み込めません。">
        </div>
        @endif
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>