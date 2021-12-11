<x-admin-layout>
    <div class="mx-auto w-5/6 flex  mt-2">
        <h2 class="text-xl mb-4">Settings</h2>
    </div>
    <div x-data="{dropdownMenu: false}" class="mx-auto w-5/6">
        <div class=" w-full flex justify-between">
            <span>Custom code</span>
            <div>
                <button @click="dropdownMenu = ! dropdownMenu">
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': dropdownMenu}  " class="h-6 w-6 transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13l-3 3m0 0l-3-3m3 3V8m0 13a9 9 0 110-18 9 9 0 010 18z" />
                </svg>
                </button>
            </div>


        </div>
        <div x-show="dropdownMenu" class="pl-2 pr-6 text-gray-600">
            <p>Paste custom code here</p>
            <textarea class="resize focus:outline-none text-sm border-2 p-2 border-blue-100 hover:border-blue-200  block w-full   mt-4"  rows="4"></textarea>

            <div class="flex justify-end"><button class="bg-blue-400 text-white hover:bg-blue-600 rounded-full mt-6 py-2 px-6">save</button></div>
        </div>
    </div>

</x-admin-layout>
