@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-neutral-400 focus:border-emerald-600 focus:ring-emerald-500 rounded-md shadow-sm',
]) !!}>
