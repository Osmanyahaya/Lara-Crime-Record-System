<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Cases') }}
            </h2>
            @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('nco'))
            <a href="{{route('cases.create')}}"
                class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Add New Case
            </a>
            @endif
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
                                <th class="border px-4 py-4">Name of Complainant</th>
                                <th class="border px-4 py-4">Category</th>
                                <th class="border px-4 py-4">Time/Date</th>
                                <th class="border px-4 py-4">NCO</th>
                                <th class="border px-4 py-4">CID</th>
                                <th class="border px-4 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cases as $case)
                                <tr class="">
                                    <td class="border px-4 py-2">{{ $case->complainant_name }}</td>
                                    <td class="border px-4 py-2">{{ $case->category->description ?? 'Tamale' }}</td>

                                    <td class="border px-4 py-2">{{ $case->created_at }}</td>
                                     <td class="border px-4 py-2">{{ $case->user->name ?? '' }}</td>
                                      <td class="border px-4 py-2">{{$case->investigation->cid_name ?? 'Not Assign' }}</td>
                                    <td class="border px-4 py-2">
                                        <div class="flex items-center justify-center">
                                             @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('nco'))
                                            <a href="" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-blue-700 text-white px-3 py-2 text-sm rounded-md">Edit</a>
                                            @endif
                                            <a href="{{ route('cases.show',$case->id) }}" class="mx-1 hover:bg-black hover:text-white duration-200 leading-none bg-green-700 text-white px-3 py-2 text-sm rounded-md">View</a>
                                             @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('cid'))
                                             <a href="{{ route('investigations.create', $case->id) }}" class="mx-1 bg-green-500 hover:bg-black hover:text-white duration-200 leading-none bg-ping-700 text-white px-3 py-2 text-sm rounded-md">Inve...</a>
                                             @endif

                                              @if(Auth::user()->hasRole('admin'))
                                            <form action="" method="POST" onsubmit="return confirm('Are you sure you want to delete Case?')">
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
                                    <td colspan="4">No Case Found!</td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>

                    <div class="px-4 pb-4">
                       {{ $cases->links() }} 
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
