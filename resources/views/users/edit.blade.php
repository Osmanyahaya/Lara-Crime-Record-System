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
                <h6 id="ajax-title" class="card-title">Please fill The form Below To Edit record of <strong>{{ $user->name }}</strong></h6><br/>

        <form method="POST" action="{{ route('users.update',$user->id) }}">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />
                <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="name"  type="text" name="name" value="{{$user->name}}" required autofocus />
                
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

               <input  class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full" id="name"  type="text" name="email" value="{{$user->email}}" required  />
            </div>

            <div class="mt-4">
                <x-label for="role" :value="__('Select Role')" />

                <select class="civanoglu-input w-full" name="role_id" id="role_id" data-placeholder="Choose..">
                    <option value=""></option>
                    <option {{ ($user->role_id == 'admin' ? 'selected' : '') }} value="admin">Admin</option>
                     <option {{ ($user->role_id == 'nco' ? 'selected' : '') }} value="nco">NCO</option>
                      <option {{ ($user->role_id == 'cid' ? 'selected' : '') }} value="cid">CID</option>
                    
                   
                </select>
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
