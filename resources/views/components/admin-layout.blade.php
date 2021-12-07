<!doctype html>
<html lang="en">
<x-head>

</x-head>
<body class="admin">
    <main class="flex">
        <aside style="background-image: linear-gradient(to right, rgb(91, 121, 162) 0%, rgb(46, 68, 105) 100%)" class="inline-block bg-indigo-800 text-white w-64 h-screen ">
            <div class="logo border-b-2 flex p-4 justify-between">
        <span><a href="{{route('home')}}"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
</svg></a></span>
                <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
</svg></span>
            </div>
            <div class="nav">
                <ul class="mx-2 p-2 ">
                    <li class="my-4 flex"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
</svg></span><a class="hover:text-gray-400 pl-2" href="">Pages </a></li>
                    <li class="my-4 flex"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
</svg></span><a class="hover:text-gray-400 pl-2" href="">Posts </a></li>
                    <li class="my-4  flex"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
</svg></span><a class="hover:text-gray-400 pl-2" href="">Tags</a></li>
                    <li class="my-4 flex"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
</svg></span><a class="hover:text-gray-400 pl-2" href="">Categories </a></li>
                    <li class="my-4 flex"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
</svg></span><a class="hover:text-gray-400 pl-2" href="">Users </a></li>
                    <li class="my-4 flex"><span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 stroke-current text-green-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
</svg></span><a class="hover:text-gray-400 pl-2" href="">Media Gallery </a></li>
                </ul>

            </div>
        </aside>
        <div class=" block flex-grow ">

            <div x-data="{isOpen:false}" class="py-3 px-6 md:px-0 md:flex md:justify-between">
                <div class="flex justify-end items-center">
                    {{--Mobile menu button--}}
                    <div class="flex md:hidden">
                        <button class="text-grey-500 focus:outline-none" @click="isOpen = !isOpen">
                            <img src="https://img.icons8.com/material-outlined/24/000000/menu--v1.png"/>
                        </button>
                    </div>
                </div>
                {{--Menu if mobile is set to hidden--}}
                <div :class="isOpen ? 'show' : 'hidden'" class="md:flex md:block items-center">
                    <div class="flex flex-col mt-5 md:mt-0 md:flex-row md:ml-6">
                        <a class="cursor-pointer my-1 text-sm text-grey-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Avatar</a>
                        <a class="cursor-pointer my-1 text-sm text-grey-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Logout</a>
                    </div>
                </div>
            </div>
            <div>
                <div class=" flex justify-center">
                   {{$slot}}
                </div>
            </div>
        </div>

    </main>

<div>

</div>

</body>
</html>
