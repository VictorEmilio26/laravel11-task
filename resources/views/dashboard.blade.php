<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
            
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- create a h1 with welcome message -->
                    <h1 class="text-3xl font-bold">Bienvenido al gestor de Tareas</h1>
                    @foreach ( $tasks as $task )
                    
                    <p class="text-lg mt-4 text-purple-800">
                        {{$task->title}}
                    </p>
                    <p class="text-lg mt-4 text-gray-700">
                        {{$task->description}}
                    </p>
                    @endforeach

                    

                

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
