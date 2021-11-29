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
        </div>
    </div>
</x-layout>
