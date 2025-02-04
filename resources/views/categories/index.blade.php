<x-app-layout>
    <x-slot name="header">
        words
    </x-slot>
    
    <div class='onos'>
    @foreach ($onomatopes as $ono)
        <div class='ono'>
                @if($ono->users->count() == 0)
                    <form action="/onomatopes/{{$ono->id}}/update-check" method="POST">
                        @csrf
                        <button type="submit" class="achieve-button">達成</button>
                    </form>   
                @else
                    <p class="achieved-text">達成済</p>
                @endif
            <h2 class='name' id="name-{{ $ono->id }}">
                <a href="/onomatopes/{{ $ono->id }}">{{ $ono->name  }}</a>
                <div class="delete">
                <form action="/onomatopes/{{ $ono->id }}" id="form_{{ $ono->id }}" method="post">
                     @csrf
                     @method('DELETE')
                    <button type="button" onclick="deletePost({{ $ono->id }})">--delete</button> 
                </form>
                </div>
            </h2>

        </div>    
        <p class='description' id="description-{{ $ono->id }}">
                {{$ono->description }}
        </p>
        <div class='cate'>   
        <a href="/categories/{{ $ono->category->id }}">{{ $ono->category->name }}</a>
        </div>
    @endforeach

    </div>

    <div>
        <h3>進捗状況: {{ round($progress, 2) }}%</h3>
        <div style="background-color: #e0e0e0; height: 20px; width: 100%; border-radius: 10px;">
            <div style="background-color: #64E986; height: 100%; width: {{ $progress }}%; border-radius: 10px;"></div>
        </div>
    </div>
    <a href='/onomatopes/create'>create</a>
    <div class="footer">
                <a href="/">戻る</a>
    </div>






<!-- ページネーションリンク -->
  <div class='pagination'>
    {{ $onomatopes->links('pagination::default') }}
  </div>
</x-app-layout>

<!-- JavaScript -->
<script>
    function deletePost(id) {
        'use strict'

        if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
        }
    }
</script>



          
<!-- CSS -->
<style>
    .onos {
        display: flex;
        flex-direction: column;
    }

    .ono {
        margin-bottom: 2px;
        display: flex;
    }

    .name {
        color: #555555;
        font-weight: bold;
        display: flex;
        align-items: center;
    }

    .delete {
        margin-left: 20px;
        font-weight:normal;
        font-size: 14px;
        color:#FF6633 ;
    }

    .description {
        margin-top: 2px;
        font-weight: normal;
        font-size: 16px;
        color:#333333 ;
    }

    .cate{
        margin-top: 2px;
        margin-bottom: 5px;
        font-size: 13px;
        border: 2px burlywood; 
        padding: 6px;

    }

    .pagination {
        margin-top: 20px;
        text-align: center;
        font-size: 18px;
    }

    .pagination .active {
        color: #76c7c0;
        font-size: 20px;
    }


    .achieve-button {
        font-size: 15px;
        border: 2px solid green;   /* 緑色の2ピクセル実線 */
        padding: 3px 8px;         /* ボタン内の余白 */
        border-radius: 5px;        /* 角を丸くする */
        background-color: white;   /* 背景色を白に */
        color: green;              /* テキスト色 */
        cursor: pointer;           /* ホバー時のカーソルを指に */
        margin-left: 3px;           /* 左に3pxの余白を追加 */
        margin-right: 25px;
    }

    /* 達成済みテキストに囲み線を追加 */
    .achieved-text {
        font-size: 15px;
        border: 2px solid gray;    /* グレーの2ピクセル実線 */
        padding: 3px 5px;         /* テキスト周りの余白 */
        border-radius: 5px;        /* 角を丸くする */
        background-color: #f0f0f0; /* 少し明るいグレーの背景 */
        color: gray;               /* テキスト色 */
        display: inline-block; 
        margin-left: 3px;           /* 左に3pxの余白を追加 */
        margin-right: 15px;
</style>
