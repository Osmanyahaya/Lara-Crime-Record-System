<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight inline-block">
                {{ __('Assign Case') }}
            </h2>
            <a href=""
                class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="m-4">
                    <form action="{{route('assign.store',$case )}}" method="post" class="p-6 bg-white border-b border-gray-200" enctype="multipart/form-data">
                        @csrf
                     

                       <div class="flex gap-4 -mx-4 mb-6">
                          <div class="flex -mx-4 mb-6">
                        <input type="hidden" name="case_table_id" value="{{$case}}">
                         @error('case_table_id')
                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror

                        </div>
                        <div class="flex -mx-4 mb-6">
                            <div class="flex-0 px-4">
                                <label class="civanoglu-label" for="user_id">Staff <span class="required-text">*</span></label>
                                <select class="civanoglu-input w-full" name="user_id" id="user_id" required>
                                    <option value="">Select location</option>
                                    @foreach($users as $user)
                                        <option {{old('user_id')==$user->id ? 'selected="selected"' : ''}} value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>

                                @error('user_id')
                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                @enderror
                            </div>
                            

                         </div>
                        </div>


                        <button  class="px-4 py-2 hover:text-white text-white rounded-md text-base bg-gradient-to-r from-green-400 to-blue-500">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-footer/>
</x-app-layout>
