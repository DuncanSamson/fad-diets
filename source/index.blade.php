---
title: Welcome to Fad Diet
---
@extends('_layouts.main')
@section('content')

    <x-welcome-text>
        <p>Since childhood nutrition has been an issue to overcome, from being banned from consuming products with E numbers as they caused behavioural issues, to adulthood, suffering from insomnia, anxiety, depression, obesity and joint and muscle issues.  These are ailments that plague many of us, adults and children alike in our society today.  And your diet might be to blame. </p>

        <p>Many people including myself (Jonathan) have seen drastic improvements in their physical and mental health through the adaptation of what are commonly referred to as “fad” diets, while also eliminating ingredients from their diets that are categorised as safe for human consumption.</p>

        <p>The aim of this website is to bring some of this information to light in as engaging, interactive and concise way.  But mainly, to encourage people to think more consciously as to what they are putting in their body and brain and consider how what they eat might be having on their own individual health. </p>

        <p>While we all share loads in common, everyone is unique in many different ways, a health food for one person might cause an allergic reaction in another.  This website has been created to help you think more about what foods do and don’t work for you, so that you can live as healthy a life as possible and potentially free yourself from many of the conditions that affect so many of us today, without the need for medication.  </p>
    </x-welcome-text>
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

