<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Books')}}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="bg-dark text-black rounded p-3">
                        <h5 class="text-warning">Name</h5>
                            <x-label for="nameAsset" value="{{ $asset->nameAsset }}" />
                        <h5 class="text-warning">Price</h5>
                        <p class="fw-bold">$ {{ $asset->priceAsset }}</p>

                        <h5 class="text-warning">Description</h5>
                        <p class="fw-bold">{{ $asset->descriptionAsset }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



