@props(['heading'])
<section class="px-6 py-8 max-w-4xl mx-auto">
    <h1 class="mb-2 border-b mb-8 pb-2  text-4xl font-bold">{{ $heading }}</h1>
    <div class="flex">
        <aside class="w-48">
            <h4 class="font-semi bold">Links</h4>
            <ul>
                <li>
                    <a href="/admin/dashboard"
                        class="{{ request()->is('admin/dashboard') ? 'text-blue-500' : '' }}">Dashboard
                    </a>
                </li>
                <li>
                    <a href="/admin/posts/create"
                        class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">New Post
                    </a>
                </li>
            </ul>
        </aside>
        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
