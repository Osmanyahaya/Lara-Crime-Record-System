<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Case Details') }}
            </h2>
            <a href="{{route('investigations.show',$case->id) }}"
                class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">View Investigation Statement</a>

         @if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('nco') )
            <a href="/investigation/{{$case->id }}"
                class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Assign Case to CID Officer
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
                    <div class="">
                    <table class="w-full table-auto mb-4">
                        <thead class="bg-green-500 text-white">
                            <tr>
                                <th colspan="2" class="border px-4 text-xl py-4">Complainant Details</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>
                                    <td class="border px-4 py-2">Case Number:</td>
                                    <td class="border px-4 py-2">{{ $case->id ?? 'Tamale' }}</td>
                                    
                                </tr>
                                 <tr>
                                    <td class="border px-4 py-2">Complainant Name:</td>
                                    <td class="border px-4 py-2">{{ $case->complaint_name ?? 'Tamale' }}</td>
                                    
                                </tr>
                                 <tr>
                                    <td class="border px-4 py-2">Complainant Gender:</td>
                                    <td class="border px-4 py-2">{{ $case->complainant_gender ?? '' }}</td>
                                    
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Complainant Age:</td>
                                    <td class="border px-4 py-2">{{ $case->complainant_age ?? '' }}</td>
                                    
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Complainant Tel:</td>
                                    <td class="border px-4 py-2">{{ $case->complainant_tel ?? '' }}</td>
                                    
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Occupation:</td>
                                    <td class="border px-4 py-2">{{ $case->complainant_occupation?? '' }}</td>
                                    
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Region:</td>
                                    <td class="border px-4 py-2">{{ $case->region ?? '' }}</td>
                                    
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">District:</td>
                                    <td class="border px-4 py-2">{{ $case->district ?? '' }}</td>
                                    
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Address:</td>
                                    <td class="border px-4 py-2">{{ $case->address?? '' }}</td>
                                    
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Location:</td>
                                    <td class="border px-4 py-2">{{ $case->location ?? '' }}</td>
                                    
                                </tr>
                           

                        </tbody>
                    </table>
                </div>
                    <div>
                        <table class="w-full table-auto mb-4">
                        <thead class="bg-green-500 text-white">
                            <tr>
                                <th colspan="2" class="border px-4 py-4 text-xl">Case Details<th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>
                                    <td class="border px-4 py-2">Category:</td>
                                    <td class="border px-4 py-2">{{ $case->category->description?? 'Tamale' }}</td>
                                    
                                </tr>
                                 <tr>
                                    <td class="border px-4 py-2">Diary of Action:</td>
                                    <td class="border px-4 py-2">{{ $case->diary_of_action ?? '' }}</td>
                                    
                                </tr>
                                 <tr>
                                    <td class="border px-4 py-2">Time Reported:</td>
                                    <td class="border px-4 py-2">{{ $case->created_at ?? '' }}</td>
                                    
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">NCO:</td>
                                    <td class="border px-4 py-2">{{ $case->user->name ?? '' }}</td>
                                    
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">CID:</td>
                                    <td class="border px-4 py-2">{{ $case->investigation->cid_name ?? 'Not Assign' }}</td>
                                    
                                </tr>
                                <tr>
                                    <td class="border px-4 py-2">Status:</td>
                                    <td class="border px-4 py-2">{{ $case->investigation->status?? 'No content yet' }}</td>
                                    
                                </tr>
                                
                           

                        </tbody>
                    </table>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
    <x-footer/>
</x-app-layout>
