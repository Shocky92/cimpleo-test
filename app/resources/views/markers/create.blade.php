<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('markers-store') }}">
                        {{ csrf_field() }}

                        <input type="text" placeholder="mobile" name="mobile">

                        <input type="text" placeholder="description" name="description">

                        <input type="text" placeholder="coordinates" name="coordinates">

                        <input type="submit" value="Create">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
