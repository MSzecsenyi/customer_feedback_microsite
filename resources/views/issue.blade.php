<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $companyname }} ekran zgłoszenia usterek</title>
</head>

<body class="w-full h-full bg-no-repeat bg-cover" style="background-image: url({{ asset($image) }})">
    @if(Session::has('msg'))
        <div class="flex justify-center">
            <ul>
                <li>{!! \Session::get('msg') !!}</li>
            </ul>
        </div>
    @endif
    <div class="container items-center px-5 mx-auto opacity-90 lg:px-20">
        <form method="post"
            action="{{ route('store-issue', ['companyId' => $companyname]) }}"
            class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
            @csrf
            <div class="mx-auto">
                <img class="mx-auto my-8 max-w-3/4 lg:max-w-1/3" src={{ $logo }}>
                <h1 class="text-3xl font-bold md:text-center text-cyan-500">{{ $companyname }} ekran zgłoszenia usterek
                </h1>
            </div>
            <div class="relative mt-4">
                <label for="name" class="text-base leading-7">Projekt</label>
                <select required=''
                    class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2">
                    <option value="" class="rounded-lg">{{ $defproject }}</option>
                    @foreach($projects as $project)
                        <option value="{{ $project }}"> {{ $project }} </option>
                    @endforeach
                </select>
            </div>

            <div class="md:space-x-4 md:flex md:justify-between">
                <div class="relative pt-4">
                    <label for="name" class="text-base leading-7">Imię</label>
                    <input type="text" id="name" name="name" placeholder=""
                        class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2"
                        required="">
                </div>
                <div class="relative pt-4">
                    <label for="name" class="text-base leading-7">Nazwisko</label>
                    <input type="text" id="name" name="name" placeholder=""
                        class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2"
                        required="">
                </div>
            </div>

            <div class="relative pt-4">
                <label for="name" class="text-base leading-7">Email</label>
                <input type="text" id="name" name="name" placeholder=""
                    class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2"
                    required="">
            </div>

            <div class="relative pt-4">
                <label for="name" class="text-base leading-7">Lokalizacja usterki</label>
                <input type="text" id="name" name="name" placeholder=""
                    class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2"
                    required="">
            </div>
            <div class="flex flex-wrap mt-4 mb-6 -mx-3">
                <div class="w-full px-3">
                    <label class="text-base leading-7" for="description">Opis usterki</label>
                    <textarea
                        class="w-full h-18 px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform bg-white rounded-lg focus:outline-none focus:border-{{ $color }}-600 focus:ring-2 focus:ring-{{ $color }}-600 apearance-none autoexpand"
                        id="description" type="text" name="description" placeholder="" required=""></textarea>
                </div>
            </div>
            <section class="flex flex-col w-full h-full p-1 overflow-auto">
                <label for="name" class="mb-5 text-base leading-7">Zdjęcie</label>
                <header
                    class="flex flex-col items-center justify-center py-4 text-base transition duration-500 ease-in-out transform bg-white border border-dashed rounded-lg focus:border-{{ $color }}-600 focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2">
                    <p class="flex flex-wrap justify-center text-base leading-7 text-center md:mx-8 md:mb-3">
                        <div class="text-center">Przeciągnij swoje pliki tutaj, lub</div>
                    </p>
                    <button
                        class="w-auto px-2 py-1 my-2 mr-2 transition duration-500 ease-in-out transform border rounded-md hover:text-{{ $color }}Gray-600 text-md focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2 hover:bg-gray-100">
                        Wgraj </button>
                </header>
            </section>
            <div class="flex items-center w-full pt-4 mb-4">
                <button
                    class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-{{ $color }}-600 border-{{ $color }}-600 rounded-md focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2 hover:bg-{{ $color }}-800 ">
                    Następna strona </button>
            </div>
            <hr class="my-4 border-gray-200">
            <div class="text-xs center">
                Powered by: <a target="_blank" href="http://www.bauapp.com" class="text-{{ $color }}-600">bauapp.com</a>
            </div>
    </div>
    </form>
    </div>
</body>

</html>
