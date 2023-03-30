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
                    <h2 class="font-bold text-2xl px-3 mb-6 bg-gradient-to-r inline-block from-purple-500 to-blue-500 bg-clip-text text-transparent">Admin Menu</h2>
                    <div class="grid grid-cols-3 gap-5">

                        <a href="{{ route('case.index') }}" class="dashboard-card">
                            <i class="fa fa-map-signs"></i>
                            <h2 class="font-bold text-xl uppercase">View Cases</h2>
                           
                        </a>
                        <a href="" class="dashboard-card">
                            <i class="fa fa-location-arrow"></i>
                            <h2 class="font-bold text-xl uppercase">View Staff</h2>
                            
                        </a>
                       

                        <a href="" class="dashboard-card">
                            <i class="fa fa-users"></i>
                            <h2 class="font-bold text-xl uppercase">Add Staff</h2>
                           
                        </a>

                        
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
