<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Staff') }}
            </h2>
            <a href="/register"
                class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Add New Staff</a>
        </div>
    </x-slot>


    @if (session('message'))
        <div id="notice" class="text-center bg-green-100 text-green-700 p-3">{{ session('message') }}</div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <table class="w-full table-auto mb-4">
                        <thead class="bg-blue-700 text-white">
                            <tr>
                                <th class="border px-4 py-4">Name</th>
                                <th class="border px-4 py-4">Email</th>
                                <th class="border px-4 py-4">Role</th>
                                <th class="border px-4 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr class="">
                                    <td class="border px-4 py-2">{{ $user->name }}</td>
                                    <td class="border px-4 py-2">{{ $user->email?? '' }}</td>

                                    <td class="border px-4 py-2">{{ $user->role_id }}</td>
                                    
                                    <td class="border px-4 py-2">
                                        <div class="flex items-center justify-center">
                                            <a href="" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-blue-700 text-white px-3 py-2 text-sm rounded-md">Edit</a>
                                            
                                             
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete user?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-red-700 text-white px-3 py-2 text-sm rounded-md">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="4">No User Found!</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                    <div class="px-4 pb-4">
                       {{ $users->links() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
