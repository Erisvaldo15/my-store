@extends('template', ['title' => 'Add Product - Admin'])

@section('main-content')

<section class="text-gray-600">
    <div class="container px-3 py-16 mx-auto">
        <div class="lg:w-2/4 w-full mx-auto overflow-auto">
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">
                    Add product 
                </h1>
                @if(session('Register'))
                    <span class="text-green-800"> {{ session('Register') }} </span>
                @endif
            </div>

            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex flex-wrap">
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('name') <small class="text-red-500"> {{ $message }} </small> @enderror
                        </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Price</label>
                            <input type="text" id="price" name="price" value="{{ old('price') }}"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            @error('price') <small class="text-red-500"> {{ $message }} </small> @enderror
                        </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Quantity</label>
                            <input type="number" id="stock" name="quantity" value="{{ old('quantity') }}" 
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('quantity') <small class="text-red-500"> {{ $message }} </small> @enderror
                        </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Image</label>
                            <input type="file" id="cover" name="banner"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                             @error('banner') <small class="text-red-500"> {{ $message }} </small> @enderror
                        </div>
                    </div>

                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Descripiton</label>
                            <textarea id="description" name="description" class="resize-none w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ old('description') }}</textarea>
                            @error('description') <small class="text-red-500"> {{ $message }} </small> @enderror
                        </div>
                    </div>

                    <div class="p-2 w-full">
                        <button type="submit" class="flex ml-auto text-black bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-700 rounded">Add</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>

@endsection