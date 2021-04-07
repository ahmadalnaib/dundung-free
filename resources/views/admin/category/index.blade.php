<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Category ') }}
        </h2>
    </x-slot>


    <main class="container mx-auto flex  flex-col md:flex-row max-w-4xl mt-16">
        <div class="w-2/3 md:mr-5 md:mx-0 mx-auto md:w-175 ">
            <div class="bg-white md:sticky md:top-8 border-2 border-blue-100 rounded-xl mt-16">
                <div class="text-center px-6 py-2 pt-6">
                    <h3 class="font-semibold text-base">Add an category</h3>
                </div>
                <form action="{{route('category.store')}}" method="post" class="space-y-4 px-4 py-6">
                    @csrf
                    <div>
                        <input type="text" name="name" class="w-full bg-gray-100 text-sm rounded-xl placeholder-gray-900 px-4 py-2 border-none " placeholder="add Category">
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
        <div class="w-full px-2 md:px-0 md:w-175">

                            <div class="bg-white shadow-md rounded my-6">
                                <table class="text-left w-full border-collapse">

                                    <thead>
                                    <tr>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Categories</th>
                                        <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Actions</th>
                                    </tr>

                                    </thead>
                                    @foreach($categories as $category)
                                    <tbody>
                                    <tr class="hover:bg-grey-lighter">
                                        <td class="py-4 px-6 border-b border-grey-light">{{$category->name}}</td>
                                        <td class="py-4 px-6 border-b border-grey-light">
                                            @can('edit',$category)
                                            <a href="{{route('category.edit',$category)}}" class="text-white font-bold py-1 px-3 rounded text-xs bg-green-500 hover:bg-green-900">Edit</a>
                                            @endcan
                                        </td>
                                        <td class="py-4 px-6 border-b border-grey-light">
                                            @can('delete',$category)
                                            <form action="{{route('category.destroy',$category)}}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button onclick="return confirm('Are you sure you want to delete this category ?')" type="submit" class="text-white font-bold py-1 px-3 rounded text-xs bg-red-500 hover:bg-red-900">Delete</button>
                                            </form>
                                            @endcan
                                        </td>
                                    </tr>



                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
    </main>

</x-app-layout>
