
<x-layout>
 {{--SEO--}}
    @section('language',$language ?? config('app.locale'))
    @section('title',$title ?? 'Default title')
    @section('description',$description ?? 'Default description')
    @section('canonical_url',$canonicalUrl?? 'Default url')
    @section('og_title',$ogTitle ?? 'Default OG title')
    @section('og_description',$ogDescription ?? 'Default OG URL')
    @section('og_url',$ogUrl ?? 'Default title')
    @section('og_sitename',$ogSitename ?? 'Default sitename')
    @section('og_image',$ogImageUrl ?? 'Default og image')
    @section('og_secure_image',$ogSecureImageUrl ?? 'Default secure image url')
    @section('tw_description',$twitterDescription ?? 'Default twitter description')
    @section('tw_title',$twitterTitle ?? 'Default twitter title')
    @section('tw_image',$twitterImageUrl ?? 'Default twitter image')
     @section('structured_data')
        {
        "@context": "https://schema.org",
        "@graph": [
        {
        "@type": "WebSite",
        "@id": "",
        "url": "",
        "name": "{{config('app.name')}}",
        },
        {
        "@type": "ImageObject",
        "@id": "",
        "url": "",
        "width": 485,
        "height": 436
        },
        {
        "@type": "WebPage",
        "@id": "",
        "url": "",
        "inLanguage": "{{$language ?? config('app.locale')}}",
        "name": "",
        "isPartOf": {
        "@id": ""
        },
        "primaryImageOfPage": {
        "@id": ""
        },
        "datePublished": "2019-12-17T15:02:58+00:00",
        "dateModified": "2021-10-22T08:51:26+00:00",
        "description": ""
        }
        ]
        }
         @endsection
    {{--Custom code--}}
    @section('custom_code')
        <script>console.log('Hi there!')</script>
        @endsection
    <div class="container mx-auto px-6 md:px-4">
    <div class="mt-10 py-6 md:py-12 lg:w-10/12 ">
        <h1 class="heading text-4xl md:text-6xl font-bold font-sans md:leading-tight"><em>Proton Blog</em>  Articles</h1>
    </div>
<main class="py-6">
    @foreach($articles as $article)
        <div class="mb-12">
            <div class="flex flex-col md:flex-row w-full lg:w-10/12">
                <div class="md:mr-4 mb-2 md:mb-0 md:w-4/12 ">
                    <a class="bg-gray-100" href="/blog/2018-12-29-writing-with-markdown/">
                        <img width="640" height="360" class="rounded mb-3 hover:opacity-70 transition duration-300 ease-in-out" alt="Writing With Markdown" src="{{$article->list_image}}"></a>
                </div>
                <div class="flex-1">
                    <div class="flex items-center">

                        <div class="flex ml-4">
                            <div class="flex items-center mr-2 -ml-4">
                                <img width="28" height="28" class="rounded-full border-white border-2" src="{{$article->post_image}}" alt="Sage Kirk">
                            </div>
                        </div>
                        <div class="text-sm font-medium text-gray-700">{{$article->created_at->format('d M Y')}}</div>
                    </div>
                    <a href="{{route('posts.show',$article->slug)}}" class="hover:text-green-400">
                        <h2 class="text-2xl font-semibold mb-1">{{$article->title}}</h2>
                    </a>
                    <p class="text-base font-light text-gray-600 mb-4">{{$article->short_description}}</p>
                    {{--Category--}}
                    <div class="mb-2">

                        <a class="p-1 px-3 mr-1 mb-1 inline-block text-xs font-mono rounded bg-green-200 text-green-800 hover:bg-blue-200 hover:text-blue-800 transition duration-300 ease-in-out" href="{{route('categories.show',$article->category->category_name)}}">{{$article->category->category_name}}</a>
                    </div>
                    <div class="mb-2">
                        @foreach($article->tag as $item)
                        <a class="p-1 px-3 mr-1 mb-1 inline-block text-xs font-mono rounded bg-blue-200 text-green-800 hover:bg-blue-200 hover:text-blue-800 transition duration-300 ease-in-out" href="{{route('tags.show',$item->tag_name) }}">{{$item->tag_name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</main>
{{--{{ $articles->links()}}--}}
    </div>
</x-layout>



