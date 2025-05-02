---
title: Welcome to Fad Diet
description: A website to help you think more about what foods do and don't work for you.
image: fad-diets-logo-light-green.png
---
@extends('_layouts.home')
@section('content')
    <x-hero>

    </x-hero>
    <x-team>
        <x-member fullname="Connor McCaig" image="/assets/images/100_0045.JPG" jobtitle="Game Developer"
                  individualBlurb="Hi, I'm Connor, a proud student at New College Lanarkshire.
                  I am the lead Game developer behind our game's functionality, bringing its mechanics to life,
                  and the artistic genius responsible for the sprite artwork that gives it its unique visual charm."></x-member>

        <x-member fullname="Jonathan Howie" image="/assets/images/100_0044.JPG" jobtitle="Lead Research"
                  individualBlurb="Hello, my name is Jonathan, and I’m the lead researcher for this site. In my role,
                  I am responsible for identifying and sourcing high-quality, relevant content that aligns with the goals of the site.
                   I focus on ensuring that the information we present is both accurate and engaging for our target audience.. "></x-member>

        <x-member fullname="Duncan Samson" image="/assets/images/100_0039.JPG" jobtitle="Web Developer"
                  individualBlurb="Hi, I’m Duncan, and I’m currently a student at New College Lanarkshire. My responsibilities include overseeing the web development process,
                  ensuring everything runs smoothly, and coordinating with the team to deliver the best possible user experience.
                  enhancing my skills in web development while contributing to the success of this project."></x-member>
    </x-team>
@endsection

