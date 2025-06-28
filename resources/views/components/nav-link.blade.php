{{--@props(['active' => false, 'type'=> 'a'])--}}

{{--<a class="{{ $active ? 'active' : ''}} rounded-md px-3 py-2 text-sm font-medium"--}}
{{--   aria-current="{{ $active ? 'page': 'false' }}"--}}
{{--    {{ $attributes }}--}}
{{-->{{ $slot }}</a>--}}


@props(['active' => false, ])

@php
    $classes = 'nav-item nav-link';
    if ($active) $classes .= ' active';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} aria-current="{{ $active ? 'page' : 'false' }}">
    {{ $slot }}
</a>
