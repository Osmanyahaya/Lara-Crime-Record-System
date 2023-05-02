<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        
        <x-auth-card>
       
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
         <div class="card-header bg-white header-elements-inline">
                <h6 id="ajax-title" class="card-title">Edit Category</h6><br/>

        <form method="POST" action="{{route('categories.update', $cat->id) }}">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Description')" />
                <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="description"  type="text" name="description" value="{{$cat->description}}" required autofocus />
                
            </div>

            <div class="flex items-center justify-end mt-4">
                

                <x-button class="ml-4">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
             
    </div>
</x-app-layout>
