@extends('layouts.app')
@section('content')
    <!-- component -->

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- ====== Hero Section Start -->
    <div id='home' class="relative pt-[120px] lg:pt-[150px] pb-[110px] bg-white">
        <div class="container px-10">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full lg:w-5/12 px-4">
                    <div class="hero-content">
                        <h1
                            class="
                  text-dark
                  font-bold
                  text-4xl
                  sm:text-[42px]
                  lg:text-[40px]
                  xl:text-[42px]
                  leading-snug
                  mb-3
                ">
                            A period plan. <br />
                            Made for your cycle. <br />

                        </h1>
                        <p class="text-base mb-8 text-body-color max-w-[480px]">
                            World's first ultra-thin Anion pads with high level hygiene.

                        </p>

                        <div class="clients pt-16">

                            <div class="flex items-center thumb-img">
                                <a href='images\Lisa - L - Angled Mockup.jpg' class="w-full py-3 mr-4">
                                    <img class='rounded-full transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300'
                                        src="images\Lisa - L - Angled Mockup.jpg" alt="ayroui" />
                                </a>
                                <a href='images\Lisa - XL - Angled Mockup.jpg' class="w-full py-3 mr-4">
                                    <img class='rounded-full transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300'
                                        src="images\Lisa - XL - Angled Mockup.jpg" alt="graygrids" />
                                </a>
                                <a href='images\Lisa - XXL - Front Mockup.jpg' class="w-full py-3 mr-4">
                                    <img class='rounded-full transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110  duration-300'
                                        src="images\Lisa - XXL - Front Mockup.jpg" alt="uideck" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hidden lg:block lg:w-1/12 px-4"></div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="lg:text-right lg:ml-auto">
                        <div class="relative inline-block z-10 pt-11 lg:pt-0 thumb-previewer">
                            <img src="images\Lisa - L - Angled Mockup.jpg" alt="hero"
                                class="max-w-full lg:ml-auto rounded-tl-[100px] rounded-br-[100px]" />
                            <span class="absolute -left-8 -bottom-8 z-[-1]">
                                <svg width="93" height="93" viewBox="0 0 93 93" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="2.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="2.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="24.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="46.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="68.5" cy="90.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="2.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="24.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="46.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="68.5" r="2.5" fill="#3056D3" />
                                    <circle cx="90.5" cy="90.5" r="2.5" fill="#3056D3" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== Hero Section End -->


    <!-- ====== Why Section Start -->
    <section id='why' class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">WHY
                <span class="underline decoration-blue-500">LISA ?</span>
            </h1>

            <p class="mt-4 text-gray-500 xl:mt-6 dark:text-gray-300 text-lg">
                We wanted to make "your days" easy as our first step
            </p>

            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                <div
                    class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-indigo-100 duration-300">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Anion Technology</h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        The presence of negative ions (anions) in Lisa sanitary napkins is beneficial for combating
                        odor-causing bacteria and maintaining the right pH balance. If you experience concerns about odor
                        during menstruation, this technology is the right choice.
                    </p>


                </div>

                <div
                    class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-green-100 duration-300">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Extended Usage Time</h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        It's generally recommended to change pads every 4 hours to prevent harmful bacterial colonization
                        and potential health hazards. There may be situations in which you might not change the napkin on
                        time due to your respective activities. In such cases, Lisa will offer extended protection. However,
                        practicing good hygiene and changing the pad on time is mandatory.
                    </p>


                </div>

                <div
                    class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 hover:bg-red-100 duration-300">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </span>

                    <h1 class="text-2xl font-semibold text-gray-700 capitalize dark:text-white">Safe Materials</h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        Lisa's sanitary napkins are made with natural materials, including SAP (Super Absorbent Polymer)
                        from Aloe Vera & Corn Pulp, Pure Cotton top sheet, and adhesive gum from fruit extract. The
                        biodegradable nature of these materials makes them safe for you and the environment, which is a
                        positive quality.
                    </p>


                </div>
            </div>
        </div>
    </section>
    <!-- ====== Why Section End -->

    <!-- component -->
    <section id='features' class="bg-white dark:bg-gray-900 py-20">
        <div class="container px-10 py-20 mx-auto shadow-2xl rounded-lg">
            <div class="lg:flex lg:items-center">
                <div class="w-full space-y-12 lg:w-1/2 ">
                    <div>
                        <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl dark:text-white">SPECIAL
                            FEATURES
                            <br>
                        </h1>

                        <div class="mt-2">
                            <span class="inline-block w-40 h-1 rounded-full bg-blue-500"></span>
                            <span class="inline-block w-3 h-1 ml-1 rounded-full bg-blue-500"></span>
                            <span class="inline-block w-1 h-1 ml-1 rounded-full bg-blue-500"></span>
                        </div>
                    </div>

                    <div class="md:flex md:items-start md:-mx-4">
                        <span
                            class="inline-block p-2 text-white bg-teal-500 rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>

                        <div class="mt-4 md:mx-4 md:mt-0">
                            <p class="mt-0 text-gray-500 dark:text-gray-300">
                                Experience Unmatched Comfort and Freshness with Anion Technology: Lisa sanitary napkins
                                infused with the power of negative ions, known as anions, found in refreshing environments
                                like waterfalls, forests, and oceans. We have harnessed this incredible technology to bring
                                exceptional benefits during your menstrual cycle.
                            </p>
                        </div>
                    </div>

                    <div class="md:flex md:items-start md:-mx-4">
                        <span
                            class="inline-block p-2 text-white bg-teal-500  rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>

                        <div class="mt-4 md:mx-4 md:mt-0">


                            <p class=" text-gray-500 dark:text-gray-300">

                                Say Goodbye to Odour and Discomfort: Our Anion technology actively combats odor-causing
                                bacteria, providing you with odor-free and confidence all day long. There should be no
                                worries about unwanted odors interfering with your routine or leisure.
                            </p>
                        </div>
                    </div>

                    <div class="md:flex md:items-start md:-mx-4">
                        <span
                            class="inline-block p-2 text-white bg-teal-500  rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>

                        <div class="mt-4 md:mx-4 md:mt-0">

                            <p class=" text-gray-500 dark:text-gray-300">
                                pH Balance for Optimal Comfort: Lisa's sanitary napkins maintain a balanced pH level,
                                ensuring your intimate area stays healthy and irritation-free. You can rely on our pads to
                                care for you during your period and focus on what matters the most.
                            </p>
                        </div>

                    </div>

                    <div class="md:flex md:items-start md:-mx-4">
                        <span
                            class="inline-block p-2 text-white bg-teal-500  rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>

                        <div class="mt-4 md:mx-4 md:mt-0">

                            <p class=" text-gray-500 dark:text-gray-300">
                                Freshness Redefined: With our anion technology, experience fresh and unique revitalizing
                                comfort and be at your best in what you engage in. Embrace your day with zeal, knowing that
                                Lisa has your back.
                            </p>
                        </div>

                    </div>

                    <div class="md:flex md:items-start md:-mx-4">
                        <span
                            class="inline-block p-2 text-white bg-teal-500  rounded-xl md:mx-4 dark:text-white dark:bg-blue-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z" />
                            </svg>
                        </span>

                        <div class="mt-4 md:mx-4 md:mt-0">

                            <p class=" text-gray-500 dark:text-gray-300">
                                Safe for You and the Environment: Lisa is made with natural materials, such as SAP - Aloe
                                Vera & Corn Pulp and Pure Cotton top sheet, making them biodegradable and eco-friendly.
                                Therefore, you are prioritizing your health and the environment.

                            </p>
                        </div>

                    </div>
                </div>

                <div class=" lg:flex lg:items-center lg:w-1/2 lg:justify-center">
                    <img class="w-[28rem] h-[28rem] object-cover xl:w-[34rem] xl:h-[34rem] rounded-full"
                        src="images\Lisa - XXL - Back Mockup.jpg" alt="">
                </div>
            </div>

            <hr class="border-gray-200 my-12 dark:border-gray-700">

            <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img class='rounded-3xl transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-125  duration-300'
                        src="images\L - Side 1 - Mockup.jpg" />
                </div>

                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img class='rounded-3xl transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-125  duration-300'
                        src="images\Lisa - XL - Back Mockup.jpg" />
                </div>

                <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                    <img class='rounded-3xl transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-125  duration-300'
                        src="images\XXL - Side 1 - Mockup.jpg" />
                </div>

                <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
                    <img class='rounded-3xl transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-125  duration-300'
                        src="images\XL - Side 2 - Mockup.jpg" />
                </div>

                <div class="flex items-center justify-center col-span-2 md:col-span-3 lg:col-span-1">
                    <img class='rounded-3xl transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-125  duration-300'
                        src="images\Lisa - L - Back Mockup.jpg" />
                </div>
            </div>
        </div>
    </section>

    <!-- component -->
    <section class="py-20 bg-stone-100 my-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-10 items-center max-w-6xl mx-auto">
            <div class="px-4 md:mr-6">
                <h3 class="text-4xl pr-6 sm:leading-snug tracking-tight font-bold text-black">
                    Distinctive Features of Lisa,
                </h3>

                <!-- component -->
                <!--Follow link for animation in action https://play.tailwindcss.com/IpRdROqEoQ -->
                <div class="bg-gray-50 flex items-center justify-center mt-5">
                    <div class="relative w-full max-w-lg">
                        <div
                            class="absolute top-0 -left-4 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob ">
                        </div>
                        <div
                            class="absolute top-0 -right-4 w-72 h-72 bg-yellow-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-2000">
                        </div>
                        <div
                            class="absolute -bottom-32 left-20 w-72 h-72 bg-purple-200 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-blob animation-delay-4000">
                        </div>
                        <div class="m-8 relative space-y-4">
                            <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">
                                <div class="flex-1 flex justify-between items-center">
                                    <div class="py-2 w-full bg-gray-300 rounded px-2 text-center"><strong>Unmatched
                                            Comfort</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">
                                <div class="flex-1 flex justify-between items-center">

                                    <div class="py-2 w-full rounded-lg bg-purple-300 px-2 text-center"><strong>Rash-Free
                                            Assurance</strong></div>
                                </div>
                            </div>
                            <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">
                                <div class="flex-1 flex justify-between items-center">
                                    <div class="py-2 w-full rounded-lg bg-gray-300 px-2 text-center"><strong>Thin and Sleek
                                            Design</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">
                                <div class="flex-1 flex justify-between items-center">
                                    <div class="py-2 w-full rounded-lg bg-purple-300 px-2 text-center"><strong>No More Side
                                            Leakage</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">
                                <div class="flex-1 flex justify-between items-center">
                                    <div class="py-2 w-full rounded-lg bg-gray-300 px-2 text-center"><strong>Pure and
                                            Fresh</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 bg-white rounded-lg flex items-center justify-between space-x-8">
                                <div class="flex-1 flex justify-between items-center">
                                    <div class="py-2 w-full rounded-lg bg-purple-300 px-2 text-center"><strong>Anion
                                            Technology for Extra Care</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="absolute bg-blue-200 transform -translate-x-10 relative h-64">
                </div>
                <div
                    class="transform md:rounded-md  bg-white rotate-3 scale-110 translate-x-10 md:shadow-2xl -ml-4 -mt-44 p-12  space-y-2">
                    <div class="px-4 sm:px-0 max-w-5xl mx-auto">
                        <img class='w-full' src="images\Lisa - L - Front Mockup.jpg">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="text-gray-600 body-font">
        <div class="container px-5 py-20 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">DESCRIPTION</h2>
                <!-- Heading start -->
                <div class="text-center mx-auto mb-4 lg:px-20">
                    <h2 class="text-2xl leading-normal mb-2 font-bold text-black">Experience a Revolutionary Menstrual Care
                        with Lisa Anion Sanitary Napkins!</h2>

                    <div class="flex mt-6 justify-center mb-3">
                        <div class="w-16 h-1 rounded-full bg-indigo-500 inline-flex"></div>
                    </div>
                    <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">We are delighted to present
                        our
                        revolutionary Anion Sanitary Napkins, designed to elevate your period experience to a new level.
                        Your
                        comfort, protection, and freshness throughout your menstrual cycle are paramount to our innovative
                        design and technology.</p>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 md:w-1/3">
                    <div
                        class="flex rounded-lg h-full bg-gray-100  p-8 flex-col transition ease-in-out delay-150 hover:bg-red-50 hover:-translate-y-1 hover:scale-110  duration-300">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <i class="far fa-laugh-beam text-white"></i>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Unmatched Comfort</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Lisa Anion Sanitary Napkins feature a super soft cotton
                                top sheet, providing a gentle and luxurious touch against your skin. Embrace the comfort you
                                deserve and say goodbye to rough and uneasy periods!</p>

                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div
                        class="flex rounded-lg h-full bg-gray-100 p-8 flex-col transition ease-in-out delay-150 hover:bg-green-50 hover:-translate-y-1 hover:scale-110  duration-300">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <i class="fas fa-thumbs-up"></i>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Rash-Free Assurance</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">We crafted Lisa especially to be rash-free, ensuring your
                                well-being in our mind. Never worry about irritation or infection. Run a marathon, trek,
                                ride, and be active during your day hassle-free.</p>

                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div
                        class="flex rounded-lg h-full bg-gray-100 p-8 flex-col transition ease-in-out delay-150 hover:bg-blue-50 hover:-translate-y-1 hover:scale-110  duration-300">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <i class="fab fa-think-peaks"></i>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Thin and Sleek Design</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">We believe that menstrual care must not be a burden or
                                restriction. So, we revolutionised our pads to be sleek as your eyeliner, offering you
                                maximum discretion and comfort. Enjoy seamless protection without feeling chained to the
                                floor.</p>

                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap -m-4 pt-5">
                <div class="p-4 md:w-1/3">
                    <div
                        class="flex rounded-lg h-full bg-gray-100 p-8 flex-col transition ease-in-out delay-150 hover:bg-yellow-50 hover:-translate-y-1 hover:scale-110  duration-300">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <i class="fas fa-tint-slash"></i>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">No More Side Leakage</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Feel confident and secure with our reliable leak
                                protection. Lisa Anion Sanitary Napkins are crafted to fit perfectly and stay in place, so
                                you can go about your day without any side leakage concerns.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div
                        class="flex rounded-lg h-full bg-gray-100 p-8 flex-col transition ease-in-out delay-150 hover:bg-teal-50 hover:-translate-y-1 hover:scale-110  duration-300">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <i class="far fa-snowflake"></i>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Pure and Fresh</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">We understand the importance of using safe and natural
                                materials during your span. Lisa is free from artificial fragrances, toxic chemicals,
                                chlorine, or whatever you ever heard.
                            </p>

                        </div>
                    </div>
                </div>
                <div class="p-4 md:w-1/3">
                    <div
                        class="flex rounded-lg h-full bg-gray-100 p-8 flex-col transition ease-in-out delay-150 hover:bg-indigo-50 hover:-translate-y-1 hover:scale-110  duration-300">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
                                <i class="fas fa-hand-holding-heart"></i>
                            </div>
                            <h2 class="text-gray-900 text-lg title-font font-medium">Anion Technology for Extra Care</h2>
                        </div>
                        <div class="flex-grow">
                            <p class="leading-relaxed text-base">Anions naturally combat odor-causing bacteria, maintain a
                                balanced pH level, and promote a fresh feeling throughout the day. With the power of anion
                                technology, our napkins offer additional benefits beyond traditional sanitary napkins.
                            </p>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <!-- component -->
    <div id='faq' class="p-8">
        <div class="bg-white p-4 rounded-lg shadow-xl py-20 mt-12">
            <h4 class="text-4xl font-bold text-gray-800 tracking-widest uppercase text-center">FAQ</h4>
            <p class="text-center text-gray-600 text-sm mt-2"> Some of our customers FAQ's</p>
            <div class="space-y-12 px-2 xl:px-16 mt-12">
                <div class="mt-4 flex">
                    <div>
                        <div class="flex items-center h-16 border-l-4 border-blue-600">
                            <span class="text-4xl text-blue-600 px-4">Q.</span>
                        </div>
                        <div class="flex items-center h-16 border-l-4 border-gray-400">
                            <span class="text-4xl text-gray-400 px-4">A.</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center h-16">
                            <span class="text-lg text-blue-600 font-bold">What are anion sanitary napkins?</span>
                        </div>
                        <div class="flex items-center py-2">
                            <span class="text-gray-500">Anion sanitary napkins are feminine hygiene products that
                                incorporate negative ions (anions) into their materials. These anion sanitary napkins
                                provide benefits, such as odor control and maintaining a pH balance for a fresh and
                                comfortable experience.</span>

                        </div>
                    </div>
                </div>

                <div class="mt-4 flex">
                    <div>
                        <div class="flex items-center h-16 border-l-4 border-blue-600">
                            <span class="text-4xl text-blue-600 px-4">Q.</span>
                        </div>
                        <div class="flex items-center h-16 border-l-4 border-gray-400">
                            <span class="text-4xl text-gray-400 px-4">A.</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center h-16">
                            <span class="text-lg text-blue-600 font-bold">How do anion sanitary napkins control odor?
                            </span>
                        </div>
                        <div class="flex items-center py-2">
                            <span class="text-gray-500"> Anion sanitary napkins utilize the presence of negative ions to
                                help combat odor-causing bacteria. These ions can inhibit bacterial growth and minimize the
                                unpleasant odor associated with menstruation.
                            </span>

                        </div>
                    </div>
                </div>

                <div class="mt-4 flex">
                    <div>
                        <div class="flex items-center h-16 border-l-4 border-blue-600">
                            <span class="text-4xl text-blue-600 px-4">Q.</span>
                        </div>
                        <div class="flex items-center h-16 border-l-4 border-gray-400">
                            <span class="text-4xl text-gray-400 px-4">A.</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center h-16">
                            <span class="text-lg text-blue-600 font-bold">Are anion sanitary napkins safe to use?</span>
                        </div>
                        <div class="flex items-center py-2">
                            <span class="text-gray-500"> Yes, anion sanitary napkins are safe to use. In any case of
                                specific concerns or sensitivities, healthcare professional consultation is
                                mandatory.</span>

                        </div>
                    </div>
                </div>

                <div class="mt-4 flex">
                    <div>
                        <div class="flex items-center h-16 border-l-4 border-blue-600">
                            <span class="text-4xl text-blue-600 px-4">Q.</span>
                        </div>
                        <div class="flex items-center h-16 border-l-4 border-gray-400">
                            <span class="text-4xl text-gray-400 px-4">A.</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center h-16">
                            <span class="text-lg text-blue-600 font-bold"> Can anion sanitary napkins irritate?</span>
                        </div>
                        <div class="flex items-center py-2">
                            <span class="text-gray-500">Anion sanitary napkins are typically made with natural materials.
                                It is soft and breathable. It reduces the chances of irritation. However, not everyone has
                                the same skin sensitivity, and some people may be more prone to irritation. If you
                                experience any discomfort or irritation, discontinue use and consult a healthcare
                                professional.</span>

                        </div>
                    </div>
                </div>

                <div class="mt-4 flex">
                    <div>
                        <div class="flex items-center h-16 border-l-4 border-blue-600">
                            <span class="text-4xl text-blue-600 px-4">Q.</span>
                        </div>
                        <div class="flex items-center h-16 border-l-4 border-gray-400">
                            <span class="text-4xl text-gray-400 px-4">A.</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center h-16">
                            <span class="text-lg text-blue-600 font-bold">Are anion sanitary napkins environmentally
                                friendly?</span>
                        </div>
                        <div class="flex items-center py-2">
                            <span class="text-gray-500"> Anion sanitary napkins are always being designed with eco-friendly
                                considerations. We tend to look for products that use biodegradable or sustainable materials
                                and have minimal environmental impact. </span>

                        </div>
                    </div>
                </div>

                <div class="mt-4 flex">
                    <div>
                        <div class="flex items-center h-16 border-l-4 border-blue-600">
                            <span class="text-4xl text-blue-600 px-4">Q.</span>
                        </div>
                        <div class="flex items-center h-16 border-l-4 border-gray-400">
                            <span class="text-4xl text-gray-400 px-4">A.</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center h-16">
                            <span class="text-lg text-blue-600 font-bold">Can anion sanitary napkins be used
                                overnight?</span>
                        </div>
                        <div class="flex items-center py-2">
                            <span class="text-gray-500"> Yes, Anion sanitary napkins are safe to use overnight. It provides
                                longer coverage and higher absorbency.
                            </span>

                        </div>
                    </div>
                </div>

                <div class="mt-4 flex">
                    <div>
                        <div class="flex items-center h-16 border-l-4 border-blue-600">
                            <span class="text-4xl text-blue-600 px-4">Q.</span>
                        </div>
                        <div class="flex items-center h-16 border-l-4 border-gray-400">
                            <span class="text-4xl text-gray-400 px-4">A.</span>
                        </div>
                    </div>
                    <div>
                        <div class="flex items-center h-16">
                            <span class="text-lg text-blue-600 font-bold">Can anion sanitary napkins be used by individuals
                                with sensitive skin?</span>
                        </div>
                        <div class="flex items-center py-2">
                            <span class="text-gray-500">Anion sanitary napkins are often dermatologically tested for safety
                                and suitable for sensitive skin. Some individuals may still experience sensitivities or
                                allergies due to various skin types.
                                <br><br>It is advisable to check the product's suitability or consult a healthcare
                                professional if you have any known skin sensitivities.
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- component -->
    <style>
        #spin {}

        #spin:after {
            content: "";
            animation: spin 10s linear infinite;
        }

        @keyframes spin {
            0% {
                content: "Vision";
            }

            20% {
                content: "Vision";
            }

            40% {
                content: "Vision";
            }

            60% {
                content: "Vision";
            }

            80% {
                content: "Vision";
            }

            100% {
                content: "Vision";
            }
        }
    </style>



    <div class='flex items-center justify-center'>
        <div class="bg-slate-800">
            <div
                class="bg-slate-700 shadow-md  rounded rounded-xl m-16 border border-indigo-500/50 shadow-xl shadow-indigo-500/50">
                <div class="flex flex-col p-10  px-16 space-y-6 items-center text-center">
                    <h1 class="font-light md:text-6xl text-5xl text-white tracking-wide ">Our
                        <span id="spin"
                            class="text-transparent font-normal bg-clip-text bg-gradient-to-r from-indigo-400 to-cyan-300 "></span>
                    </h1>
                    <p class="text-gray-400 md:text-xl text-xl px-18">We wish to Revolutionising the Medical Textile
                        Industry with seamless prospects. As our foundation, we have started our Voyage in Healthcare and
                        Hygiene Products. With our own RND team for each sector, we will grow more stones to add a layer to
                        our genuine success.</p>
                    <a href="mailto:lisahealthcare01@gmail.com"
                        class="rounded-full bg-indigo-500 shadow-lg shadow-indigo-500/50 text-white text-lg py-4 px-6">Contact
                        Us
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- component -->
    <dh-component>

        <div class="bg-gray-100">
            <div class="container mx-auto flex flex-col items-center py-12 sm:py-24">
                <div class="w-11/12 sm:w-3/4 lg:flex justify-center items-center flex-col mx-auto mb-5 sm:mb-10">
                    <h1
                        class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl text-center text-gray-800 font-black leading-7 md:leading-10">
                        Our

                        <span class="text-indigo-700">Mission</span>

                    </h1>

                    <ul class='list-disc'>
                        <li class="mt-5 sm:mt-10  text-gray-600 font-normal text-sm sm:text-lg">
                            Currently, we are doing the necessary RND for sanitary napkins. We wanted to make "your days"
                            easy
                            as our first step. We are diving deep and finding appropriate solutions and materials to cope
                            with
                            our projects. </li>

                        <li class="mt-5 sm:mt-10  text-gray-600 font-normal  text-sm sm:text-lg">
                            With our Anion Sanitary Napkins, you will experience a whole new level of comfort and safety for
                            you
                            and the environment. We are working towards individual disposable bags along with Sanitary
                            Napkins.
                        </li>

                        <li class="mt-5 sm:mt-10  text-gray-600 font-normal text-sm sm:text-lg">As
                            you read this, we are undertaking a new project. We build, break, bury, and burn to validate the
                            benefits. Let Lisa take care of you!</li>
                    </ul>
                </div>

            </div>
        </div>
    </dh-component>

    <!-- component -->
    <div id='contact' class="py-4 bg-purple-500 text-white">
        <div class="container mx-auto flex flex-col md:flex-row my-12 md:my-10">
            <div class="flex flex-col w-full lg:w-2/5 p-8">
                <p class="text-3xl md:text-5xl text-gray-50 my-4 leading-relaxed md:leading-snug">Registered Address</p>
                <p class="font-sans text-sm md:text-lg my-2 md:my-4"><svg class="inline-block fill-current mr-2"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z" />
                    </svg>Lisa enterprise,3/311, Arockia Matha Street,N. Panjampatty,
                    Dindigul- 624 303.</p>
                <p class="font-sans text-sm md:text-lg my-2 md:my-4"><svg class="inline-block fill-current mr-2"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M12 12.713l-11.985-9.713h23.971l-11.986 9.713zm-5.425-1.822l-6.575-5.329v12.501l6.575-7.172zm10.85 0l6.575 7.172v-12.501l-6.575 5.329zm-1.557 1.261l-3.868 3.135-3.868-3.135-8.11 8.848h23.956l-8.11-8.848z" />
                    </svg> lisahealthcare01@gmail.com</p>
                <p class="font-sans text-sm md:text-lg my-2 md:my-4"><svg class="inline-block fill-current mr-2"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z" />
                    </svg>+91 451 2454545</p> <br> <br>

                <p class="text-3xl md:text-5xl text-gray-50 my-4 leading-relaxed md:leading-snug">Trade Address</p>
                <p class="font-sans text-sm md:text-lg my-2 md:my-4"><svg class="inline-block fill-current mr-2"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-4.198 0-8 3.403-8 7.602 0 4.198 3.469 9.21 8 16.398 4.531-7.188 8-12.2 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.343-3 3-3 3 1.343 3 3-1.343 3-3 3z" />
                    </svg>Ground floor,
                    SR compels,
                    Madathu Anthoniyar Street, N. Panjampatty,
                    Dindigul-624 303</p>

                <p class="font-sans text-sm md:text-lg my-2 md:my-4"><svg class="inline-block fill-current mr-2"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M20 22.621l-3.521-6.795c-.008.004-1.974.97-2.064 1.011-2.24 1.086-6.799-7.82-4.609-8.994l2.083-1.026-3.493-6.817-2.106 1.039c-7.202 3.755 4.233 25.982 11.6 22.615.121-.055 2.102-1.029 2.11-1.033z" />
                    </svg>+91 7418880025</p> <br> <br>

            </div>
            <div class=" flex flex-col lg:w-3/5 justify-center w-full lg:-mt-12">
                <div class="container">
                    <div class="relative flex flex-col min-w-0 break-words w-full">
                        <div class="flex-auto p-5">
                            <img src="images\lisa prods n.png" alt="contact image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-footer></x-footer>
    <script>
        jQuery(document).ready(function($) {

            $('.thumb-img a').on("click", function(e) {
                e.preventDefault();
                $('.thumb-previewer img').attr("src", $(this).attr("href"));
            });

        });
    </script>
@endsection
