<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Case Details and Investigation Statement') }}
            </h2>
           
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
                                    <td class="border px-4 py-2" width="40px">Case Number:</td>
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
                                    <td class="border px-4 py-2">Native of :</td>
                                    <td class="border px-4 py-2">{{ $case->location ?? '' }}</td>
                                    
                                </tr>
                           

                        </tbody>
                    </table>
                </div>
                    <div class="space-y-4 mx-4 lg:text-lg leading-loose text-justify">
                        <h2 class="flex justify-center">FINDINGS OF INVESTIGATION</h2>
                       
                        {!! nl2br($case->investigation->statement) ?? '' !!}

                        
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
