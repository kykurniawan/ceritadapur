<div x-data="" x-ref="alert" {{ $attributes->merge(['class' => 'px-3 py-2']) }}>
    @if ($attributes->has('dismissable'))
        <div class="flex justify-between gap-2">
            {{ $slot }}
            <button x-on:click="$refs.alert.remove()">&#x2715;</button>
        </div>
    @else
        {{ $slot }}
    @endif
</div>
