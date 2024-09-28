@props(['name', 'type'])
    <input  class="w-full rounded-md py-3 px-4 bg-gray-100 text-gray-800 text-sm outline-blue-500 focus:bg-transparent"
    type={{ $type }} placeholder={{ $name }}:
    name={{ $name }}


{{ $attributes(['value' => old($name)]) }}
id="{{ $name }}"
    >
