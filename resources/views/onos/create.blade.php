<!DOCTYPE HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Onos</title>
    </head>
    <body>
        <h1>新たなOnomatopes</h1>
        <form action="/onomatopes" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="name">
                <h2>Word</h2>
                <input type="text" name="ono[name]" placeholder="オノマトペ"/>
            </div>
            <div class="description">
                <h2>Description</h2>
                <textarea name="ono[description]" placeholder="この単語の意味を入力してください"></textarea>
            </div>

         <div class="category">
           <h2>Category</h2>
           <select name="ono[category_id]">
                @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
           </select>
        </div>
        <div class="image">
                <input type="file" name="image">
        </div>

            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">back</a>
        </div>
    </body>
</html>