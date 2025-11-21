@props(['size' => 'base'])
@php
    $class = 'bg-white/10 hover:bg-white/25 py-1 rounded-xl transition-colors duration-300';
    if($size === 'small'){
        $class .= ' text-xs px-2';
    } else if ($size === 'large'){
        $class .= ' text-xl px-4';
    } else {
        $class .= ' px-4';
    }
@endphp

<a {{$attributes->merge(['class' => $class])}}>
    {{ $slot }}
</a>
