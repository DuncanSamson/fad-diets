---
title: what in your scran
description: Do you know what is in your food and how it is effecting your body?
image: fad-diets-logo-light-green.png
author: Duncan Samson
---
@extends('_layouts.main')
@section('content')
    <article class="max-w-3xl mx-auto px-4 py-10">
        <h1 class="text-7xl font-bold text-center mb-6 pb-3 mb-10 border-b border-b-emerald-200">What’s in Your Scran?</h1>
        <section class="text-lg mb-6 block md:flex gap-4 pb-10 border-b border-emerald-200">
            <div class="flex justify-center md:justify-start flex-auto md:flex-1">
                <img class="w-48" alt="Big Mac" src="/assets/images/big-mac.jpg">
            </div>
            <div class="flex-1">
                <h2 class="text-center md:text-left text-xl font-bold pb-8">Canola Oil Aka Canadian Oil Low Acid</h2>
                <p class="text-lg mb-6">Oil that is extracted from genetically modified rapeseeds from the rapeseed plant.</p>
                <x-button page="/scran-canola-oil">
                    Read More About It
                </x-button>
            </div>
        </section>

        <section class="text-lg mb-6 block md:flex gap-4 pb-10 border-b border-emerald-200">
            <div class="flex-1">
                <h2 class="text-center md:text-left font-bold text-xl pb-8">Palm Fat Aka Palm Oil Solid Fraction</h2>
                <p class="text-lg mb-6">
                    Fat extracted from the fruit of the oil palm tree, used widely in processed foods and cosmetics.
                </p>
                <x-button page="/scran-palm-fat">
                    Read More About It
                </x-button>
            </div>
            <div class="flex justify-center md:justify-start flex-auto md:flex-1 pt-4 md:pt-0">
                <img class="w-48" alt="mars bar" src="/assets/images/mars-bar.jpg">
            </div>
        </section>
        
        <section class="text-lg mb-6 block md:flex gap-4">
            <div class="flex justify-center md:justify-end flex-auto md:flex-1">
                <img class="w-48" alt="Irn bru can" src="/assets/images/irnbru.jpg">
            </div>
            <div class="flex-1">
                <h2 class="text-center md:text-left font-bold text-xl pb-8">Sunset Yellow FCF (E110)</h2>
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