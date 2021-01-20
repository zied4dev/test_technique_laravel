<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter Star') }}
        </h2>

    </x-slot>


    <div class="py-12">


        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- component -->
            @if ($errors->any())

                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell"/>
  </span>
                    <span class="inline-block align-middle mr-8">
    <b class="capitalize">Erreur de saisie </b>  @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
  </span>
                    <button
                        class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none">
                        <span>×</span>
                    </button>
                </div>
            @endif
            <form method="POST" action="{{ route('storeStar') }}"
                  enctype="multipart/form-data">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-1 sm:col-span-2">
                                <label for=""
                                       class="block text-sm font-medium text-gray-700">
                                    Nom
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="nom" id="company_website"
                                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                           placeholder="Nom">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for=""
                                       class="block text-sm font-medium text-gray-700">
                                    Prénom
                                </label>
                                <div class="mt-1 flex rounded-md shadow-sm">
                                    <input type="text" name="prenom" id="company_website"
                                           class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                           placeholder="Prénom">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="col-span-3 sm:col-span-2">
                                <label for="" class="block text-sm font-medium text-gray-700">
                                    Description
                                </label>
                                <div class="mt-1">
                                            <textarea id="about" name="description" rows="3"
                                                      class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"
                                                      placeholder="Description"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="grid grid-cols-3 gap-6">
                            <div class="col-span-1 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">
                                    Photo
                                </label>
                                <div class="mt-2 flex items-center">
                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                  <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z"/>
                  </svg>
                </span>
                                </div>
                            </div>


                            <div class="col-span-1 sm:col-span-2">
                                <input type="file" name="url_image">
                            </div>
                        </div>

                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-start-2 col-span-4 sm:col-span-2">
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


