@props(['list'])

<x-card>
    <div class="flex">
        <img src="{{ asset('images/no-image.png') }}" alt="" class="hidden w-48 mr-6 md:block">
        <div>
            <h3 class="text-2xl">
                <a href="/listings/{{ $list->id }}">{{ $list->title }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">
                {{ $list->company }}
            </div>
            <x-listing-tags :tagsCsv="$list->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $list->location }}
            </div>
        </div>
    </div>
</x-card>
