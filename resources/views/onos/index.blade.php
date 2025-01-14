<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Onomatopes</h1>
        <div class='onos'>
            @foreach ($onos as $ono )
                <div class='ono'>
                    <h2 class='name'>{{$ono->name }}</h2>
                    <p class='description'>{{$ono->description }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $onos->links() }}
        </div>
    </body>
</html>