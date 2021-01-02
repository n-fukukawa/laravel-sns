<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'px-4 py-2 bg-gray-500 rounded text-white text-bold',
    'href' => 'yahoo.co.jp'
    ]) }}>
{{ $slot }}
</button>

