<x-guest-layout>
<section class="relative bg-cover bg-center h-screen" style="background-image: url('path_to_your_image.jpg');">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative container mx-auto flex flex-col items-center justify-center h-full text-center text-white">
        <h1 class="text-4xl sm:text-6xl font-bold">¡Con Green Points todos ganamos!</h1>
        <p class="mt-4 text-lg sm:text-2xl">Entre más greenpoints tengas lo podrás cambiar por recompensas asombrosas.</p>
        <a href="#" class="mt-8 px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-bold rounded-full">Quiero unirme</a>
    </div>
</section>
<section class="py-16 bg-white">
    <div class="container mx-auto text-center">
        <h2 class="text-3xl font-bold">Tareas</h2>
        <p class="mt-4 text-gray-600">Entre más tareas completes recibirás más greenpoints</p>
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
            <!-- Tarjeta de tarea -->
            <div class="bg-green-100 p-6 rounded-lg shadow-lg">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-clock text-4xl text-green-600"></i>
                </div>
                <h3 class="text-xl font-bold">100</h3>
                <p class="text-gray-600 mt-2">Body text</p>
            </div>
            <!-- Repite la estructura para más tarjetas -->
            <div class="bg-green-100 p-6 rounded-lg shadow-lg">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-clock text-4xl text-green-600"></i>
                </div>
                <h3 class="text-xl font-bold">100</h3>
                <p class="text-gray-600 mt-2">Body text</p>
            </div>
            <div class="bg-green-100 p-6 rounded-lg shadow-lg">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-clock text-4xl text-green-600"></i>
                </div>
                <h3 class="text-xl font-bold">100</h3>
                <p class="text-gray-600 mt-2">Body text</p>
            </div>
            <div class="bg-green-100 p-6 rounded-lg shadow-lg">
                <div class="flex items-center justify-center mb-4">
                    <i class="fas fa-clock text-4xl text-green-600"></i>
                </div>
                <h3 class="text-xl font-bold">100</h3>
                <p class="text-gray-600 mt-2">Body text</p>
            </div>
        </div>
    </div>
</section>
<div class="text-center mt-10">
    <a href="#" class="px-8 py-4 bg-green-600 hover:bg-green-700 text-white font-bold rounded-full">QUIERO SABER MÁS</a>
</div>
</x-guest-layout>