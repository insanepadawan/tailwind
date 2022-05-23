@extends('layouts.app')

@section('content')

    {{--  Navbar  --}}
    <nav class="relative container mx-auto p-6">
        {{-- Flex Container--}}
        <div class="flex items-center justify-between">
            {{--Logo--}}
            <div class="pt-2">
                <img src="{{ url('i/logo.svg') }}" alt="logo" />
            </div>
            <div class="hidden space-x-6 md:flex">
                <a href="#" class="hover:text-darkGrayishBlue">Pricing</a>
                <a href="#" class="hover:text-darkGrayishBlue">Product</a>
                <a href="#" class="hover:text-darkGrayishBlue">About Us</a>
                <a href="#" class="hover:text-darkGrayishBlue">Careers</a>
                <a href="#" class="hover:text-darkGrayishBlue">Community</a>
            </div>
            {{--Button--}}
            <a href="#"
               class="hidden p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight md:block">
                Get Started
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero">
        <!-- Flex Container -->
        <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">
            <!-- Left Item -->
            <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
                <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
                    Bring everyone together to build better products
                </h1>
                <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                    Manage makes it simple for software teams to plan day-to-day tasks
                    while keeping the larger team goals in view.
                </p>
                <div class="flex justify-center md:justify-start">
                    {{--Button--}}
                    <a href="#"
                       class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
                        Get Started
                    </a>
                </div>
            </div>
            <!-- Image -->
            <div class="md:w-1/2">
                <img src="{{ url('/i/illustration-intro.svg') }}" alt="illustration" />
            </div>
        </div>
    </section>

    <!-- Features -->
    <section id="features">
        <!-- Flex container -->
        <div
            class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row">
            <!-- What's different -->
            <div class="flex flex-col space-y-12 md:w-1/2">
                <h2 class="max-w-md text-4xl font-bold text-center md:text-left">
                    What's different about Manage?
                </h2>
                <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
                    Manage provides all the functionality your team needs, without the
                    complexity. Our software is tailor-made for modern digital product
                    teams.
                </p>
            </div>

            <!-- Numbered List -->
            <div class="flex flex-col space-y-8 md:w-1/2">
                {{--List item 1--}}
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <!-- Heading -->
                    <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                        <div class="flex items-center space-x-w">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                                01
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                Track company-wide progress
                            </h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                            Track company-wide progress
                        </h3>
                        <p class="text-darkGrayishBlue">
                            See how your day-to-day tasks fit into the wider vision. Go from
                            tracking progress at the milestone level all the way done to the
                            smallest of details. Never lose sight of the bigger picture
                            again.
                        </p>
                    </div>
                </div>

                {{--List item 2--}}
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <!-- Heading -->
                    <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                        <div class="flex items-center space-x-w">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                                02
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                Advanced built-in reports
                            </h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                            Advanced built-in reports
                        </h3>
                        <p class="text-darkGrayishBlue">
                            Set internal delivery estimates and track progress toward
                            company goals. Our customisable dashboard helps you build out
                            the reports you need to keep key stakeholders informed.
                        </p>
                    </div>
                </div>

                {{--List item 3--}}
                <div class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row">
                    <!-- Heading -->
                    <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
                        <div class="flex items-center space-x-w">
                            <div class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed">
                                03
                            </div>
                            <h3 class="text-base font-bold md:mb-4 md:hidden">
                                Everything you need in one place
                            </h3>
                        </div>
                    </div>
                    <div>
                        <h3 class="hidden mb-4 text-lg font-bold md:block">
                            Everything you need in one place
                        </h3>
                        <p class="text-darkGrayishBlue">
                            Stop jumping from one service to another to communicate, store
                            files, track tasks and share documents. Manage offers an
                            all-in-one team productivity solution.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials">
        <!-- Container to heading and testimonial blocks -->
        <div class="max-w-6xl px-5 mx-auto mt-32 text-center">
            <!-- heading -->
            <h2 class="text-4xl font-bold text-center">
                What's difference about manage
            </h2>
            <!-- Testimonials  -->
            <div class="flex flex-col mt-24 md:flex-row md:space-x-6">
                <!-- Testimonial 1 -->
                <div class="flex flex-col items-center
                p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3

                ">
                    <img
                        class="w-16 -mt-14"
                        src="{{ url('/i/avatar-anisha.png') }}"
                        alt="avatar" />
                    <h5 class="text-lg font-bold">Anisha Lee</h5>
                    <p class="text-sm text-darkGrayishBlue">
                        “Manage has supercharged our team’s workflow. The ability to
                        maintain visibility on larger milestones at all times keeps
                        everyone motivated.”
                    </p>
                </div>
                <!-- Testimonial 2 -->
                <div class="hidden flex flex-col items-center
                p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3
                md:flex
                ">
                    <img
                        class="w-16 -mt-14"
                        src="{{ url('/i/avatar-ali.png') }}"
                        alt="avatar" />
                    <h5 class="text-lg font-bold">Ali Bravo</h5>
                    <p class="text-sm text-darkGrayishBlue">
                        “We have been able to cancel so many other subscriptions since
                        using Manage. There is no more cross-channel confusion and
                        everyone is much more focused.”
                    </p>
                </div>
                <!-- Testimonial 3 -->
                <div class="hidden flex flex-col items-center
                p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3
                md:flex
                ">
                    <img
                        class="w-16 -mt-14"
                        src="{{ url('/i/avatar-richard.png') }}"
                        alt="avatar" />
                    <h5 class="text-lg font-bold">Richard Watts</h5>
                    <p class="text-sm text-darkGrayishBlue">
                        “Manage has supercharged our team’s workflow. The ability to
                        maintain visibility on larger milestones at all times keeps
                        everyone motivated.”
                    </p>
                </div>
            </div>
            <!-- Button -->
            <div class="my-16">
                <a href="#"
                   class="p-3 px-6 pt-2 text-white bg-brightRed rounded-full
                    baseline hover:bg-brightRedLight">
                    Get Started
                </a>
            </div>
        </div>
    </section>

@endsection
