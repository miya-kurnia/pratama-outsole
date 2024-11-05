<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Produk Create') }}
        </h2>
    </x-slot>

<div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full max-w-sm">
            <div class="card">
                <div class="card-header bg-blue-600 text-white text-center py-2 font-bold text-xl">Create New Product</div>
                <div class="card-body p-6">
                    <form action="{{ route('produks.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
    
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="name">Name</label>
                            <input class="bg-white border border-gray-400 p-2 rounded-lg w-full" type="text" id="name" name="name">
                        </div>
    
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="photo">Photo</label>
                            <input class="bg-white border border-gray-400 p-2 rounded-lg w-full" type="file" id="photo" name="photo">
                        </div>
    
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="price">price</label>
                            <input class="bg-white border border-gray-400 p-2 rounded-lg w-full" type="text" id="price" name="price">
                        </div>
    
                        <div class="mb-4">
                            <label class="block text-gray-700 font-bold mb-2" for="description">Description</label>
                            <textarea class="bg-white border border-gray-400 p-2 rounded-lg w-full" id="description" name="description" rows="3"></textarea>
                        </div>
    
                        <button class="bg-blue-600 text-white text-center rounded-lg px-5 py-2" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>