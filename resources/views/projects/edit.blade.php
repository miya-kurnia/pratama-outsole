<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <form action="{{ route('projects.update', $project->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="mb-4">
                        <label for="name" class="block text-sm text-gray-700">Name</label>
                        <input id="name" type="text" class="w-full mt-2 form-input" name="name" value="{{ $project->name }}">
                    </div>
                    <div class="mb-4">
                        <label for="images" class="block text-sm text-gray-700">Images</label>
                        <input id="images" type="file" class="w-full mt-2 form-input" name="images[]" multiple>
                    </div>
                </div>
                <div class="px-6 py-4 bg-gray-50 text-right">
                    <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded hover:bg-blue-500">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


    </x-app-layout>