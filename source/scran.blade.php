---
title: what in your scran
description: Do you know what is in your food and how it is effecting your body?
image: fad-diets-logo-light-green.png
---
@extends('_layouts.main')
@section('content')
    <article class="max-w-3xl mx-auto px-4 py-10">
        <h1 class="text-7xl font-bold text-center mb-6 pb-3 mb-10 border-b border-b-emerald-200">What’s in Your Scran?</h1>
        <section class="text-lg mb-6 flex gap-4 pb-10 border-b border-emerald-200">
            <img class="w-48" src="/assets/images/big-mac.jpg">
            <div>
                <h3 class="font-bold text-xl pb-8">Canola Oil Aka Canadian Oil Low Acid</h3>
                <p class="text-lg mb-6">Oil that is extracted from genetically modified rapeseeds from the rapeseed plant.</p>
                <x-button page="/scran-canola-oil">
                    Read More About It
                </x-button>
            </div>
        </section>

        <section class="text-lg mb-6 flex gap-4 pb-10 border-b border-emerald-200">
            <div>
                <h3 class="font-bold text-xl pb-8">Palm Fat Aka Palm Oil Solid Fraction</h3>
                <p class="text-lg mb-6">
                    Fat extracted from the fruit of the oil palm tree, used widely in processed foods and cosmetics.
                </p>
                <x-button page="/scran-palm-fat">
                    Read More About It
                </x-button>
            </div>
            <img class="w-48" src="/assets/images/mars-bar.jpg">
        </section>
        
        <section class="text-lg mb-6 flex gap-4">
            <img class="w-48" src="/assets/images/irnbru.jpg">
            <div>
                <h3 class="font-bold text-xl pb-8">Sunset Yellow FCF (E110)</h3>
                <p class="text-lg mb-6">
                    A bright orange artificial dye made from petroleum, used to give foods and drinks a strong orange
                    colour.
                </p>
                <x-button page="/scran-sunset-yellow">
                    Read More About It
                </x-button>
            </div>
        </section>
    </article>
@endsection