@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}" />

    <textarea name="{{ $name }}" id="{{ $name }}" required
        class="border border-gray-200 rounded-md p-2 w-full rounded" {{ $attributes }}>{{ $slot ?? old($name) }}</textarea>
    <x-form.error name="{{ $name }}" />

</x-form.field>
