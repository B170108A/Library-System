<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Borrow Check-Out Site') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 bg-white border-b border-gray-200"> --}}

                    <body class="antialiased">
                        <div
                            class="relative flex items-top justify-center min-h-screen bg-gray-100 sm:items-center py-4 sm:pt-0">
                            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                                <div class="mt-8 bg-black dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                                    <div class="grid grid-cols-1 md:grid-cols-2">
                                        <div class="p-6">

                                            <div class="flex items-center">
                                                <div class="ml-4 text-lg leading-7 font-semibold ">
                                                    <a href="{{ route('assets.index') }}"
                                                        class="text-decoration-none text-gray-900 dark:text-white">Show Assets Listing</a>
                                                </div>
                                            </div>

                                            <div class="ml-12">
                                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                    Show Current Assets Listing
                                                </div>
                                            </div>

                                        </div>

                                        <div
                                            class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">

                                            <div class="flex items-center">
                                                <div class="ml-4 text-lg leading-7 font-semibold "><a
                                                        href="{{ route('venues.index') }}"
                                                        class="text-decoration-none text-gray-900 dark:text-white">Show Venues
                                                        Listing</a></div>
                                            </div>

                                            <div class="ml-12">
                                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                    Show Current Venues Listing
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                                            <div class="flex items-center">
                                                <div class="ml-4 text-lg leading-7 font-semibold "><a
                                                        href="{{ route('assets.create') }}"
                                                        class="text-decoration-none text-gray-900 dark:text-white">Create
                                                        New Assets or Item</a></div>
                                            </div>

                                            <div class="ml-12">
                                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                    To create new Assets or Item
                                                </div>
                                            </div>
                                        </div>

                                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                            <div class="flex items-center">
                                                <div class="ml-4 text-lg leading-7 font-semibold "><a
                                                        href="{{ route('venues.create') }}"
                                                        class="text-decoration-none text-gray-900 dark:text-white">Create
                                                        Venues or Location</a></div>
                                            </div>

                                            <div class="ml-12">
                                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                                    To Create new Venue or Location </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                                    <div class="text-center text-sm text-gray-500 sm:text-left">
                                        <div class="flex items-center">

                                        </div>
                                    </div>

                                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </body>
                    {{--
                </div> --}}
            </div>
        </div>
    </div>
</x-app-layout>
