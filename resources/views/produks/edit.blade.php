<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Edit produk') }}
        </h2>
    </x-slot>

<div class="container px-6">
  <div class="flex justify-center">
    <div class="w-full max-w-lg">
      <div class="card p-6">
        <div class="font-medium text-lg mb-4">Edit produk</div>
        <form action="{{ route('produks.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="mb-4">
            <label class="block mb-2 font-medium text-gray-700" for="name">Name</label>
            <input class="w-full p-2 border border-gray-400" type="text" id="name" name="name" value="{{ $produk->name }}">
          </div>
          <div class="mb-4">
            <label class="block mb-2 font-medium text-gray-700" for="photo">Photo</label>
            <input class="w-full p-2 border border-gray-400" type="file" id="photo" name="photo">
            <img src="{{ asset('images/'.$produk->photo) }}" width="50">
          </div>
          <div class="mb-4">
            <label class="block mb-2 font-medium text-gray-700" for="price">Price</label>
            <input class="w-full p-2 border border-gray-400" type="text" id="price" name="price" value="{{ $produk->price }}">
          </div>
          <div class="mb-4">
            <label class="block mb-2 font-medium text-gray-700" for="description">Description</label>
            <textarea class="w-full p-2 border border-gray-400" id="description" name="description" rows="3">{{ $produk->description }}</textarea>
          </div>
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded" type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

</x-app-layout>