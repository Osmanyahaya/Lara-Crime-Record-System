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
                 <h2>   Welcome, {{Auth:: user()->name}}. You logged in as NCO! </h2>

                  <h3>Click on the View Cases above to view cases and Also Add Case to add a new case  as NCO Officer</h3>
                </div>
            </div>
        </div>
    </div>

    <x-footer/>
</x-app-layout>
