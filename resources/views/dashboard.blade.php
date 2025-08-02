<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="px-4 md:px-8 lg:px-12">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3 lg:grid-cols-4">
                <x-card-information-bg class="relative aspect-video overflow-hidden rounded-xl" />
                <x-card-information-bg class="relative aspect-video overflow-hidden rounded-xl" />
                <x-card-information-bg class="relative aspect-video overflow-hidden rounded-xl" />
                <x-card-information-bg class="relative aspect-video overflow-hidden rounded-xl" />
            </div>

        </div>
    </div>
</x-layouts.app>
