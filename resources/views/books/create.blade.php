<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Book Here') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <x-validation-errors />

                    <x-success-message /> --}}
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                     <form method="POST" action="{{ route('books.store') }}">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-2 gap-6">
                            <div class="grid grid-rows-2 gap-6">
                                <div>
                                    <x-label for="nameBook" :value="__('Books Name')" />
                                    <x-input id="nameBook" class="block mt-1 w-full" type="text" name="nameBook" placeholder="Book's Name" autofocus />
                                </div>
                                <br>
                                <div>
                                    <x-label for="priceBook" :value="__('Books Pricing')" />
                                    <x-input id="priceBook" class="block mt-1 w-full" type="text" name="priceBook" placeholder="Price" autofocus />
                                </div>
                                <br>
                                <div>
                                    <x-label for="skuBook" :value="__('Books SKU')" />
                                    <x-input id="skuBook" class="block mt-1 w-full" type="text" name="skuBook" placeholder="Book SKU" autofocus />
                                </div>
                                <br>
                                <div>
                                    <x-label for="descriptionBook" :value="__('Books Description')" />
                                    <x-input id="descriptionBook" class="block mt-1 w-full" type="text" name="descriptionBook" placeholder="Description" autofocus />
                                </div>
                                <br>
                                <div>
                                    <x-label for="quantityBook" :value="__('Books Quantity In')" />
                                    <x-input id="quantityBook" class="block mt-1 w-full" type="text" name="quantityBook" placeholder="Quantity" autofocus />
                                </div>
                                <br>
                                <div>
                                    <x-label for="purchaseDateAsset" :value="__('Book Purchase Date')" />
                                    <x-input id="purchaseDateAsset" class="block mt-1 w-full" type="text" name="purchaseDateAsset" placeholder="Purchase Date" autofocus />
                                </div>
                                <br>
                                <div>
                                    <x-label for="publisherBook" :value="__('Book Publisher')" />
                                    <x-input id="publisherBook" class="block mt-1 w-full" type="text" name="publisherBook" placeholder="Brand" autofocus />
                                </div>
                                {{-- <div class="container mt-5" style="max-width: 450px">
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                        </div>
                                    </div>
                               </div> --}}
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-3">
                                {{ __('Create new') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
