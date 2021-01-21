<x-app-layout>
    <x-slot name="header">
        <div class="relative h-10 ">
            <div class="absolute inset-y-0 right-0 w-16 ...">

                <a href="{{route('createStar')}}"
                   class="inset-y-0 right-4 bg-blue-500 font-bold text-white   px-8 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6">
                    Ajouter
                </a>

            </div>
        </div>

    </x-slot>
    <div class="py-20">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('alert-succes'))
                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell"></i>
  </span>
                    <span class="inline-block align-middle mr-8">
    <b class="capitalize">{{session('alert-succes')}}</b>
  </span>
                    <button
                        class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
                        onclick="closeAlert(event)">
                        <span>×</span>

                    </button>
                </div>


            @elseif(session('alert-error'))
                <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell"></i>
  </span>
                    <span class="inline-block align-middle mr-8">
    <b class="capitalize">{{session('alert-error')}}</b>
  </span>
                    <button
                        class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none"
                        onclick="closeAlert(event)">
                        <span>×</span>

                    </button>
                </div>

            @endif
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
                                                <a href="{{ route('editStar',$oneStar) }}"
                                                   class="h-10 px-5  py-3 m-2 text-blue-100 transition-colors duration-150 bg-blue-600 rounded-lg focus:shadow-outline hover:bg-blue-700"><i
                                                        class="fa trash "></i>
                                                    Modifier</a>
                                                <a href="{{  route('deleteStar',$oneStar->id) }}"

                                                   class="h-10 px-5 py-3 m-2 text-red-100 transition-colors duration-150 bg-red-700 rounded-lg focus:shadow-outline hover:bg-red-800">Supprimer</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    <!-- More items... -->

                                    </tbody>

                                </table>
                                <div class="py-8 px-3"  >
                                        {{ $allStars->links() }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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

