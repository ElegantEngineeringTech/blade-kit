@props([
    'count' => 0,
])

<x-kit::badge :attributes="$attributes->class(['absolute -right-1 -top-1'])" :count="$count" />
