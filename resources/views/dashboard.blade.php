<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   <div class="p"> {{ __("本アプリは外国の方に向けたオノマトペの学習を支援するアプリで、ご自由に使ってください!") }}</div>
                    <div class="p-7 text-gray-900">
                        分野別
                    </div>
                        <div class="p-8"></div>
                        <div class="p-9">
                        <p><a href='/categories/1'>【　食べ物　🍙】</a><a href='/categories/7'>　　　　　　　　　　【状態📊】</a></p>
                        <p><a href='/categories/2'>【　水・液体💧】</a><a href='/categories/8'>　　　　　　　　　　【声　🎤】</a></p>
                        <p><a href='/categories/3'>【痛み・感覚😣】</a><a href='/categories/9'>　　　　　　　　　　【音　🔈】</a></p>
                        <p><a href='/categories/4'>【　気持ち　😄】</a><a href='/categories/10'>　　　　　　　　　　【天気🌤️】</a></p>
                        <p><a href='/categories/5'>【　　体　　💪】</a><a href='/categories/11'>　　　　　　　　　　【温度🌡️】</a></p>
                        <p><a href='/categories/6'>【　衣　類　👔】</a><a href='/categories/12'>　　　　　　　　　　【形　🟨】</a></p>
                        </div>
                
            </div>
        </div>
    </div>
</x-app-layout>

<!--CSS-->
<style>
.p-6{
    font-size: 19px;
}
.p-7 {
        color: #555555;
        font-weight: bold;
        margin-top: 10px;
}
.p-8{
        border: 2px solid #800000;   /*2ピクセル実線 */
        background-color:#800000 ;  
        padding: 1px 8px;   
        margin-bottom: 15px;      /* 余白 */
}
.p-9{
    font-weight: 500;
    margin-top: 6px;
}
.p{
    font-weight: 600;
    margin-bottom: 30px;
}
       
        

}



</style>