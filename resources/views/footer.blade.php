<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/footer-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Charis+SIL:ital,wght@0,400;0,700;1,400;1,700&family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <title>freeki</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Biccas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a class="btn btn-outline-dark me-2" href="#">Login</a>
                    <a class="btn btn-dark" href="#">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
        <div class="row justify-content-center main pt-5">
            <div class="col-11 col-md-5 col-lg-5 pb-5 column-stretch">
                <div class="text-center">
                    <h1>We’re here to Increase<br> your Productivity</h1>
                    <img src="{{ asset('images/Vector 32.svg') }}" class="img-fluid pt-5 pb-5">
                    <p>Let's make your work more organized and easy using the <br>Taskio Dashboard with many of the latest <br>features in managing work every day.</p>
                </div>
                <div class="d-flex justify-content-center pt-3">
                    <button class="btn btn-success rounded-pill text-nowrap">Try free trial</button>
                    <div class="d-flex align-items-center px-5">
                        <div class="circle">
                            <img src="{{ asset('images/Stroke 3.svg') }}" class="img-fluid play-imag">
                        </div>
                        <span class="px-3 text-nowrap">View Demo</span>
                    </div>
                </div>
            </div>
            <div class="col-11 col-md-5 col-lg-5 pb-5">
                <img src="{{ asset('images/Group 138.svg') }}" class="img-fluid">
            </div>
        </div>

        <div class="container-fluid pt-5">
            <div class="d-flex justify-content-center">
                <h2 class="text-center align-items-center pt-5 pb-5">
                    More than 25,000 teams use Collabs
                </h2>
            </div>
            <div class="row justify-content-center">
                @php
                $teams = [
                    ['image' => 'Group 141.svg', 'text' => 'Unsplash'],
                    ['image' => 'Group 142.svg', 'text' => 'Notion'],
                    ['image' => 'Group 144.svg', 'text' => 'INTERCOM'],
                    ['image' => 'Group 145.svg', 'text' => 'descript'],
                    ['image' => 'Group 146.svg', 'text' => 'Team 5'],
                ];
                @endphp
                @foreach($teams as $key => $team)
                    <div class="col-4 col-sm-4 col-xl-2 col-md-4 col-lg-4 mb-3 ">
                        <div class="team-container p-3">
                            <img src="{{ asset('images/' . $team['image']) }}" class="team-image image-{{ $key }}">
                            {{-- <div class="team-info">
                                <b class="team-title title-{{ $key }}">{{ $team['text'] }}</b>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>

        <div class="second-div container-fluid">
            <div class="">
                <div class="row justify-content-center">

                        <div class="col-11 col-md-5 col-lg-5 pb-5 column-stretch">
                            <h1>How we support our<br> partner all over the world</h1>
                            <p class="pt-3">SaaS has become a common delivery model for many business applications,
                                <br> including office software, messaging software, payroll processing software,
                                <br> DBMS software, and management software.</p>
                            <div class="d-flex pt-5 mt-auto">
                                <div class="text-center">
                                    <img src="{{ asset('images/Group 152.svg') }}" class="">
                                    <b style="display: block">4.9 / 5 rating</b>
                                    <p>databricks</p>
                                </div>
                                <div class="text-center px-5">
                                    <img src="{{ asset('images/Group 152 (1).svg') }}" class="">
                                    <b style="display: block">4.9 / 5 rating</b>
                                    <p>Chainalysis</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-11 col-md-5 col-lg-5 pb-5 column-stretch">
                            <div class="d-flex justify-content-space-around mb-3 pt-3">
                                <div>
                                    <img src="{{ asset('images/Vector.svg') }}" class="img-fluid zigzage">
                                </div>
                                <div class="px-4">
                                    <b class="publishing">Publishing</b>
                                    <p>Plan, collaborate, and publish your content<br> that drives meaningful engagement and growth<br> for your brand.</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-space-around mb-3">
                                <div>
                                    <img src="{{ asset('images/Vector.svg') }}" class="img-fluid zigzage">
                                </div>
                                <div class="px-4">
                                    <b class="publishing">Analytics</b>
                                    <p>Analyze your performance and create gorgeous reports</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-space-around mb-3 mt-auto">
                                <div>
                                    <img src="{{ asset('images/Vector.svg') }}" class="img-fluid zigzage">
                                </div>
                                <div class="px-4">
                                    <b class="publishing">Engagement</b>
                                    <p>Quickly navigate and engage with your audience</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid second-main-part pb-5">
            <div class="row justify-content-between justify-content-center our-feature p-3">
                <div class="col-md-4 p-4"><h1>Our Features<br> you can get</h1></div>
             <div class="col-md-4 pt-5">   <p>We offer a variety of interesting features that you<br> can help increase yor productivity at work <br>and manage your projrct easily</p></div>
               <div class="col-md-4">  <button class="btn btn-success rounded-pill text-nowrap butt-get-started mt-5" style="float: right">Get Started</button></div>
            </div>


                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <img src="{{ asset('images/Frame 247.svg') }}" class="img-fluid w-100" style="object-fit: cover;">
                            <p class="Collboration-Teams ">Collboration Teams </p>
                            <p  class="virtual-project">Here you can handle projects together with team virtually</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/Frame 53.svg') }}" class="img-fluid w-100" style="object-fit: cover;">
                            <p class="Collboration-Teams ">Cloud Storage</p>
                            <p  class="virtual-project">No nedd to worry about storage because we provide storage up to 2 TB</p>
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('images/Frame 54.svg') }}" class="img-fluid w-100" style="object-fit: cover;">
                            <p class="Collboration-Teams ">Daily Analytics </p>
                            <p  class="virtual-project">We always provide useful informatin to make it easier for you every day</p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="container-fluid second-main-part pt-5">
                <div class="row justify-content-center">
                    <div class="col-11 col-md-6 col-lg-7 number1">
                        <div>
                            <b class="what-benefit">What Benefit <br> Will You Get</b>
                            @php
                                $benefits = [
                                    "Free Consulting With Expert Saving Money",
                                    "Online Banking",
                                    "Investment Report Every Month",
                                    "Saving Money For The Future",
                                    "Online Transaction"
                                ];
                            @endphp
                            @foreach($benefits as $benefit)
                            <div class="d-flex align-items-center benefit-section">
                                <img src="{{ asset('images/circle 1.svg') }}" class="img-fluid">
                                <p class="pt-3 free-consulting">{{ $benefit }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-11 col-md-6 col-lg-5 number2 justify-content-center align-items-center">
                        <div class="laptop">
                            <img src="{{ asset('images/Rectangle 48.svg') }}" class="img-fluid lapi">
                            <img src="{{ asset('images/Group 110.svg') }}" class="img-fluid amanda-young">
                            <img src="{{ asset('images/Group 60.svg') }}" class="img-fluid total-income">
                            <img src="{{ asset('images/Group 113.svg') }}" class="img-fluid group-113">
                            <div class="circle-1 d-flex align-items-center">
                               <p> <img src="{{ asset('images/circle 1.svg') }}" class="img-fluid"></p>
                                <p class="text-nowrap money-transfer">Money Transfer Successful</p>
                            </div>
                        </div>
                    </div>
                </div>

                  <!-- fifth div-->
                <div class="text-center pt-5">
                    <h1 class="choose-plan">Choose Plan<br>
                        That’s Right For You</h1>
                        <p class="choose-plan-that-work pt-5">Choose plan that works best for you, feel free to contact us</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="d-flex justify-content-center align-items-center mt-4">
                                <div class="d-flex justify-content-center align-items-center shadow-sm p-2 month-button text-center">
                                    <p class="mb-0 bill-monthly text-nowrap">Bil Monthly</p>
                                    <button class="btn btn-success rounded-pill text-nowrap px-4 py-2">Bil Yearly</button>
                                </div>
                            </div>
                        </div>

            </div>
            </div>




            <!-- sixth div-->




            <div class="row justify-content-center justify-content-around mt-5 container-fluid">


      <div class="col-11 col-md-4 number1 rounded-5 mb-5">
        <div class="shadow-sm six-roun">
            <div class="text-center">
                <h1>free</h1>
                <p  class="new-super">Have a go  and test your<br>  superpowers</p>
                <p class="superscript"><sup>$</sup><b class="zero">0</b></p>
              </div>
           <div class="users-file">
            @php
            $benefits = [
                "2 Users",
                "2 Files",
                "Public Share & Comments",
                "Chat Support ",
                "New income apps"
            ];
        @endphp
        @foreach($benefits as $benefit)
        <div class="d-flex align-items-center benefit-section">
            <img src="{{ asset('images/circle 1.svg') }}" class="img-fluid">
            <p class="pt-3 free-consulting">{{ $benefit }}</p>
        </div>
        @endforeach
        <div class="d-flex justify-content-center">
            <button class="btn rounded-pill text-nowrap Signup-for-free pt-4 pb-5 form-control">
                <span class="align-middle">Signup for free</span>
            </button>
        </div>


           </div>

        </div>

    </div>




      <div class="col-11 col-md-4 number6 rounded-5 mb-5">
        <div class="six-roun">
            <div class="text-center">
                <h1 class="text-light">Pro</h1>
                <p class="text-light pb-2 pt-2">Experiment the power of infinite possibilities</p>
                <p class="superscript text-light"><sup>$</sup><b class="zero">8</b></p>
              </div>
           <div class="pro">
            @php
            $benefits = [
                "4 Users",
                "All apps",
                "Unlimited editable exports",
                "Folders and collaboration  ",
                "All incoming apps"
            ];
        @endphp
        @foreach($benefits as $benefit)
        <div class="d-flex align-items-center benefit-section">
            <img src="{{ asset('images/circle 1.svg') }}" class="img-fluid">
            <p class="pt-3 free-consulting">{{ $benefit }}</p>
        </div>
        @endforeach
        <div class="d-flex justify-content-center">
            <button class="btn rounded-pill text-nowrap Go-to-pro pt-4 pb-5 form-control">
                <span class="align-middle">Signup for free</span>
            </button>
        </div>


           </div>

        </div>
    </div>




    <div class="col-11 col-md-4 number1 rounded-5">
        <div class="shadow-sm six-roun">
            <div class="text-center">
                <h1>Business</h1>
                <p class="new-super">Unveil new superpowers and<br> join the Design Leaque</p>
                <p class="superscript"><sup>$</sup><b class="zero">16</b></p>
              </div>
           <div class="users-file">
            @php
            $benefits = [
                "All the features of pro plan",
                "Account success Manager",
                "Single Sign-On (SSO)",
                "Co-conception pogram ",
                "Collaboration-Soon"
            ];
        @endphp
        @foreach($benefits as $benefit)
        <div class="d-flex align-items-center benefit-section">
            <img src="{{ asset('images/circle 1.svg') }}" class="img-fluid">
            <p class="pt-3 free-consulting">{{ $benefit }}</p>
        </div>
        @endforeach
        <div class="d-flex justify-content-center">
            <button class="btn rounded-pill text-nowrap Signup-for-free pt-4 pb-5 form-control">
                <span class="align-middle">Goto Business</span>
            </button>
        </div>


           </div>

        </div>
    </div>


</div>

    <div class=" footer-main container-fluid">
<div class="row justify-content-center">
                <div class="col-11 col-md-5 col-lg-5 pb-5 column-stretch">
                    <p class="people-are-saying">People are Saying<br> About DoWhith</p>
                    <p class="everything-you-need">Everything you need to accept payment and grow<br> your money or manage anywhere on the planet</p>
                    <img src="{{ asset('images/Group 212.svg') }}" class="img-fluid group212">
                    <p class="i-am-very-helped">I am very helped by this E-wallet application, my<br>
                        days are very easy to use this application and its very<br>
                        helpful in my life, even I can pay a short time 😍</p>
                    <p class="aria-zinario">_ Aria Zinanrio</p>
                    <div class="pt-4">
                        <img src="{{ asset('images/Ellipse 54.svg') }}" class="img-fluid">
                        <img src="{{ asset('images/Ellipse 55.svg') }}" class="img-fluid">
                        <img src="{{ asset('images/Ellipse 56.svg') }}" class="img-fluid">
                        <img src="{{ asset('images/Ellipse 57.svg') }}" class="img-fluid">
                        <img src="{{ asset('images/Group 215.svg') }}" class="img-fluid">
                    </div>
                </div>

                <div class="col-11 col-md-5 col-lg-5 text-light form-section column-stretch">
                    <div class="d-flex justify-content-center mb-3">
                        <div class="text-center">
                            <img src="{{ asset('images/Group.svg') }}" class="img-fluid">
                            <p class="Get-Started pt-3">Get Started</p>
                        </div>
                    </div>

                    <form>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="inputMessage" class="form-label">Message</label>
                            <textarea class="form-control" id="inputMessage" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success rounded-pill text-nowrap pt-4 pb-5 form-control text-center submit-button text-light">Submit</button>
                        <p class="start-free">or Start Free Trial</p>
                    </form>
                </div>
    </div>


<div class="row justify-content-center justify-content-around mt-5">
    <div class="col-11 col-md-4 col-lg-5 getstarted-copy-right">
        <p class="Biccas">Biccas</p>
        <p class="i-am-very-helped pt-4">Get started now try our product</p>
        <div class="input-arrow mt-4">
            <input type="email" class="form-control rounded-pill enter-email-here" aria-describedby="emailHelp" placeholder="Enter your email here">
        <img src="{{ asset('images/arrow-right(1) 1.svg') }}" class="img-fluid arrow-right">
        </div>
        <p class="copyright">© 2022 Biccas Inc. Copyright and rights reserved</p>
    </div>

    <div class="row justify-content-center  col-11 col-md-4 col-lg-5 pb-4 text-align-right">
        <div class="col-11 col-md-4 col-lg-4 column-stretch">
            <p class="Support text-light">Support</p>
            <p class="i-am-very-helped">Help centre</p>
            <p class="i-am-very-helped">Account information</p>
            <p class="i-am-very-helped">About</p>
            <p class="i-am-very-helped">Contact us</p>
        </div>
        <div class="col-11 col-md-4 col-lg-4 pb-4">
            <p class="Support text-light">Help and Solution</p>
            <p class="i-am-very-helped">Talk to support</p>
            <p class="i-am-very-helped">Support docs</p>
            <p class="i-am-very-helped">System status</p>
            <p class="i-am-very-helped">Covid responde</p>
        </div>
        <div class="col-11 col-md-4 col-lg-4">
            <p class="Support text-light">Product</p>
            <p class="i-am-very-helped">Update</p>
            <p class="i-am-very-helped">Security</p>
            <p class="i-am-very-helped">Beta test</p>
            <p class="i-am-very-helped">Pricing product</p>

        </div>
        <div class="col-12"><p class="terms-condition text-nowrap">Terms and Condtions <span class="dot">.</span> <span class="Privacy-Policy">Privacy Policy</span></p></div>
    </div>
</div>

</div>



     <!-- JavaScript and dependencies (Popper.js and jQuery) -->
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 </body>
 </html>
