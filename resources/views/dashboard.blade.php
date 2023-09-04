<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    @role("writer")
    <p class="dark:text-gray-100">es un escritor</p>
    @endrole

    @can('edit articles')
    <p class="dark:text-gray-100">Puedo editar articulos</p>

    @endcan

    @php
    // Obtener los nombres de los roles del usuario
    $user = Auth::user();
    $userRoles = $user->getRoleNames();

@endphp

@if($userRoles->isNotEmpty())
    {{-- El usuario tiene uno o más roles --}}
    <p class="dark:text-gray-100">Roles del usuario: {{ implode(', ', $userRoles->toArray()) }}</p>

@else
    {{-- El usuario no tiene roles --}}
    <p class="dark:text-gray-100">El usuario no tiene roles asignados.</p>
@endif

</x-app-layout>
