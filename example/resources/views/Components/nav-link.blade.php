@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
    <a class="{{ $active ? 'rounded-md bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 text-sm font-medium text-white"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
        
@else
    <button
        class="{{ $active ? 'rounded-md bg-gray-900' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} px-3 py-2 text-sm font-medium text-white"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</button>
@endif
