<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Books Index')}}
            <!--You're logged in as {{ Auth::user()->name }}-->
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    {{-- <div class="float-end"><a class="btn btn-link float-end"
                            href="{{ route('assets.create') }}">Create Product</a> </div> --}}
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="ml-3">
                            <a class="btn btn-link float-end" href="{{ route('books.create') }}">Create New Books</a>
                        </x-button>

                    </div>


                    {{-- Display message --}}
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-gray-500 uppercase tracking-wider">
                                                    Book ID
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-gray-500 uppercase tracking-wider">
                                                    Book SKU
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-gray-500 uppercase tracking-wider">
                                                    Book Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-gray-500 uppercase tracking-wider">
                                                    Book Price
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">View</span>
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Edit</span>
                                                </th>
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="sr-only">Delete</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($books as $book)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            {{-- Here Can put image --}}
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ $book->id }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $book->skuBook }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $book->nameBook }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            $ {{ $book->priceBook }}
                                                        </div>
                                                    </span>
                                                </td>
                                                {{-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                    Admin
                                                </td> --}}
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div>
                                                        <a href="{{ route('books.show',$book->id) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">View</a>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div>
                                                        <a href="{{ route('books.edit',$book->id) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                                    </div>
                                                </td>
                                                {{-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div>
                                                        <a href="{{ route('books.destroy', $book->id) }}"
                                                            class="text-indigo-600 hover:text-indigo-900">Delete</a>
                                                    </div>

                                                </td> --}}
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div>
                                                        <a href="#"
                                                            class="text-indigo-600 hover:text-indigo-900">Delete</a>
                                                    </div>

                                                </td>
                                            </tr>
                                            @endforeach

                                            <!-- More people... -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
