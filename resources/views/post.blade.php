<x-layout>
    <div class="px-10 py-20 w-12/12 md:mx-auto md:w-10/12">
        <div class="font-medium text-gray-700">{{$post->created_at->format('d M Y')}}</div>
        <h1 class="heading text-4xl md:text-6xl font-bold font-sans md:leading-tight">
           {{$post->title}}
        </h1>
        <h2 class="text-xl text-gray-600 mt-2">{{$post->short_description}}</h2>
    </div>
    <div class="container mx-auto px-6 md:px-4">
    <img width="1600" height="900" src="{{$post->post_image}}">
        <div class="w-full md:w-12/12 justify-center">
            <div class="containier mt-20 text-center">
            {{$post->description}}
            </div>
            <div class="mb-2 mt-5">
                @foreach($post->tag as $item)
                    <a class="p-1 px-3 mr-1 mb-1 inline-block text-xs font-mono rounded bg-blue-200 text-green-800 hover:bg-blue-200 hover:text-blue-800 transition duration-300 ease-in-out" href="{{route('tags',$item->tag_name)}}">{{$item->tag_name}}</a>
                @endforeach
            </div>
            <div class="flex items-center mt-10 justify-end mb-3 last:mb-0">
                <img height="48" width="48" class="border-white border-2" src="https://i.picsum.photos/id/1005/5760/3840.jpg?hmac=2acSJCOwz9q_dKtDZdSB-OIK1HUcwBeXco_RMMTUgfY" alt="Sage Kirk">
                <div>
                    <span class="font-medium text-sm ml-1 block">Created by:{{$post->user_id}}</span>
                    <a class="text-sm ml-1 block text-green-400" href="#">@twitter_username</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
