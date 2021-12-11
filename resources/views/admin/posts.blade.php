<x-admin-layout>
    <div class="mx-auto w-5/6 flex flex-col justify-between md:flex-row  mt-2 ">
        <h2 class="text-xl mb-4">All Posts </h2>
        <a href="#" class="bg-blue-400 text-white hover:bg-blue-600 md:inline-block py-2 px-6">Add new post</a>
    </div>
<div class=" container ">
        <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-200 text-gray-800 overflow-x-auto">
            <tr class="text-left border-b-2 border-gray-300">
                <th class="px-4 py-3">#</th>
                <th class="px-4 py-3">id</th>
                <th class="px-4 py-3">Post title</th>
                <th class="px-4 py-3">Author</th>
                <th class="px-4 py-3">Status</th>
                <th class="px-4 py-3">Date</th>
                <th class="px-4 py-3">Edit</th>
                <th class="px-4 py-3">Delete</th>
            </tr>
            <tr class="bg-gray-100 border-b border-gray-200">
                <td class="px-4 py-3"><input type="checkbox"></td>
                <td class="px-4 py-3">1</td>
                <td class="px-4 py-3">Hic nemo voluptatibus a nobis sed rerum recusandae fugiat esse sapiente et ut</td>
                <td class="px-4 py-3">John Doe</td>
                <td class="px-4 py-3">published </td>
                <td class="px-4 py-3">13-5-2021</td>
                <td class="px-4 py-3 ">
                    <a href="" class="text-white bg-green-700" ><svg xmlns="http://www.w3.org/2000/svg" class=" stroke-current stroke-1 text-green-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg></a>

                </td>
                <td class="px-4 py-3 ">
                <a href="" class="text-white"><svg xmlns="http://www.w3.org/2000/svg" class="stroke-current stroke-1 text-red-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg></a>
                </td>
            </tr>
        </table>
</div>
</x-admin-layout>
