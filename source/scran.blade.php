---
title: what in your scran
---
@extends('_layouts.main')

@section('content')
    <div class="max-w-3xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-center mb-6">What’s in Your Scran?</h1>

        <p class="text-lg mb-6">
            Ever stopped to think about what’s really going on with your food? Take the Big Mac, for instance. Sure, it’s got those two all-beef patties, special sauce, crisp lettuce, cheese, pickles, onions, and that sesame seed bun—but beyond the iconic layers, there’s a hidden list of preservatives and flavour enhancers.
        </p>

        <p class="text-lg mb-6">
            While it packs protein and carbs, it also loads you up with calories, saturated fats, and sodium that could tip the scales over time. Now, flip the page and consider canola oil. Marketed as a “low acid” option, it’s made from genetically modified rapeseeds, goes through chemical extraction and high-heat refining, and—get this—a study in mice even suggested it might mess with memory and add extra pounds.
        </p>

        <p class="text-lg mb-6">
            Intrigued? I’m diving into these everyday ingredients to reveal the surprising truths behind our food choices.
        </p>

        <div class="text-center">
            <a href="{{ route('scran-detail') }}" class="inline-block bg-green-600 text-white px-6 py-3 rounded-md hover:bg-green-700 transition">
                Read More About It
            </a>
        </div>
    </div>
@endsection