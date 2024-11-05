@props([
    'disabled' => false,
    'withicon' => false
])

@php
    $withiconClasses = $withicon ? 'pl-11 pr-4' : 'px-4'
@endphp

<input
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge([
        'class' => $withiconClasses . ' py-2 border-orange-500 rounded-md focus:border-orange-500 focus:ring focus:ring-orange-300 focus:ring-offset-2 focus:ring-offset-white dark:border-orange-500 dark:bg-dark-eval-1 dark:text-orange-500 dark:focus:ring-offset-dark-eval-1',
    ]) !!}
>
