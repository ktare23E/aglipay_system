<template>
    <div class="bg-indigo-50 min-h-screen overflow-x-hidden">
        <div class="overlay fixed inset-0 bg-indigo-900/50 z-40 hidden opacity-0 transition-opacity duration-300"></div>
        <header class="fixed w-full bg-white text-indigo-800 z-50 shadow-lg animate-slide-down">
            <div class="max-w-7xl mx-auto px-4 py-2 flex items-center justify-between h-16">
                <button class="mobile-menu-button p-2 lg:hidden">
                    <span class="material-icons-outlined text-2xl">menu</span>
                </button>
                <div class="text-xl font-bold text-blue-900">
                    Admin<span class="text-indigo-800">Panel</span>
                </div>
                <div class="flex items-center space-x-2">
                    <span class="material-icons-outlined p-2 text-2xl cursor-pointer hover:text-indigo-800 transition-transform duration-300 hover:scale-110 hidden md:block">search</span>
                    <span class="material-icons-outlined p-2 text-2xl cursor-pointer hover:text-indigo-800 transition-transform duration-300 hover:scale-110 hidden md:block">notifications</span>
                    <img class="w-10 h-10 rounded-full transition-transform duration-300 hover:scale-110 object-cover" 
                        src="https://i.pinimg.com/564x/de/0f/3d/de0f3d06d2c6dbf29a888cf78e4c0323.jpg" 
                        alt="Profile">
                </div>
            </div>
        </header>
        <div class="pt-16 max-w-7xl mx-auto flex">
            <Sidebar></Sidebar>

            <main class="flex-1 p-4">
                <div class="flex flex-col lg:flex-row gap-4 mb-6">
                    <div class="flex-1 bg-indigo-100 border border-indigo-200 rounded-xl p-6 animate-fade-in">
                        <h2 class="text-4xl md:text-5xl text-blue-900">
                            Welcome <br><strong>Dashboard</strong>
                        </h2>
                        <span class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-white bg-indigo-800">
                            01:51
                        </span>
                    </div>

                    <div class="flex-1 bg-blue-100 border border-blue-200 rounded-xl p-6 animate-fade-in">
                        <h2 class="text-4xl md:text-5xl text-blue-900">
                            Inbox <br><strong>23</strong>
                        </h2>
                        <a href="#" class="inline-block mt-8 px-8 py-2 rounded-full text-xl font-bold text-white bg-blue-800 hover:bg-blue-900 transition-transform duration-300 hover:scale-105">
                            See messages
                        </a>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="bg-white rounded-xl shadow-lg p-6 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.1s">
                        <h3 class="text-xl font-bold text-indigo-800">Stats Card 1</h3>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.2s">
                        <h3 class="text-xl font-bold text-indigo-800">Stats Card 2</h3>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6 h-64 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl animate-slide-up" style="animation-delay: 0.3s">
                        <h3 class="text-xl font-bold text-indigo-800">Stats Card 3</h3>
                    </div>
                </div>
            </main>
        </div>
    </div>

    
    
    

    

</template>

<script setup>
    import Sidebar from '../../components/Sidebar.vue';
</script>