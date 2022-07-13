@extends('template', ['title' => 'My Store'])

@section('main-content')
    <section class="text-gray-600">
        @if ($products->count())
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-wrap -m-4">
                    @foreach ($products as $product)
                        <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                            <a class="block relative h-48 rounded overflow-hidden">
                                <img alt="ecommerce" class="object-contain object-center w-full h-full block"
                                    src="{{ Storage::url($product->banner) }}">
                            </a>
                            <div class="mt-4">
                                <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
                                <p class="mt-1">{{ $product->price }}</p>
                            </div>
                            <a href="{{ route('product', Str::slug($product->name, '-')) }}"
                                class="mt-3 text-yellow-600 inline-flex items-center"> Ver mais
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    @endforeach
            </div>
        </div>
        @else
        <div class="flex justify-center p-10"> 
           <span class="text-red-600 font-bold"> No product for sale  </span> 
        </div>
     @endif
    </section>
@endsection
