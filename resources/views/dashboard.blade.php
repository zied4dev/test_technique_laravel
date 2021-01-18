<x-app-layout>
    <x-slot name="header">
        <div class="relative h-10 ">
            <div class="absolute inset-y-0 right-0 w-16 ...">

                <a href="{{route('createStar')}}"
                   class="inset-y-0 right-1.5 bg-blue-500 font-bold text-white   px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                    Ajouter
                </a>

            </div>
        </div>

    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">


                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Photo
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Nom
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Prénom
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Actions</span>

                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($allStars as $oneStar)


                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 h-10 w-10">
                                                        <img class="h-10 w-10 rounded-full"
                                                             src="{{ asset('photos/avatar/'.$oneStar->url_image) }}"
                                                             alt="">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"> {{$oneStar->nom}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900"> {{$oneStar->prenom}}</div>
                                            </td>
                                            </td>

                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="{{route('editStar',$oneStar->id)}}"
                                                   class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                <a href="{{route('deleteStar',$oneStar->id)}}"
                                                   class="text-indigo-600 hover:text-indigo-900">Sup</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- More items... -->

                                    </tbody>

                                </table>
                                <div class="py-2">
                                    <nav class="block">
                                        <ul class="flex  right-1">

                                            {{ $allStars->links() }}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
