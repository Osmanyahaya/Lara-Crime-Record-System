<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">

           
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Investigation Statement')  }} of case number ({{$case->id}}), Reported by {{$case->complainant_name}} on {{$case->created_at}}
            </h2>
            <a href=""
                class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Back</a>
        </div>
    </x-slot>
   

   

    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="m-4">
                    <form action="{{route('investigations.store',$case->investigation->id)}}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data">
                        @csrf
                        

                       <input type="hidden" name="id" value="{{$case->investigation->id}}">


                        <div class="flex -mx-4 mb-6">
                            <div class="flex-0 px-4">
                                <label class="civanoglu-label" for="status">Status <span class="required-text">*</span></label>
                                <select class="civanoglu-input w-full" name="status" id="status">
                                    <option value="">Select Status</option>
                                    <option {{ ($case->investigation->status  == 'Completed' ? 'selected' : '') }} value="Completed">Completed</option>
                                    <option {{ ($case->investigation->status   == 'Ongoing' ? 'selected' : '') }} value="Ongoing">Ongoing</option>
                                   
                                    

                                </select>

                                @error('status')
                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex-1 px-4 col-span-2">

                                <label class="civanoglu-label" for="statement">Satement <span class="required-text">*</span></label>
                                 <x-trix-field id="statement" name="statement" value="{{$case->investigation->statement}}" />

                                  
                                

                                @error('statement')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            


                            
                            
                        </div>


                        <button  class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500">Save</button>
                    </form>
                </div>
            </div>
        </div>

        
    </div>
</x-app-layout>
