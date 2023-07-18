<x-layout>
    <section class="px-6 py-8">
        <form action="/admin/posts" method="post">
            @csrf
            <x-panel class="max-w-sm mx-auto">

                <div class="mb-6">
                    <label for="title" class="block mb-2 uppercase font-bold text-xs text-gray-700">Title</label><input
                        type="text" name="title" id="title" required value="{{ old('title') }}"
                        class="block border border-gray-400 p-2 w-full">

                    @error('title')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="slug"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">slug</label><input type="text"
                        value="{{ old('slug') }}" name="slug" id="slug" required
                        class="border border-gray-400 p-2 w-full">

                    @error('slug')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 ml-0"><label for="excerpt"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">Excerpt</label>
                    <textarea name="excerpt" id="excerpt" required class="border border-gray-400 p-2 w-full">{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6 ml-0"><label for="body"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">Body</label>
                    <textarea name="body" id="body" required class="border border-gray-400 p-2 w-full">{{ old('body') }}</textarea>
                </div>
                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                <div class="mb-6 ml-0"><label for="category_id"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">Select Category</label>
                    <select name="category_id" class="p-2 rounded-md" id="category">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @error('category')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
                <x-submit-button>Publish</x-submit-button>
            </x-panel>
        </form>
    </section>
</x-layout>
