<template>
    <aside
        class="sidebar fixed lg:static w-[240px] bg-indigo-50 h-[calc(100vh-4rem)] lg:h-auto transform -translate-x-full lg:translate-x-0 transition-transform duration-300 z-45 overflow-y-auto p-4">
        <div
            class="bg-white rounded-xl shadow-lg mb-6 p-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <a href="#"
                class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                <span class="material-icons-outlined mr-3">dashboard</span>
                <span>Home</span>
            </a>
            <a href="#"
                class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                <span class="material-icons-outlined mr-3">tune</span>
                <span>Members</span>
            </a>
            <a href="#"
                class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                <span class="material-icons-outlined mr-3">file_copy</span>
                <span>Document Type</span>
            </a>
        </div>


        <div class="bg-white rounded-xl shadow-lg p-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
            <a href="#"
                class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                <span class="material-icons-outlined mr-2">face</span>
                Profile
                <!-- <span class="material-icons-outlined ml-auto">keyboard_arrow_right</span> -->
            </a>
            <a href="#"
                class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                <span class="material-icons-outlined mr-2">settings</span>
                Settings
                <!-- <span class="material-icons-outlined ml-auto">keyboard_arrow_right</span> -->
            </a>
            <a href="#"
                class="flex items-center text-gray-600 hover:text-indigo-800 py-4 transition-all duration-300 hover:translate-x-1">
                <span class="material-icons-outlined mr-2">power_settings_new</span>
                Log out
                <!-- <span class="material-icons-outlined ml-auto">keyboard_arrow_right</span> -->
            </a>
        </div>
    </aside>
</template>