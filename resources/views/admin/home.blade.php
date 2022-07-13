@extends('template', ['title' => 'My Store - Admin'])

@section('main-content')
    <section class="text-gray-600">
        <div class="container px-5 py-24 mx-auto">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
                <div class="flex items-center justify-between mb-2">
                    <h1 class="text-2xl font-medium title-font mb-2 text-gray-900">Products</h1>
                    @if(session('Delete'))
                        <span class="text-red-600"> {{ session('Delete') }} </span>
                    @endif
                    <a href="{{ route('admin.create') }}"
                        class="flex ml-auto text-black bg-yellow-500 border-0 py-1.5 px-3 text-sm focus:outline-none hover:bg-yellow-700 hover:text-white rounded">
                        Add
                    </a>
                </div>
                <table class="table-auto w-full text-left whitespace-no-wrap">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Id
                            </th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100"
                                style="width: 150px">Banner</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                Name</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                Price</th>
                            <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">
                                Quantity</th>
                            <th
                                class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 text-center">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y">
                        @if ($products->toArray()['total'])
                            @foreach ($products as $product)
                                <tr @if ($loop->even) class="bg-yellow-100" @endif>
                                    <td class="px-4 py-3">{{ $product->id }}</td>
                                    <td class="px-4 py-3">
                                        <img alt="ecommerce" class="object-contain object-center w-full h-full block"
                                            src="{{ Storage::url($product->banner) }}">
                                    </td>
                                    <td class="px-4 py-3">{{ $product->name }}</td>
                                    <td class="px-4 py-3">R$ {{ $product->price }} </td>
                                    <td class="px-4 py-3"> {{ $product->quantity }}</td>
                                    <td class="flex items-baseline px-4 py-3 text-sm text-right space-x-3 text-gray-900">
                                        <a href="{{ route('admin.edit', $product->id) }}"
                                            class="mt-3 text-indigo-500 inline-flex items-center cursor-pointer">Editar
                                            |</a>
                                        <button type="submit" id="button-delete" class="text-red-600"> Delete </button>
                                    </td>
                                </tr>
                                @include('components.modal-delete', ['product' => $product->id])
                            @endforeach
                        @else
                            <td>
                                <span class="text-gray-900 font-bold"> No product exist </span>
                            </td>
                        @endif
                    </tbody>
                </table>
                {{ $products->links() }}
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
