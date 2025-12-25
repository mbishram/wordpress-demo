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

<div x-data="{ open: true }" x-transition x-cloak x-show="open"
  {{ $attributes->merge(['class' => "px-sm py-xs rounded-sm flex items-center justify-between gap-sm {$class}"]) }}>
  {!! $message ?? $slot !!}

  <button class="cursor-pointer text-3xl" @click="open = false">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
      fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
      <path
        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
    </svg>
  </button>
</div>
