<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Categories') }}
            </h2>
            @if(Auth::user()->hasRole('admin'))
            <a href="{{route('categories.create')}}"
                class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-blue-500 hover:bg-black">Add Category Case
            </a>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <table class="w-full table-auto mb-4">
                        <thead class="bg-blue-700 text-white">
                            <tr>
                                <th class="border px-4 py-4">S/N</th>
                                <th class="border px-4 py-4">Desription</th>
                                <th class="border px-4 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=1;  @endphp
                            @forelse ($categories as $cat)
                                 @php $i+=1;  @endphp
                                <tr class="">
                                    <td class="border px-4 py-2">{{ $i }}</td>
                                    <td class="border px-4 py-2">{{ $cat->description }}</td>
                                    
                                    <td class="border px-4 py-2">
                                        <div class="flex items-center justify-center">
                                             @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('nco'))
                                            <a href="{{route('categories.edit',$cat->id)}}" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-blue-700 text-white px-3 py-2 text-sm rounded-md">Edit</a>
                                            @endif 

                                              @if(Auth::user()->hasRole('admin'))
                                            <form action="{{route('categories.destroy',$cat->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete Category?')">
                                                @csrf
                                                @method('DELETE')
                                                <button class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-red-700 text-white px-3 py-2 text-sm rounded-md">Delete</button>
                                            </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr class="text-center">
                                    <td colspan="4">No Categories Found!</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                    
                </div>
            </div>
        </div>
    </div>
    <x-footer/>
</x-app-layout>
