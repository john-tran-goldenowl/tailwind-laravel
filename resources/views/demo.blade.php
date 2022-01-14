<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Demo Tailwind</title>
</head>

<body>
    <div class="w-full flex justify-center  bg-nghia">
        <img src="https://virtual.sgp1.digitaloceanspaces.com/UTAR/2021/UTAR-BANNER-LOGO.png" alt="">
    </div>
    <div class="w-full h-[92vh]  bg-black relative ">
        <div class="absolute w-full h-full opacity-25  top-0 left-0 bg-black"></div>
        <img class="object-cover h-full w-full"
            src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/vef-mar21-hero-img.jpg" alt="">
        <div class="absolute  flex items-center  overlay w-full h-full top-0 left-0 align-middle">
            <div class=" w-full text-center  text-white">
                <h1 class="text-5xl font-extrabold my-auto; md:text-7xl">EduAdvisor Test</h1>
                <h3 class="text-xl mt-2 md:text-3xl"><strong>LIVE NOW:</strong>10am – 5pm until 19 June</h3>
                <button class="hover:shadow-xl md:py-4 md:w-80 hover:bg-red-600 font-bold mt-10 px-10 bg-nghiabtn rounded-3xl text-xl py-3">Enter Fair Now</button>
            </div>

        </div>
    </div>
    <div class="w-[90%] mx-auto px-4 py-10 md:w-[80%] mb-10">
        <h1 class="font-bold text-3xl title-font mb-3 md:text-5xl">Key Highlights</h1>
        <div class="w-[20%] h-1.5 bg-nghia"></div>
        <div class="flex flex-col md:flex-row gap-4  w-full  mt-16 md:justify-between">
            <div class="w-full mb-14">
                <img class="w-1/5 md:w-1/3"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/VEF%20Mar2021%20Icons-Visit%20Virtual%20Booths.png"
                    alt="">
                <h3 class="text-lg font-bold mt-4">Visit Virtual Booths</h3>
                <p class="">Explore and connect with institutions all over Malaysia, just like a physical education fair
                </p>
            </div>
            <div class="w-full mb-14">
                <img class="w-1/5 md:w-1/3"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/VEF%20Mar2021%20Icons-Live%20Counselling.png"
                    alt="">
                <h3 class="text-lg font-bold mt-4">Live Counselling</h3>
                <p>Chat with university representatives for advice on what to study and how online learning is like</p>
            </div>
            <div class="w-full mb-14">
                <img class="w-1/5 md:w-1/3"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/VEF%20Mar2021%20Icons-Search%20for%20Scholarships-.png"
                    alt="">
                <h3 class="text-lg font-bold mt-4">Search for Scholarships</h3>
                <p>Secure the best scholarships and discounts based on your exam results</p>
            </div>
            <div class="w-full mb-14">
                <img class="w-1/5 md:w-1/3"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/VEF%20Mar2021%20Icons-Watch%20Live%20Webinars.png"
                    alt="">
                <h3 class="text-lg font-bold mt-4">Watch Live Webinars</h3>
                <p>Get real insights from experts and industry professionals through our live webinars</p>
            </div>
            <div class="w-full mb-14">
                <img class="w-1/5 md:w-1/3"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/VEF%20Mar2021%20Icons-Free%20Career%20Tests.png"
                    alt="">
                <h3 class="text-lg font-bold mt-4">Free Career Tests</h3>
                <p>Dive deep and figure out what you’re destined to do with free personality tests</p>
            </div>

        </div>
        <div class="mx-auto w-[400px] md:w-[300px]  mt-10 flex justify-center">
            <button
                class="hover:shadow-xl font-bold md:w-full px-10 md:py-4 md:rounded-full bg-nghiabtn rounded-3xl text-white text-xl py-3">Enter
                Fair Now</button>
        </div>

    </div>
    <div class="w-full  bg-colorlaptop py-10">
        <div class="flex flex-col w-[90%] m-auto px-3 md:flex-row md:justify-center">
            <div class="md:w-[60%] md:mt-[5%]">
                <h1 class="text-white text-3xl font-semibold mb-2 md:text-5xl ">Get a FREE laptop when you enrol</h1>
                <div class="w-[20%] h-1.5 bg-nghiabtn"></div>
                <p class="text-white mt-5 font-light">The first 10 students who enrol for a Foundation or Diploma
                    programme will get a free laptop</p>
            </div>
            <div class="md:w-[30%]">
                <img class="w-[250px] mx-auto mt-9"
                    src="https://virtual.sgp1.digitaloceanspaces.com/UTAR/2021/laptop-1928.png" alt="">
            </div>
        </div>
    </div>
    <div class="w-full bg-bgcolor pb-14">
        <div class="w-[90%] mx-auto px-4 py-10 md:w-[80%] m-auto">
            <h1 class="font-bold text-3xl title-font mb-3 md:text-5xl">Participating Institutions</h1>
            <div class="w-[20%] h-1.5 bg-nghiabtn"></div>
            <h2 class="text-2xl mt-10 text-primary  md:text-3xl">Platinum Sponsor</h2>
            <img class="mx-auto w-[250px] my-10 md:w-[45%]"
                src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-utmspace.png" alt="">
            <h2 class="text-2xl mt-8 text-primary  md:text-3xl">Gold Sponsor</h2>
            <div class="flex flex-row gap-4 mt-8 md:justify-evenly">
                <div><img src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-mucm.png"
                        alt=""></div>
                <div><img src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-unikl.png"
                        alt=""></div>
            </div>
            <h2 class="text-2xl mt-8 text-primary  md:text-3xl">Gold Sponsor</h2>
            <div class="flex flex-row flex-wrap gap-4 mt-10 justify-between">
                <img class="w-[48%] md:w-[23%]"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-equator.png"
                    alt="">
                <img class="w-[48%]  md:w-[23%]"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-aimst.png"
                    alt="">
                <img class="w-[48%]  md:w-[23%]"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-carsome.png"
                    alt="">
                <img class="w-[48%]  md:w-[23%]"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-segi.png" alt="">
                <img class="w-[48%]  md:w-[23%]"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-taylors-final.png"
                    alt="">
                <img class="w-[48%]  md:w-[23%]"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-iumw.png" alt="">
                <img class="w-[48%]  md:w-[23%]"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-rumc.png" alt="">
                <img class="w-[48%]  md:w-[23%]"
                    src="https://virtual.sgp1.digitaloceanspaces.com/eduadvisor-vef/general/logos/logo-unimy.png"
                    alt="">
            </div>


        </div>
        <div class="mx-auto w-[400px] md:w-[300px]  mt-2 flex justify-center ">
            <button
                class=" hover:shadow-xl font-bold md:w-full px-10 md:py-4 md:rounded-full bg-nghiabtn rounded-3xl text-white text-xl py-3">Enter
                Fair Now</button>
        </div>
    </div>
    <div class="w-[90%] mx-auto   px-4 py-10 md:w-[80%] m-auto">
        <h1 class="font-bold text-3xl title-font mt-5 mb-3 md:text-5xl">Participating Institutions</h1>
        <div class="w-[20%] h-1.5 bg-nghiabtn"></div>
        <p class="font-light mt-6">Please complete your details so that we can serve you better. If you have already
            registered,<strong class="text-cltext font-bold">click here to login.</strong> </p>
        <div class="w-full mx-auto md:w-[550px] min-h-[1060px]">
            <div
                class="flex flex-col w-[90%] mb-6 mt-6 md:flex-row justify-between md:gap-3 md:items-center  lg:float-right">
                <div class="mb-1 w-[45%] md:text-right"><strong>Name</strong></div>
                <div class="w-[90%]"><input
                        class="w-full h-10 border-0 px-4 focus:bg-white focus:border-2  bg-bgcolor rounded-lg"
                        type="text" placeholder="Your name"></div>
            </div>
            <div
                class="flex flex-col w-[90%] mb-6 md:flex-row justify-between md:gap-3 md:items-center  lg:float-right">
                <div class="mb-1 w-[45%] md:text-right"><strong>Mobile</strong></div>
                <div class="w-[90%]"><input
                        class="w-full h-10 border-0 px-4 focus:bg-white focus:border-2 bg-bgcolor rounded-lg"
                        type="text" placeholder="ex: +944810751"></div>
            </div>
            <div
                class="flex flex-col w-[90%] mb-6 md:flex-row justify-between md:gap-3 md:items-center  lg:float-right">
                <div class="mb-1 w-[45%] md:text-right"><strong>Email</strong></div>
                <div class="w-[90%]"><input
                        class="w-full h-10 border-0 px-4 focus:bg-white focus:border-2 bg-bgcolor rounded-lg"
                        type="text" placeholder="yourname@gmail"></div>
            </div>
            <div class="flex flex-col w-[90%] mb-6 md:flex-row justify-between md:gap-3 md:items-center lg:float-right">
                <div class="mb-1 w-[45%] md:text-right"><strong>Nationality</strong></div>
                <div class="w-[90%]">
                    <select name="" id=""
                        class="w-full h-10 border shadow focus:ring border-gray-400 focus:outline-none px-4 focus:bg-white focus:border-2  rounded-lg">
                        <option value="0">VietNam</option>
                        <option value="1" check>International</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col w-[90%] mb-6 md:flex-row justify-between md:gap-3 md:items-center lg:float-right">
                <div class="mb-1 w-[45%] md:text-right"><strong>State</strong></div>
                <div class="w-[90%]">
                    <select name="" id=""
                        class="w-full h-10 border shadow focus:ring border-gray-400 focus:outline-none px-4 focus:bg-white focus:border-2  rounded-lg">
                        <option value="0">VietNam</option>
                        <option value="1" check>International</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col w-[90%] mb-6 md:flex-row justify-between md:gap-3 md:items-center lg:float-right">
                <div class="mb-1  w-[45%] md:text-right font-bold">
                    <p>Highest Academic Qualification</p>
                </div>
                <div class="w-[90%]">
                    <select name="" id=""
                        class="w-full h-10 border shadow focus:ring border-gray-400 focus:outline-none px-4 focus:bg-white focus:border-2  rounded-lg">
                        <option value="0">VietNam</option>
                        <option value="1" check>International</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col w-[90%] mb-6 md:flex-row justify-between md:gap-3  lg:float-right">
                <div class="mb-1  w-[45%] md:text-right"><strong>Interested Programmess</strong></div>
                <div class="w-[90%]">
                    <div class="">
                        <input type="checkbox">
                        <span>Pre-University and Foundation</span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Automotive</span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Bioscience and Life Sciences</span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Business and Accounting</span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Design and Creative Multimedia/span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Education and Language</span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Engineering</span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Hospitality and Culinary Arts</span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Law</span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Mathematics and Actuarial Studies</span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Medicine, Pharmacy and Health Science</span>
                    </div>
                    <div class="">
                        <input type="checkbox">
                        <span>Psychology and Social Science</span>
                    </div>
                </div>

            </div>
            <div class="flex flex-col w-[90%] mb-6 md:flex-row justify-between md:gap-3 md:items-center lg:float-right">
                <div class="mb-1 w-[45%] md:text-right"><strong>Planned Intake</strong></div>
                <div class="w-[90%]">
                    <select name="" id=""
                        class="w-full h-10 border shadow focus:ring border-gray-400 focus:outline-none px-4 focus:bg-white focus:border-2  rounded-lg">
                        <option value="0">VietNam</option>
                        <option value="1" check>International</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col w-[90%] mb-6 md:flex-row justify-between md:gap-3 md:items-center lg:float-right">
                <div class="mb-1 w-[45%] md:text-right">

                </div>
                <div class="w-[90%]">
                    <input type="checkbox">
                    <span class="font-bold text-sm">You allow us to pass on your information to product providers and
                        accept our Privacy Policy. We abide by the Personal Data Protection Act (PDPA).</span>
                </div>
            </div>
            <div class="flex flex-col w-[90%] mb-6 md:flex-row justify-between md:gap-3 md:items-center lg:float-right">
                <div class="mb-1 w-[45%] md:text-right">
                </div>
                <div class="w-[90%] mt-12">
                    <button
                        class="hover:shadow-xl font-bold md:w-[90%] px-10 md:py-4 md:rounded-full bg-nghiabtn rounded-3xl text-white text-xl py-3">Enter
                        Fair Now</button>
                </div>
            </div>
        </div>
        <div class="w-full md:w-1/2  mx-auto text-center mb-8 mt-10">
            <p>Already registered ?<span class="text-cltext cursor-pointer">  Click here to login.</span></p>
           <p> If you are experiencing technical issues, please email: <span class="text-cltext cursor-pointer">fair@eduadvisor.my</span></p>
        </div>
    </div>
    <div class="w-full h-24 bg-bgfooter flex flex-row justify-between md:px-28 items-center">
        <div>
            <img class="w-[200px]" src="https://virtual.sgp1.digitaloceanspaces.com/projects/MMMC-Logo-1.webp" alt="">
        </div>
        <div>
            <img class="w-[200px]" src="https://vepimg.b8cdn.com/images/powered-by-vfair.png" alt="">
        </div>
    </div>







</body>