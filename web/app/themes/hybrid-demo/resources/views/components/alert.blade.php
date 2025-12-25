@props([
    'type' => null,
    'message' => null,
])

@php
  $class = match ($type) {
      'success' => 'text-green-50 bg-green-400',
      'caution' => 'text-yellow-50 bg-yellow-400',
      'warning' => 'text-red-50 bg-red-400',
      default => 'text-indigo-50 bg-indigo-400',
  };
@endphp

<div x-data x-init="console.log('Testing Alpine')"
  {{ $attributes->merge(['class' => "px-sm py-xs rounded-sm {$class}"]) }}>
  {!! $message ?? $slot !!}
</div>
