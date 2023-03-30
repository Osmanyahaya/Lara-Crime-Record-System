<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Add New Properties') }}
            </h2>
            <a href=""
                class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="m-4">
                    <form action="{{route('cases.store')}}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data">
                        @csrf
                        <div class="flex gap-4 -mx-4 mb-6">
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="name">Name of Complainant <span class="required-text">*</span></label><br>
                                <input class="civanoglu-input w-full" type="text" id="name" name="complainant_name" value="{{old('complainant_name')}}" required>

                                @error('complainant_name')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="name_tr">Phone Number <span class="required-text">*</span></label><br>
                                <input class="civanoglu-input w-full" type="text" id="name_tr" name="complainant_tel" value="{{old('complainant_tel')}}" required>

                                @error('complainant__tel')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="address">Address <span class="required-text">*</span></label><br>
                                <input class="civanoglu-input w-full" type="text" id="name_tr" name="address" value="{{old('address')}}" required>

                                @error('address')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                             
                        </div>

                        <div class="flex -mx-4 mb-6">
                            
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="name">Complainant Occupation <span class="required-text">*</span></label><br>
                                <input class="civanoglu-input w-full" type="text" id="name" name="complainant_occupation" value="{{old('complainant_occupation')}}" required>

                                @error('complainant_occupation')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="age">Age <span class="required-text">*</span></label><br>
                                <input class="civanoglu-input w-full" type="text" id="name_tr" name="complainant_age" value="{{old('complainant_age')}}" required>

                                @error('complainant_age')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="age">Gender <span class="required-text">*</span></label><br>
                                <select class="civanoglu-input w-full select" name="complainant_gender" required>
                                   <option>Select Gender--</option>
                               <option value="male">Male</option>
                               <option value="female">Female</option>  
                                </select >
                              

                                @error('complainant_gender')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            
                        </div>

                            <div class="flex -mx-4 mb-6">
                            
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="age">Region <span class="required-text">*</span></label><br>
                                <script type="text/javascript" src="{{ asset('js/regions.js') }}"></script>
                                    <select  onchange="print_state('state',this.selectedIndex);" id="country" class="civanoglu-input w-full select" name ="region"></select>

                                @error('region')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="age">District <span class="required-text">*</span></label><br>
                                <select class="civanoglu-input w-full select" name ="district" id ="state"></select>
                                <script language="javascript">print_country("country");</script>

                                @error('district')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex-1 px-4">
                                <label class="civanoglu-label" for="age">Location <span class="required-text">*</span></label><br>
                                <input class="civanoglu-input w-full" type="text" id="location" name="location" value="{{old('location')}}" required>

                                @error('location')
                                    <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                        </div>

                       


                        <div class="flex -mx-4 mb-6">
                            <div class="flex-0 px-4">
                                <label class="civanoglu-label" for="location_id">Category <span class="required-text">*</span></label>
                                <select class="civanoglu-input w-full" name="category_id" id="category_id" required>
                                    <option value="">Select location</option>
                                    @foreach($categories as $cat)
                                        <option {{old('category_id')==$cat->id ? 'selected="selected"' : ''}} value="{{$cat->id}}">{{$cat->description}}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="flex-1 px-4 col-span-2">
                                <label class="civanoglu-label" for="diary-of-action">Diary of Action <span class="required-text">*</span></label>
                                <textarea class="civanoglu-input w-full" name="diary_of_action" id="diary-of-action" cols="30" rows="3" required>{{old('diary_of_action')}}</textarea>

                                @error('diary_of_action')
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
