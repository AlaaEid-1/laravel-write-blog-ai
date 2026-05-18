@props([
    'title' => 'the sunday edition',
    'mainClass' => ''
])

<div class="{{ $mainClass }}">

    <h3 class="font-headline-md text-[20px]">
        {{ $title }}
    </h3>

    <p class="font-metadata text-metadata text-on-primary-container">
        Join 40,000+ creators receiving our weekly digest
    </p>

    <div class="space-y-2">

        {{ $slot }}

        <input
            class="w-full px-4 py-2 rounded"
            placeholder="email@example.com"
            type="email"
        />

        <button class="w-full py-2 bg-white text-primary rounded">
            Subscribe
        </button>

        {{ $helper ?? '' }}

    </div>

</div>
