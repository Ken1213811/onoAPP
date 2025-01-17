<x-app-layout>
    <x-slot name="header">
        words
    </x-slot>

        <div class='onos'>
            @foreach ($onos as $ono )
                <div class='ono'>
                    <h2 class='name'>
                    <input type="checkbox" name="ono_ids[]" value="{{ $ono->id }}">
                    {{$ono->name }}
                </h2>
                    <p class='description'>{{$ono->description }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $onos->links() }}
        </div>
</x-app-layout>

<!--CSS-->
<style>
    .onos {
        display: flex;
        flex-direction: column;
    }

    .ono {
        margin-bottom: 15px;
    }

    .name {
        font-weight: bold;
        display: flex;
        align-items: center;
    }

    .description {
        margin-top: 5px;
        color: #666;
    }

    .paginate {
        margin-top: 20px;
        text-align: center;
    }
</style>
  

