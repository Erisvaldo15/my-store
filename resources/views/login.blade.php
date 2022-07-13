@extends('template', ['title' => 'My Store - Login'])

@section('main-content')
    <section class="flex justify-center flex-wrap p-10">
        <form action="{{ route('login.store') }}" method="POST" class="w-full max-w-sm">
            @csrf
            <div class="flex items-center">
                <h2 class="p-5 bg-red font-bold text-lg"> Login - Admin </h2>
                @if(session('Logout'))
                    <span class="text-green-800"> {{ session('Logout') }} </span>
                @endif
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                        Email
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input name="email" id="inline-full-name" placeholder="Write your email" type="email" value="{{ old('email') }}"
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 
                        px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-700">
                    @error('email') <small class="text-red-600"> {{ $message }} </small> @enderror
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-password">
                        Password
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input id="password" name="password" id="inline-password" type="password" placeholder="Write your password" value="{{ old('password') }}"
                        class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 
                        px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-yellow-700">
                    @error('password') <small class="text-red-600">  {{ $message }} </small> @enderror
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3"></div>
                <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="form-check-input h-4 w-4 border border-yellow-800 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" id="checkInputPassword">
                    <span class="text-sm">
                        Show password 
                    </span>
                </label>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3"></div>
                <div class="md:w-2/3">
                    <button
                        class="shadow bg-yellow-400 hover:bg-yellow-700 focus:shadow-outline focus:outline-none text-dark font-bold py-2 px-4 rounded"
                        type="submit">
                        Sign In
                    </button>
                </div>
            </div>
        </form>

    </section>
@endsection

@section('scripts')

    <script src="{{ asset('js/app.js') }}"></script>

@endsection


