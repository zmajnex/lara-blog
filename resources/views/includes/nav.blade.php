<nav class="bg-white shadow mb-10">
    <div x-data="{isOpen:false}" class="py-3 px-6 md:px-0 md:flex md:justify-between">
        <div class="flex justify-between items-center">
            <div class="flex md:ml-5  items-center">
                <img src="{{asset('images/proton.png')}}" alt="" class="h-8 shadow rounded-full">
                <a class="cursor-pointer ml-2 my-1 text-sm text-grey-700 font-medium hover:text-indigo-500 ">Welcome, Guest</a>
            </div>
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
                <a class=" cursor-pointer my-1 text-sm text-grey-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Home</a>
                <a class="cursor-pointer my-1 text-sm text-grey-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">About</a>
                <a class="cursor-pointer my-1 text-sm text-grey-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Contact</a>
                <a class="cursor-pointer my-1 text-sm text-grey-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Login</a>
                <a class="cursor-pointer my-1 text-sm text-grey-700 font-medium hover:text-indigo-500 md:mx-4 md:my-0">Register</a>

            </div>
        </div>
    </div>
</nav>
