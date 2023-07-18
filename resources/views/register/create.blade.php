<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 rounded-xl border border-gray-200">
            <h1 class="text-center font-bold text-xl">Register</h1>
            <form action="/register" method="post" class="mt-10">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">name</label><input
                        type="text" value="{{ old('name') }}" name="name" id="name" required
                        class="border border-gray-400 p-2 w-full">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-6"><label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username</label>
                    <input type="text" name="username" value="{{ old('username') }}" id="username" required
                        class="border border-gray-400 p-2 w-full" autocomplete="off">
                    @error('username')
                        <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="email"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label><input type="text"
                        name="email" value="{{ old('email') }}" id="email" required
                        class="border border-gray-400 p-2 w-full">
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label><input
                        type="password" name="password" id="password" required
                        class="border border-gray-400 p-2 w-full">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }} </p>
                    @enderror
                </div>
                <div class="mb-6">
                    <x-submit-button>Submit</x-submit-button>
            </form>
        </main>
    </section>
</x-layout>
