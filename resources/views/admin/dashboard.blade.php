<x-admin-layout>
    <div class="relative min-h-screen md:flex">

        <!-- mobile menu bar -->
        <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
            <!-- logo -->
            <a href="#" class="block p-4 text-white font-bold">Admin</a>

            <!-- mobile menu button -->
            <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- sidebar -->
        <div style="background-image: linear-gradient(to right, rgb(91, 121, 162) 0%, rgb(46, 68, 105) 100%)"class="sidebar  text-white	 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">

            <!-- logo -->

            <a href="#" class="text-white flex items-center space-x-2 px-4">
                <span class="text-xl font-extrabold">Proton Dashboard</span>
            </a>

            <!-- nav -->
            <nav>
                <a href="#" class="block py-2.5 px-4 transition duration-200  hover:text-gray-200 ">
                    Users
                </a>
                <a href="#" class="block py-2.5 px-4 transition duration-200  hover:text-gray-200 ">
                   Posts
                </a>
                <a href="#" class="block py-2.5 px-4 transition duration-200  hover:text-gray-200">
                   Categories
                </a>
                <a href="#" class="block py-2.5 px-4  transition duration-200 hover:text-gray-200">
                    Tags
                </a>
                <a href="#" class="block py-2.5 px-4  transition duration-200 hover:text-gray-200">
                    Media Gallery
                </a>
            </nav>
        </div>

        <!-- content -->
        <div class="flex-1 p-10 text-2xl font-bold">
            Admin panel
        </div>

    </div>




</x-admin-layout>
