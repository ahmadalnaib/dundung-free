<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Edit Category ') }}
        </h2>
    </x-slot>


    <main class="container mx-auto flex  flex-col md:flex-row max-w-4xl mt-16">
        <div class="w-full md:mr-5 md:mx-0 mx-auto md:w-175 ">
            <div class="bg-white md:sticky md:top-8 border-2 border-blue-100 rounded-xl mt-16">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an category</h3>
                </div>
                <form action="{{route('category.update',$category)}}" method="post" class="space-y-4 px-4 py-6">
                    @csrf
                    @method('put')
                    <div>
                        <input type="text" name="name" value="{{$category->name}}" class="w-full bg-gray-100 text-sm rounded-xl placeholder-gray-900 px-4 py-2 border-none " placeholder="add Category">
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>


                    <div class="flex items-center justify-center space-x-3">

                        <button type="submit" class="flex text-white items-center justify-center w-1/2 h-11 text-xs bg-blue-500 font-bold rounded-xl border border-blue-400 hover:bg-blue-500 transition duration-150 ease-in px-6 py-3">

                            <span class="ml-1">Submit </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </main>

</x-app-layout>
