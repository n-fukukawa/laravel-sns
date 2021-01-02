<textarea {{ $attributes->merge(
        [
        'required' => 'true',
        'rows' => '16',
        'class' => 'block w-full mt-2 p-2 border border-gray-400'
        ])}}>{{ $slot }}
</textarea>