@props([
    'label',
    'route'
])

<a href="{{ route($route) }}" class="{{ Route::is($route) ? 'bg-white text-black' : '' }}  flex items-center gap-2 p-2 hover:bg-white hover:text-black rounded-md transition">
    {{ $slot }}
    <p>{{ $label }}</p>
</a>
