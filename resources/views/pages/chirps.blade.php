<?php

use function Laravel\Folio\name;
use function Laravel\Folio\{middleware};

name('chirps');
middleware(['auth', 'verified']);

?>

<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <livewire:chirps.create />

        <livewire:chirps.list />
    </div>
</x-app-layout>
