@extends('template', ['title' => 'Edit Product - Admin'])

@section('main-content')

<section class="text-gray-600">
    <div class="container px-5 py-16 mx-auto">
        <div class="lg:w-2/4 w-full mx-auto overflow-auto">
            <div class="flex items-center justify-between mb-2">
                <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Editar produto</h1>
                @if(session('Update'))
                    <span class="text-green-800"> {{ session('Update') }} </span>
                @endif
            </div>

            <form action="{{ route('admin.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="flex flex-wrap">
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Nome do produto</label>
                            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('name') <small class="text-red-500"> {{ $message }} </small> @enderror
                        </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Preço</label>
                            <input type="text" id="price" name="price" value="{{ old('price', $product->price) }}"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            @error('price') <small class="text-red-500"> {{ $message }} </small> @enderror
                        </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Estoque</label>
                            <input type="number" id="stock" name="quantity" value="{{ old('quantity', $product->quantity) }}" 
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @error('quantity') <small class="text-red-500"> {{ $message }} </small> @enderror
                         </div>
                    </div>

                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Imagem de capa</label>
                            <input type="file" id="cover" name="banner" value="{{ old('banner', $product->banner) }}"
                                   class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                            @error('banner') <small class="text-red-500"> {{ $message }} </small> @enderror
                        </div>
                    </div>

                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Descrição</label>
                            <textarea id="description" name="description" 
                            class="resize-none w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-yellow-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ old('description', $product->description) }} </textarea>
                            @error('description') <small class="text-red-500"> {{ $message }} </small> @enderror
                        </div>
                    </div>

                    <div class="p-2 w-full">
                        <button type="submit" class="flex ml-auto text-black bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-700 rounded">Atualizar produto</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>

@endsection