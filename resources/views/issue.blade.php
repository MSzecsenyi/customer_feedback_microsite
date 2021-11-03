<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container items-center px-5 py-12 mx-auto lg:px-20">
        <form class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
        <div class="mx-auto">
            <img class="mx-auto max-w-3/4 lg:max-w-1/3" src={{ $image }}>
            <h1 class="text-3xl font-bold text-cyan-500">{{ $companyname }} hibabejelentő</h1>
        </div>
        <div class="relative mt-4">
            <label for="name" class="text-base leading-7 text-{{ $color }}Gray-500">Projekt kiválasztása</label>
            <select class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2">
              <option value="" class="rounded-lg">Válassza ki a projektet</option>
              <option value="1">1. projekt</option>
              <option value="2">2. projekt</option>
              <option value="3">3. projekt</option>
            </select>
          </div>



          <div class="relative pt-4">
            <label for="name" class="text-base leading-7 text-{{ $color }}Gray-500">Hiba rövid megnevezése</label>
            <input type="text" id="name" name="name" placeholder="" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2" required="">
          </div>



          <div class="flex flex-wrap mt-4 mb-6 -mx-3">
            <div class="w-full px-3">
              <label class="text-base leading-7 text-{{ $color }}Gray-500" for="description">Hiba leírása</label>
              <textarea class="w-full h-32 px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform bg-white rounded-lg text-{{ $color }}Gray-500 focus:outline-none focus:border-{{ $color }}-600 focus:ring-2 focus:ring-{{ $color }}-600 apearance-none autoexpand" id="description" type="text" name="description" placeholder="" required=""></textarea>
            </div>
          </div>



          <section class="flex flex-col w-full h-full p-1 overflow-auto">
            <label for="name" class="mb-5 text-base leading-7 text-{{ $color }}Gray-500">Kép beküldése</label>
            <header class="flex flex-col items-center justify-center py-12 text-base transition duration-500 ease-in-out transform bg-white border border-dashed rounded-lg text-{{ $color }}Gray-500 focus:border-{{ $color }}-600 focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2">
              <p class="flex flex-wrap justify-center mx-8 mb-3 text-base leading-7 text-{{ $color }}Gray-500">
                <span>Hozzáadáshoz húzza ide az állományokat, vagy</span>
              </p>
              <button class="w-auto px-2 py-1 my-2 mr-2 transition duration-500 ease-in-out transform border rounded-md text-{{ $color }}Gray-500 hover:text-{{ $color }}Gray-600 text-md focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2 hover:bg-gray-100"> Fájl feltöltése </button>
            </header>
          </section>
          <div class="flex items-center w-full pt-4 mb-4">
            <button class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-{{ $color }}-600 border-{{ $color }}-600 rounded-md focus:outline-none focus:ring-2 focus:ring-{{ $color }}-600 ring-offset-2 hover:bg-{{ $color }}-800 "> Hiba bejelentése </button>
          </div>
          <hr class="my-4 border-gray-200">
          <div class="text-xs center">
              Powered by: <a href="bauapp.com" class="text-{{ $color }}-600">bauapp.com</a>
          </div>
          </div>
        </form>
      </div>
</body>
</html>
