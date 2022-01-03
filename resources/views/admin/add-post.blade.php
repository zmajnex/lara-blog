
<x-admin-layout>
    <div class=" container w-full ">
        <form method="POST" action="#" class="w-full">
            @csrf
            <div class="my-2 px-4">
                <label class="w-full text-2xl" for="title">Add title</label>
                <input class="w-full leading-9 border border-blue-200 my-4 px-2" type="text" name="title">
            </div>
            <div class="my-2 px-4">
                <label class="w-full text-2xl" for="title">Add seo friendly url</label>
                <input class="w-full leading-9 border border-blue-200  my-4 px-2" type="text" name="slug">
            </div>
            <div class="flex px-4 justify-evenly">
                <div x-data="showBlogListImage()" class="flex items-center justify-center  bg-gray-200">
                    <div class="bg-white rounded-lg shadow-xl">
                        <div class="m-4">
                            <label class="inline-block mb-2 text-gray-500">Upload blog list image</label>
                            <div class="flex items-center justify-center w-full">
                                <label
                                    class="flex flex-col w-full border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <div class="relative flex flex-col items-center justify-center pt-7">
                                        <img id="preview-blog-list" class="absolute inset-0 w-full h-32">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                            Select a photo</p>
                                    </div>
                                    <input type="file" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
                <div x-data="showBlogPostImage()" class="flex items-center justify-center  bg-gray-200">
                    <div class="bg-white rounded-lg shadow-xl">
                        <div class="m-4">
                            <label class="inline-block mb-2 text-gray-500">Upload blog post image</label>
                            <div class="flex items-center justify-center w-full">
                                <label
                                    class="flex flex-col w-full border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                    <div class="relative flex flex-col items-center justify-center pt-7">
                                        <img id="preview-blog-post" class="absolute inset-0 w-full h-32">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                        <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                            Select a photo</p>
                                    </div>
                                    <input type="file" class="opacity-0" accept="image/*" @change="showPreview(event)" />
                                </label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="my-2 px-4">
                <label class="w-full text-2xl" for="title">Add short description</label>
                <textarea class="w-full leading-9 border h-24 border-blue-200  my-4 px-2" type="text" name="shortDescription"></textarea>
            </div>
            <div class="my-2 px-4">
                <label class="w-full text-2xl" for="title">Add blog post</label>
                <textarea id="tinymce" class="w-full leading-9 h-32 border border-blue-200  my-4 px-2" type="text" name="description"></textarea>
            </div>
            <h2 class="w-full text-center text-4xl my-4 ">SEO</h2>
            <div class="my-2 px-4">
                <label class="w-full text-2xl" for="title">Add meta title</label>
                <input class="w-full leading-9 border border-blue-200 my-4 px-2" type="text" name="metaTitle">
            </div>
            <div class="my-2 px-4">
                <label class="w-full text-2xl" for="title">Add meta description</label>
                <input class="w-full leading-9 border border-blue-200 my-4 px-2" type="text" name="metaDescription">
            </div>
        </form>
    </div>

</x-admin-layout>
