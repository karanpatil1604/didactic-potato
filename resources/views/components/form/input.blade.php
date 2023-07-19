@props(['name'])
<x-form.field>
    <x-form.label name="{{ $name }}" />
    <input name="{{ $name }}" id="{{ $name }}" class="border border-gray-200 p-2 w-full rounded"
        {{ $attributes(['value' => old($name)]) }}>

    @error($name)
        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
    {{-- <x-form.error name="{{ $name }}" /> --}}
</x-form.field>
