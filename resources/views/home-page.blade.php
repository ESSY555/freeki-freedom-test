<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/footer-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Charis+SIL:ital,wght@0,400;0,700;1,400;1,700&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">
    <title>Freeki</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .input_des {
                content-visibility: auto;
                padding: 0.5rem;
            }
        }
    </style>


</head>

<body>










    <div class="bg-green-100/20 ">

        <nav class="bg-[#FFD6D6]/20   fixed w-full z-20 top-0 start-0 border-b border-gray-200 ">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap text-[#54BD95]">Bicass</span>
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button"
                        class=" text-[#A6A6A6] gap-3 hover:bg-blue-800 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-4 py-2 mx-3 text-center dark:hover:bg-blue-700 ">Log
                        in</button>
                    <button type="button"
                        class="text-white hover:bg-blue-800 focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-4 py-2 text-center  dark:hover:bg-[#54BD95] bg-[#54BD95]">Sign
                        Up
                    </button>

                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4  text-[#A6A6A6]  md:space-x-8 rtl:space-x-reverse md:flex-row">
                        <li>
                            <a href="#" aria-current="page" class="text-[#000000]">Home</a>
                        </li>
                        <li>
                            <a href="#">Product</a>
                        </li>
                        <li>
                            <a href="#">FAQ</a>
                        </li>
                        <li>
                            <a href="#">Block</a>
                        </li>
                        <li>
                            <a href="#">About
                                Us</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>


        <div class="w-10/12 m-auto pt-20 md:pt-[140px]">
            <div class="flex flex-col md:flex-row justify-between md:gap-4 space-y-8 items-center">
                <div class="order-1 md:order-0">
                    <div class="text-center md:w-[555px]">
                        <p class="text-[50px] md:text-[80px] font-bold pb-5 ">We’re here to Increase your Productivity
                        </p>
                        <img src="{{ asset('images/arc.png') }}" class="max-w-[350px] md:max-w-[701px]">
                        <p class="text-[18px] text-start py-10">Let's make your work more organized and easy using the
                            <br>Taskio
                            Dashboard with many of the
                            latest <br>features in managing work every day.
                        </p>
                    </div>
                    <div class="flex flex-row gap-4">
                        <button class="bg-[#54BD95] text-white rounded-full px-8 py-3">Try free trial</button>
                        <div class="flex flex-row items-center gap-4">
                            <div class="circle">
                                <img src="{{ asset('images/play.png') }}" class="img-fluid play-imag">
                            </div>
                            <span class="px-3 text-nowrap">View Demo</span>
                        </div>
                    </div>
                </div>
                <div class="order-0 md:order-1 m-auton max-w-[350px] md:max-w-[701px]">
                    <img src="{{ asset('images/man.png') }}" class="">
                </div>
            </div>

            <div class="py-20">
                <div class="pb-5">
                    <h2 class="text-[40px] font-bold text-center">
                        More than 25,000 teams use Collabs
                    </h2>
                </div>
                <div class="grid grid-cols-3 md:grid-cols-5 items-center gap-4 py-4 justify-center">
                    @php
                        $teams = [
                            ['image' => 'unsplash.png', 'text' => 'Unsplash'],
                            ['image' => 'notion.png', 'text' => 'Notion'],
                            ['image' => 'intercom.png', 'text' => 'INTERCOM'],
                            ['image' => 'descript.png', 'text' => 'descript'],
                            ['image' => 'grammarly.png', 'text' => 'Team 5'],
                        ];
                    @endphp
                    @foreach ($teams as $key => $team)
                        <div class="">
                            <div class="team-container p-3">
                                <img src="{{ asset('images/' . $team['image']) }}"
                                    class="team-image image-{{ $key }}">
                                {{-- <div class="team-info">
                                <b class="team-title title-{{ $key }}">{{ $team['text'] }}</b>
                            </div> --}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="bg-[#F9F8FE] py-10 md:py-20">
            <div class="w-10/12 m-auto">
                <div class="flex flex-col md:flex-row justify-around space-y-8 md:gap-8 items-start">

                    <div class="">
                        <p class="text-[35px] md:text-[50px] font-bold">How we support our<br> partner all over the
                            world</p>
                        <p class="pt-3 text-[#A6A6A6] pb-20">SaaS has become a common delivery model for many business
                            applications,
                            <br> including office software, messaging software, payroll processing software,
                            <br> DBMS software, and management software.
                        </p>
                        <div class="flex flex-row gap-8  ">
                            <div class="text-start space-y-4">
                                <div class="flex flex-row gap-2">
                                    @for ($i = 0; $i < 5; $i++)
                                        <img src="{{ asset('images/start.png') }}" class="">
                                    @endfor
                                </div>
                                <p style=""><span class="font-bold">4.9<span> / 5 rating</p>
                                <p class="text-[#A6A6A6]">databricks</p>
                            </div>
                            <div class="text-start space-y-4">
                                <div class="flex flex-row gap-2">
                                    @for ($i = 0; $i < 5; $i++)
                                        <img src="{{ asset('images/start.png') }}" class="">
                                    @endfor
                                </div>
                                <p style=""><span class="font-bold">4.9<span> / 5 rating</p>
                                <p class="text-[#A6A6A6]">Chainalysis</p>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-8">
                        <div class="flex flex-row items-start gap-3 justify-start   ">

                            <img src="{{ asset('images/small/act.png') }}" class=" bg-white p-3 shadow">

                            <div class="space-y-4">
                                <p class="text-[20px] md:text-[28px] font-bold">Publishing</p>
                                <p class="text-[16px] md:text-[18px] text-[#A6A6A6]">Plan, collaborate, and publish
                                    your content<br>
                                    that drives
                                    meaningful engagement and
                                    growth<br> for your brand.</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-start gap-3 justify-start   ">
                            <img src="{{ asset('images/small/pie.png') }}" class=" bg-white p-3 shadow">

                            <div class="space-y-4">
                                <p class="text-[20px] md:text-[28px] font-bold">Analytics</p>
                                <p class="text-[16px] md:text-[18px] text-[#A6A6A6]">Analyze your performance and
                                    create gorgeous
                                    reports</p>
                            </div>
                        </div>
                        <div class="flex flex-row items-start gap-3 justify-start ">


                            <img src="{{ asset('images/small/com.png') }}" class=" bg-white p-3 shadow">

                            <div class="space-y-4">
                                <p class="text-[20px] md:text-[28px] font-bold">Engagement</p>
                                <p class="text-[16px] md:text-[18px] text-[#A6A6A6]">Quickly navigate and engage with
                                    your audience
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-white py-20
        ">
            <div class="w-10/12 m-auto">
                <div class="flex flex-col md:flex-row p-2 space-y-4 justify-between items-start">

                    <p class="text-[50px] basis-1/4 font-[400]">Our Features you can get</p>


                    <p class="basis-2/4">We offer a variety of interesting features that you can help increase yor
                        productivity at
                        work and manage your project easily
                    </p>


                    <button class="bg-[#54BD95] text-white rounded-full px-8 py-3">Get
                        Started</button>

                </div>


                <div class="py-5 md:py-10">
                    <div class="flex flex-col md:flex-row md:gap-4">
                        <div class="p-2 space-y-4">
                            <img src="{{ asset('images/features/noone.png') }}"
                                class="max-w-[300px] md:max-w-[364px]">
                            <p class="Collboration-Teams text-[30px]">Collboration Teams </p>
                            <p class="virtual-project text-[18px] text-[#A6A6A6]">Here you can handle projects together
                                with team
                                virtually</p>
                        </div>
                        <div class="p-2 space-y-4">
                            <img src="{{ asset('images/features/notwo.png') }}"
                                class="max-w-[300px] md:max-w-[364px]">

                            <p class="Collboration-Teams text-[30px]">Cloud Storage</p>
                            <p class="virtual-project text-[18px] text-[#A6A6A6]">No nedd to worry about storage
                                because we provide
                                storage up to
                                2 TB
                            </p>
                        </div>
                        <div class="p-2 space-y-4">
                            <img src="{{ asset('images/features/nothree.png') }}"
                                class="max-w-[300px] md:max-w-[364px]">

                            <p class="Collboration-Teams text-[30px] ">Daily Analytics </p>
                            <p class="virtual-project text-[18px] text-[#A6A6A6]">We always provide useful informatin
                                to make it
                                easier for you
                                every
                                day
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="py-10 w-10/12 m-auto">
            <div class="flex flex-col space-y-8 md:flex-row justify-between pt-4">
                <div class="col-span-6 md:col-span-4 space-y-4">
                    <div class="space-y-4">
                        <b class="text-[40px]">What Benefit Will<br> You Get</b>
                        @php
                            $benefits = [
                                'Free Consulting With Expert Saving Money',
                                'Online Banking',
                                'Investment Report Every Month',
                                'Saving Money For The Future',
                                'Online Transaction',
                            ];
                        @endphp

                        @foreach ($benefits as $benefit)
                            <div class="flex flex-row md:col-span-4 text-center items-center gap-2 pt-3">
                                <img src="{{ asset('images/subtract.png') }}" class="w-auto h-auto object-fit">
                                <p class="text-[16px] md:text-[18px] text-[#A6A6A6]">{{ $benefit }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <img src="{{ asset('images/laptop.JPG') }}" class="max-w-[300px] md:max-w-[500px]">
                    </div>
                </div>
            </div>



            <!-- fifth div-->
            <div class="text-center py-10">
                <h1 class="text-[50px] font-bold w-10/12 md:w-5/12 m-auto">Choose Plan
                    That’s Right For You</h1>
                <p class="pt-5">Choose plan that works best for you, feel free to contact us</p>
                <div class="flex flex-row justify-center items-center p-4">
                    <div class="flex justify-center items-center mt-4">
                        <div
                            class="flex flex-row justify-center text-center items-center bg-white gap-3 shadow-sm px-4 p-3 rounded-2xl space-x-3">
                            <p class="mb-0 text-nowrap">Bill Monthly</p>
                            <button class="bg-[#54BD95] rounded-2xl text-white px-4 py-4">Bill Yearly</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>




        <!-- sixth div-->




        <div class="py-10 md:py-20">
            <div class="w-10/12 m-auto flex gap-y-8 flex-col md:flex-row justify-between items-center">

                <div class="rounded-3xl w-full  max-w-[374px] shadow-sm bg-white p-5">
                    <div class="">
                        <div class="text-center space-y-4 bg-white">
                            <h1 class="font-bold text-[30px]">Free</h1>
                            <div class="flex justify-center items-center">
                                <p class="new-super text-[#A6A6A6] w-45 text-center">Have a go and test your
                                    <br>superpowers
                                </p>
                            </div>

                            <p class="relative"><sup class="absolute top-3 text-[#A6A6A6]">$</sup><b
                                    class="text-[50px]">0</b></p>
                        </div>
                        <div class="users-file bg-[#F9FAFB] rounded-2xl py-5">
                            @php
                                $benefits = [
                                    '2 Users',
                                    '2 Files',
                                    'Public Share & Comments',
                                    'Chat Support ',
                                    'New income apps',
                                ];
                            @endphp
                            @foreach ($benefits as $benefit)
                                <div class="flex flex-row md:col-span-4 text-center items-center gap-2 p-4">
                                    <img src="{{ asset('images/subtract.png') }}" class="max-w-[30px]">
                                    <p class="text-[16px] md:text-[18px] ">{{ $benefit }}</p>
                                </div>
                            @endforeach
                            <div class="flex flex-row justify-center">
                                <button class="mb-4 w-8/12 m-auto shadow-sm bg-white text-[#54BD95] p-4 rounded-full">
                                    Signup for free
                                </button>
                            </div>


                        </div>

                    </div>
                </div>

                <div class="rounded-3xl  w-full max-w-[374px] text-white  shadow-sm bg-[#54BD95] p-5">
                    <div class="">
                        <div class="text-center space-y-4">
                            <h1 class="font-bold text-[30px]">Free</h1>
                            <div class="flex justify-center items-center">
                                <p class="new-super text-white w-45 text-center text-[18px]">Experiment the power <br>of infinite possibilities
                                </p>
                            </div>

                            <p class="relative"><sup class="absolute top-3 text-white">$</sup><b
                                    class="text-[50px]">8</b>
                            </p>

                            <div class="flex flex-row justify-center">
                                <button class="mb-4 w-6/12 m-auto shadow-sm bg-[#85DAB9] text-white p-4 rounded-xl">
                                    Save $50 a year
                                </button>
                            </div>
                        </div>
                        <div class="users-file bg-white text-black rounded-2xl py-5">
                            @php
                                $benefits = [
                                    '4 Users',
                                    'All apps',
                                    'Unlimited editable exports',
                                    'Folders and collaboration ',
                                    'All incoming apps',
                                ];
                            @endphp
                            @foreach ($benefits as $benefit)
                                <div class="flex flex-row md:col-span-4 text-center items-center gap-2 p-4">
                                    <img src="{{ asset('images/subtract.png') }}" class="max-w-[30px]">
                                    <p class="text-[16px] md:text-[18px] ">{{ $benefit }}</p>
                                </div>
                            @endforeach
                            <div class="flex flex-row justify-center">
                                <button class="mb-4 w-8/12 m-auto shadow-sm bg-[#54BD95] text-white p-4 rounded-full">
                                    Go to pro
                                </button>
                            </div>


                        </div>

                    </div>
                </div>

                <div class="rounded-3xl  w-full max-w-[374px] shadow-sm bg-white p-5">
                    <div class="">
                        <div class="text-center space-y-4 bg-white">
                            <h1 class="font-bold text-[30px]">Free</h1>
                            <div class="flex justify-center items-center">
                                <p class="new-super text-[#A6A6A6] w-45 text-center">
                                    Unveil new superpowers and <br>join the Design Leaque
                                </p>
                            </div>

                            <p class="relative"><sup class="absolute top-3 text-[#A6A6A6]">$</sup><b
                                    class="text-[50px]">0</b></p>
                        </div>
                        <div class="users-file bg-[#F9FAFB] rounded-2xl py-5">
                            @php
                                $benefits = [
                                    'All the features of pro plan',
                                    'Account success Manager',
                                    'Single Sign-On (SSO)',
                                    'Co-conception pogram ',
                                    'Collaboration-Soon',
                                ];
                            @endphp
                            @foreach ($benefits as $benefit)
                                <div class="flex flex-row md:col-span-4 text-center items-center gap-2 p-4">
                                    <img src="{{ asset('images/subtract.png') }}" class="max-w-[30px]">
                                    <p class="text-[16px] md:text-[18px] ">{{ $benefit }}</p>
                                </div>
                            @endforeach
                            <div class="flex flex-row justify-center">
                                <button class="mb-4 w-8/12 m-auto shadow-sm bg-white text-[#54BD95] p-4 rounded-full">
                                    Goto Business
                                </button>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>


        {{-- footer --}}

        <div class="bg-[#161C28] py-5 md:py-12 text-white">
            <div class="w-10/12 m-auto">
                <div class="flex flex-col md:flex-row justify-between space-y-8 md:gap-12">
                    <div class="basis-1/2 space-y-4">
                        <p class="people-are-saying text-[50px]">People are Saying About DoWhith</p>
                        <p class="everything-you-need text-[#A6A6A6] text-[18px]">Everything you need to accept payment
                            and grow your money or
                            manage
                            anywhere on the planet</p>
                        <img src="{{ asset('images/Group 212.PNG') }}" class="">
                        <p class="i-am-very-helped text-[#A6A6A6] text-[18px]">I am very helped by this E-wallet
                            application, my
                            days are very easy to use this application and its very
                            helpful in my life, even I can pay a short time 😍</p>
                        <p class="aria-zinario">_ Aria Zinanrio</p>
                        <div class="flex flex-row justify-start mt-10 items-center pt-2 gap-2">
                            <img src="{{ asset('images/Ellipse 54.png') }}" class="img-fluid">
                            <img src="{{ asset('images/Ellipse 55.png') }}" class="img-fluid">
                            <img src="{{ asset('images/Ellipse 56.png') }}" class="img-fluid">
                            <img src="{{ asset('images/Ellipse 57.png') }}" class="img-fluid">
                            <img src="{{ asset('images/Group 215.png') }}" class="img-fluid">
                        </div>
                    </div>

                    <div class="text-light basis-1/2 w-full h-full bg-[#222938] rounded-2xl p-10">
                        <div>
                            <div class="d-flex justify-content-center mb-3">
                                <div class="">
                                    <div class="text-center w-full flex flex-row justify-center">
                                        <img src="{{ asset('images/features/getstarted.png') }}"
                                            class="h-[86px] w-[72px] text-center">
                                    </div>

                                    <p class="Get-Started pt-3 text-center text-[30px]">Get Started</p>
                                </div>
                            </div>

                            <form>
                                <div class="mb-3 space-y-4">
                                    <label for="inputEmail" class="font-light mb-3">Email address</label>
                                    <input type="email" class="p-3 rounded-xl w-full"
                                        placeholder="Enter your email" id="inputEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-5 space-y-4">
                                    <label for="inputMessage" class="font-light mb-3">Message</label>
                                    <textarea class="p-3 rounded-xl w-full" id="inputMessage" placeholder="What do you say" rows="3"></textarea>
                                </div>
                                <button type="submit"
                                    class="bg-[#54BD95] text-white py-3 rounded-2xl w-full ">Request
                                    Demo</button>
                                <p class="text-[14px] mt-3 font-light text-end">or Start Free Trial</p>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="flex flex-col md:flex-row space-y-8 items-end justify-between py-10 ">
                    <div class="">
                        <p class="Biccas text-[#54BD95] text-[50px]">Biccas</p>
                        <p class="i-am-very-helped pt-4">Get started now try our product</p>
                        <div class="input-arrow mt-4">
                            <div class="rounded-full overflow-hidden w-full  border flex flex-row justify-between">
                                <input type="email" class="p-3 bg-[#161C28] " aria-describedby="emailHelp"
                                    placeholder="Enter your email here">
                                <img src="{{ asset('images/arrow.png') }}" class="bg-[#54BD95] p-3 rounded-full">
                            </div>
                        </div>

                    </div>

                    <div
                        class="flex md: flex-col md:w-content flex-col md:flex-row items-start md:items-end space-y-8 md:gap-8 ">
                        <div class=" space-y-4 ">
                            <p class="Support text-light">Support</p>
                            <p class="i-am-very-helped">Help centre</p>
                            <p class="i-am-very-helped">Account information</p>
                            <p class="i-am-very-helped">About</p>
                            <p class="i-am-very-helped">Contact us</p>
                        </div>
                        <div class=" space-y-4  pb-4">
                            <p class="Support text-light">Help and Solution</p>
                            <p class="i-am-very-helped">Talk to support</p>
                            <p class="i-am-very-helped">Support docs</p>
                            <p class="i-am-very-helped">System status</p>
                            <p class="i-am-very-helped">Covid responde</p>
                        </div>
                        <div class=" space-y-4 ">
                            <p class="Support text-light">Product</p>
                            <p class="i-am-very-helped">Update</p>
                            <p class="i-am-very-helped">Security</p>
                            <p class="i-am-very-helped">Beta test</p>
                            <p class="i-am-very-helped">Pricing product</p>

                        </div>

                    </div>

                </div>
                <div class="flex flex-col text-center md:flex-row justify-between items-center">
                    <p class="copyright">© 2022 Biccas Inc. Copyright and rights reserved</p>
                    <div class="flex flex-row gap-4">
                        <p class="terms-condition text-nowrap">Terms and Condtions <span class="dot">.</span>
                        </p>
                        <span class="Privacy-Policy">Privacy Policy</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- JavaScript and dependencies (Popper.js and jQuery) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
