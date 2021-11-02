<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link href="app.css" rel="stylesheet"> -->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

    <div class="container items-center px-5 py-12 lg:px-20">
        <form class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
          <div class="relative mt-4">
            <label for="name" class="text-base leading-7 text-blueGray-500">Projekt kiválasztása</label>
            <select class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform bg-gray-100 rounded-lg focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
              <option>Waterfront city 2. ütem</option>
              <option>2. projekt</option>
              <option>3. projekt</option>
            </select>
          </div>
          <div class="relative pt-4">
            <label for="name" class="text-base leading-7 text-blueGray-500">Hiba rövid megnevezése</label>
            <input type="text" id="name" name="name" placeholder="name" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform bg-gray-100 rounded-lg focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
          </div>
          <div class="flex flex-wrap mt-4 mb-6 -mx-3">
            <div class="w-full px-3">
              <label class="text-base leading-7 text-blueGray-500" for="description">Hiba leírása</label>
              <textarea class="w-full h-32 px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform bg-white border rounded-lg text-blueGray-500 focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2 apearance-none autoexpand" id="description" type="text" name="description" placeholder="Message..." required=""></textarea>
            </div>
          </div>
          <section class="flex flex-col w-full h-full p-1 overflow-auto">
            <label for="name" class="mb-5 text-base leading-7 text-blueGray-500">Kép beküldése</label>
            <header class="flex flex-col items-center justify-center py-12 text-base transition duration-500 ease-in-out transform bg-white border border-dashed rounded-lg text-blueGray-500 focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
              <p class="flex flex-wrap justify-center mb-3 text-base leading-7 text-blueGray-500">
                <span>Drag and drop your </span><span>files anywhere or</span>
              </p>
              <button class="w-auto px-2 py-1 my-2 mr-2 transition duration-500 ease-in-out transform border rounded-md text-blueGray-500 hover:text-blueGray-600 text-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-gray-100"> Upload a file </button>
            </header>
          </section>
          <div class="flex items-center w-full pt-4 mb-4">
            <button class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Hiba bejelentése </button>
          </div>
          <hr class="my-4 border-gray-200">
          </div>
        </form>
      </div>
</body>
</html>
