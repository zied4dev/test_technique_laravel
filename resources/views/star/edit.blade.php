<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier Star') }}
        </h2>

    </x-slot>


    <div class="py-12">


        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- component -->
            @if ($errors->any())
                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
                     <span class="text-xl inline-block mr-5 align-middle">
                         <i class="fas fa-bell"></i>
                     </span>
                    <span class="inline-block align-middle mr-8">
                            <b class="capitalize">Erreur de saisie </b>  @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
             </span>
                    <button
                        class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
                        onclick="closeAlert(event)">
                        <span>×</span>

                    </button>
                </div>
            @endif
            <form method="POST" action="{{ route('updateStar',$star) }}"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1 sm:col-span-2">
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="nom" value="{{old('nom',$star->nom)}}"
                                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                           placeholder="Nom">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="prenom" value="{{old('prenom',$star->prenom)}}"
                                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                           placeholder="Prénom">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <div class="mt-1">
                                            <textarea name="description" rows="3"
                                                      class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                                      placeholder="Description">{{old('description',$star->description)}}</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="grid grid-cols-3 gap-y-4">
                            <div class="col-span-1 sm:col-span-1">
                                <label>Photo: </label>
                                @if (file_exists (public_path ('photos/avatar/'.$star->url_image)))

                                    <img src="{{ asset('photos/avatar/'.$star->url_image) }}" class="h-24 w-24 object-cover rounded-full">

                                @else
                                    <img class="h-24 w-24 object-cover rounded-full" src="{{ asset('photos/avatar/avatar.jpg') }}"
                                        >
                                @endif


                                <input type="file" name="url_image" value="{{$star->url_image}}" class=" py-3 ">
                            </div>
                        </div>

                        <div class="grid grid-cols-8 gap-6">
                            <div class="col-start-4 col-span-3">
                                <input type="submit"
                                       class="bg-blue-500  hover:bg-blue-700 text-white font-bold py-2 px-4 w-44 rounded-full "
                                       value="Valider"/>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </div>
    </div>
</x-app-layout>


<script>
    function closeAlert(event) {
        let element = event.target;
        while (element.nodeName !== "BUTTON") {
            element = element.parentNode;
        }
        element.parentNode.parentNode.removeChild(element.parentNode);
    }

</script>

