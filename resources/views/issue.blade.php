<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.css"
        integrity="sha512-+Vla3mZvC+lQdBu1SKhXLCbzoNCl0hQ8GtCK8+4gOJS/PN9TTn0AO6SxlpX8p+5Zoumf1vXFyMlhpQtVD5+eSw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $data->company_name }} {{ __('issue.title') }}</title>
</head>

<body class="w-full h-full bg-no-repeat bg-cover" style="background-image: url({{ asset($background) }})">
    @if(Session::has('msg'))
        <div class="flex justify-center">
            <ul>
                <li>{!! \Session::get('msg') !!}</li>
            </ul>
        </div>
    @endif
    <div class="container items-center px-5 mx-auto opacity-90 lg:px-20">
        <div
            class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
            <form method="post" enctype="multipart/form-data"
                action="{{ route('store-issue', ['companyId' => $data->id]) }}">
                @csrf
                <input type="hidden" name="company_id" value="{{ $data->id }}" />
                <div class="mx-auto">
                    <img class="mx-auto my-8 max-w-3/4 lg:max-w-1/3" src={{ $data->logo }}>
                    <h1 class="text-3xl font-bold md:text-center text-cyan-500">{{ $data->company_name }}
                        {{ __('issue.title') }}
                    </h1>
                </div>
                <div class="relative mt-4">
                    <label for="project" class="text-base leading-7">Projekt</label>
                    <select required='' name='project' id='project'
                        class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $data->color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $data->color }}-600 ring-offset-2">
                        @if( $selected_project == null )
                            <option class="rounded-lg">
                                {{ __('issue.choose_project') }}
                            </option>
                            @foreach($data->projects as $project)
                                <option value="{{ $project->id }}"> {{ $project->project_name }} </option>
                            @endforeach
                        @else
                            <option value="{{ $selected_project['id'] }}" class="rounded-lg">
                                {{ $selected_project['name'] }}
                            </option>
                            @foreach($data->projects as $project)
                                <option value="{{ $project->id }}"> {{ $project->project_name }} </option>
                            @endforeach
                        @endif
                    </select>
                </div>

                <div class="md:space-x-4 md:flex md:justify-between">
                    <div class="relative pt-4">
                        <label for="first_name"
                            class="text-base leading-7">{{ __('issue.first_name') }}</label>
                        <input type="text" id="first_name" name="first_name" placeholder=""
                            class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $data->color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $data->color }}-600 ring-offset-2"
                            required="" value="{{ old('first_name') }}">
                    </div>
                    @error('first_name')
                        <div class="text-red-700">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="relative pt-4">
                        <label for="last_name"
                            class="text-base leading-7">{{ __('issue.last_name') }}</label>
                        <input type="text" id="last_name" name="last_name" placeholder=""
                            class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $data->color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $data->color }}-600 ring-offset-2"
                            required="" value="{{ old('last_name') }}">
                    </div>
                </div>
                @error('last_name')
                    <div class="text-red-700">
                        {{ $message }}
                    </div>
                @enderror

                <div class="relative pt-4">
                    <label for="email" class="text-base leading-7">{{ __('issue.email') }}</label>
                    <input type="text" id="email" name="email" placeholder=""
                        class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $data->color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $data->color }}-600 ring-offset-2"
                        required="" value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="text-red-700">
                        {{ $message }}
                    </div>
                @enderror

                <div class="relative pt-4">
                    <label for="location"
                        class="text-base leading-7">{{ __('issue.location') }}</label>
                    <input type="text" id="location" name="location" placeholder=""
                        class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg focus:border-{{ $data->color }}-500 focus:bg-white focus:outline-none focus:ring-2 focus:ring-{{ $data->color }}-600 ring-offset-2"
                        required="" value="{{ old('location') }}">
                </div>
                @error('location')
                    <div class="text-red-700">
                        {{ $message }}
                    </div>
                @enderror

                <div class="flex flex-wrap mt-4 mb-6 -mx-3">
                    <div class="w-full px-3">
                        <label class="text-base leading-7"
                            for="description">{{ __('issue.description') }}</label>
                        <textarea
                            class="w-full h-18 px-4 py-2 mt-2 text-base transition duration-500 ease-in-out transform bg-white rounded-lg focus:outline-none focus:border-{{ $data->color }}-600 focus:ring-2 focus:ring-{{ $data->color }}-600 apearance-none autoexpand"
                            id="description" type="text" name="description" placeholder=""
                            required="">{{ old('description') }}</textarea>
                    </div>
                </div>
                @error('description')
                    <div class="text-red-700">
                        {{ $message }}
                    </div>
                @enderror
                <section class="flex flex-col w-full h-full p-1 overflow-auto">
                    <label for="file" class="mb-5 text-base leading-7">{{ __('issue.photo') }}</label>
                    <div class="dropzone flex flex-col items-center justify-center py-4 text-base transition duration-500 ease-in-out transform bg-white border border-dashed rounded-lg focus:border-{{ $data->color }}-600 focus:outline-none focus:ring-2 focus:ring-{{ $data->color }}-600 ring-offset-2"
                        id="myDropzone">
                        <p class="flex flex-wrap justify-center text-base leading-7 text-center md:mx-8 md:mb-3">
                            <div class="text-center">{{ __('issue.drag_n_drop') }}</div>
                        </p>
                        <button
                            class="w-auto px-2 py-1 my-2 mr-2 transition duration-500 ease-in-out transform border rounded-md hover:text-{{ $data->color }}Gray-600 text-md focus:outline-none focus:ring-2 focus:ring-{{ $data->color }}-600 ring-offset-2 hover:bg-gray-100">
                            {{ __('issue.upload') }} </button>
                    </div>
                    <div class="previews"></div>
                </section>
                <div class="flex items-center w-full pt-4 mb-4">
                    <button type="submit" id="submit-all"
                        class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-{{ $data->color }}-600 border-{{ $data->color }}-600 rounded-md focus:outline-none focus:ring-2 focus:ring-{{ $data->color }}-600 ring-offset-2 hover:bg-{{ $data->color }}-800 ">
                        {{ __('issue.next_page') }} </button>
                </div>
                <hr class="my-4 border-gray-200">
                <div class="text-xs center">
                    Powered by: <a target="_blank" href="http://www.bauapp.com"
                        class="text-{{ $data->color }}-600">bauapp.com</a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.js"
        integrity="sha512-9e9rr82F9BPzG81+6UrwWLFj8ZLf59jnuIA/tIf8dEGoQVu7l5qvr02G/BiAabsFOYrIUTMslVN+iDYuszftVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        Dropzone.options.myDropzone = {
            url: '/',
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 3,
            maxFiles: 3,
            maxFilesize: 4096,
            acceptedFiles: 'image/*',
            dictDefaultMessage: "{{ __('issue.drag_n_drop') }}",
            addRemoveLinks: true,
            init: function () {
                dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

                // for Dropzone to process the queue (instead of default form behavior):
                document.getElementById("submit-all").addEventListener("click", function (e) {
                    // Make sure that the form isn't actually being sent.
                    // e.preventDefault();
                    e.stopPropagation();
                    dzClosure.processQueue();
                });

                //send all the form data along with the files:
                // this.on("sendingmultiple", function (data, xhr, formData) {
                //     formData.append("first_name", $("#firstname").val());
                //     formData.append("last_name", $("#lastname").val());
                //     formData.append("company_id", $("company_id").val());
                //     formData.append("project", $("project").val());
                //     formData.append("email", $("email").val());
                //     formData.append("location", $("location").val());
                //     formData.append("description", $("description").val());
                // });
            }
        }

    </script>

</body>

</html>
