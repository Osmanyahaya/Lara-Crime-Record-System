<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Case Details and Investigation Statement') }}
            </h2>
           
        </div>
    </x-slot>


    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <div class="">
                    <table class="w-full table-auto mb-4">
                        <thead class="bg-blue-700 text-white">
                            <tr>
                                <th  class="border px-4 text-xl py-4">Case Number: {{ $case->reference ?? 'Tamale' }} </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                                    <td colspan="4" class="border px-4 py-2"><h4>Complainant Personal Info...</h4></td>
                                   </td>
                                    
                                </tr>
                                 <tr>
                                    <td class="border px-4 py-2"><h5>Complainant Name:</h5></td>
                                    <td class="border px-4 py-2"><strong>{{ $case->complainant_name ?? 'Tamale' }}</strong></td>

                                     <td class="border px-4 py-2">Complainanat Age:</td>
                                    <td class="border px-4 py-2">{{ $case->complainant_age ?? 'Tamale' }}</td>
                                    
                                </tr>
                               
                                 <tr>
                                    <td class="border px-4 py-2">Occupation:</td>
                                    <td class="border px-4 py-2">{{ $case->complainant_occupation?? '' }}</td>

                                    <td class="border px-4 py-2">Telephone :</td>
                                    <td class="border px-4 py-2">{{ $case->complainant_tel?? '' }}</td>
                                    
                                </tr>
                                 <tr>
                                    <td colspan="4" class="border px-4 py-2">Complainant Address/Location...</td>
                                   </td>
                                    
                                </tr>
                                 <tr>
                                    <td class="border px-4 py-2">Email Address:</td>
                                    <td class="border px-4 py-2">{{ $case->email?? '' }}</td>
                                    
                              
                                    <td class="border px-4 py-2">Location:</td>
                                    <td class="border px-4 py-2">{{ $case->location ?? '' }}</td>
                                    
                                </tr>
                                 <tr>
                                    <td class="border px-4 py-2">Redential Address:</td>
                                    <td class="border px-4 py-2">{{ $case->address?? '' }}</td>
                                    
                              
                                    <td class="border px-4 py-2">Digital Address:</td>
                                    <td class="border px-4 py-2">{{ $case->dig_address ?? '' }}</td>
                                    
                                </tr>

                                 <tr>
                                    <td class="border px-4 py-2">Region:</td>
                                    <td class="border px-4 py-2">{{ $case->region ?? '' }}</td>
                                    
                                    <td class="border px-4 py-2">District:</td>
                                    <td class="border px-4 py-2">{{ $case->district ?? '' }}</td>
                                    
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
    <x-footer/>
</x-app-layout>
