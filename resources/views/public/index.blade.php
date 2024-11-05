<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Pratama Abadi Industri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        /* mengimport font external => font Poppins dan font Roboto */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap');
    </style>
    <script>
         // menginisialisasi data untuk digunakan didalam codingan
        tailwind.config = {
            theme: {
                extend: {
                    // menginisialisasi data color yang digunakan
                    colors: {
                        primary: '#ffffff',
                        second: '#74A512',
                        third: '#FFF7E',
                        highlight: '#FF9900',
                        content: '#969696'
                    },
                    // menginisialisasi data font yang akan digunakan
                    fontFamily: {
                        logo: 'Roboto',
                        content: 'Poppins'
                    }
                }
            }
        }
    </script>
</head>

<body class="overflow-x-hidden scroll-smooth">


    <!-- Navbar -->
    <nav>
            <!-- Discount -->
        <div class="bg-second text-center py-1.5 text-[.8rem] font-medium text-white">
            <p>Fast Food and Healthy Food, Buy 2 Get 20% Free</p>
        </div>

        <!-- Nav -->
        <div class="flex px-6 py-5 shadow-lg bg-primary lg:px-32 lg:items-center font-content">

            <div class="logo font-head">
                <a href="#" class="flex items-center space-x-3">
                    <img src="./assets/Logo.svg" alt="" class="w-10">
                    <h1 class="hidden font-bold md:block font-logo">MangResto</h1>
                </a>
            </div>

            <!-- Navigation -->
            <ul
                class="lg:ml-10 lg:flex lg:space-x-8 lg:space-y-0 text-white lg:items-center lg:z-auto lg:static lg:bg-transparent lg:h-0 lg:w-auto lg:pl-0 lg:opacity-100 space-x-0 space-y-8 z-20 absolute bg-white/20 backdrop-blur-md w-full py-10 lg:py-0 text-[1.2rem] lg:text-[1rem] px-7 opacity-0 top-[-500px] top-32  transition-all ease-in duration-500 left-0">
                <li class="list-none text-[.9rem] text-content">
                    <a href="home.html" class="hover:text-second">Home</a>
                </li>
                <li class="list-none text-[.9rem] text-content">
                    <a href="about.html" class="hover:text-second">About Us</a>
                </li>
                    <button type="button" class=" text-[.9rem] text-content flex items-center space-x-2" onclick="openDropdown(event,'dropdownId')">
                        <a href="shop.html" class="hover:text-second">Shop</a>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </button>
                    <div id="dropdownId"
                        class="hidden bg-white/20 backdrop-blur-md text-content text-black text-[.9rem] px-3 py-3 z-50 float-left list-none text-left rounded space-y-3 shadow-lg mt-1">
                        <li class="list-none">
                            <a href="HealthyFood.html" class="hover:text-second">Healthy Food</a>
                        </li>
                        <li class="list-none">
                            <a href="FastFood.html" class="hover:text-second">Fast Food</a>
                        </li>
                    </div>
                <li class="list-none text-[.9rem] text-content">
                    <a href="#contact" class="hover:text-second">Contact</a>
                </li>
                <li class="list-none text-[.9rem] text-content">
                    <a href="blog.html" class="hover:text-second">Blog</a>
                </li>
                <button class="lg:hidden block bg-second px-6 py-2.5 rounded-sm text-white text-[.9rem] w-full">
                    <a href="{{ route('login') }}">Login</a>
                </button>
                <button class="lg:hidden block bg-second px-6 py-2.5 rounded-sm text-white text-[.9rem] w-full">
                    <a href="{{ route('register') }}">Registration</a>
                </button>
            </ul>

            <!-- Icon Navicon -->
            <div class="flex items-center ml-auto mr-16 space-x-5 md:mr-20 lg:mr-0 lg:space-x-12 md:space-x-10">
                <!-- Wishlist -->
                <div class="relative flex love">
                    <img src="./assets/love.svg" alt="">
                    <span
                        class="absolute ml-3 -mt-2 rounded-full bg-red-600 text-[.7rem] p-1 m-0 text-white font-content leading-tight text-center">10</span>
                </div>
                <!-- Cart -->
                <div class="relative flex cart">
                    <img src="./assets/cart.svg" alt="">
                    <span
                        class="absolute ml-3 -mt-2 rounded-full bg-red-600 text-[.7rem] p-1 m-0 text-white font-content leading-tight text-center">10</span>
                </div>
                <!-- Search -->
                <div class="text-xl">
                    <ion-icon name="search-outline"></ion-icon>
                </div>

                <!-- Language -->
                <div class="flex items-center space-x-3">
                    <div class="w-auto flex items-center bg-white px-3 py-2.5 shadow-md">
                        <button type="button" class=" text-[.9rem] text-content flex items-center space-x-2" onclick="openDropdown(event,'langId')">
                            <div class="flex items-center space-x-1">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ae/Flag_of_the_United_Kingdom.svg" alt="" class="w-5">
                                <a href="home.html" class="hover:text-second">EN</a>
                            </div>
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </button>
                        <div id="langId"
                            class="hidden bg-white/20 backdrop-blur-md text-content text-black text-[.9rem] px-3 py-3 z-50 float-left list-none text-left rounded space-y-3 shadow-lg mt-1">
                            <li class="flex items-center space-x-1 list-none">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/9/9f/Flag_of_Indonesia.svg" alt="" class="w-5">
                                <a href="home-id.html" class="hover:text-second"> ID</a>
                            </li>
                    </div>
                </div>

                <!-- Register -->
                <div class="hidden lg:block">
                    <a href="{{ route('login') }}" class="bg-second px-6 text-white text-[.9rem] py-2.5 rounded-sm">Login</a>
                    <a href="{{ route('register') }}" class="bg-second px-6 text-white text-[.9rem] py-2.5 rounded-sm">Registration</a>
                </div>
            </div>

            <div id="toggle" class="text-back text-[2rem] lg:hidden absolute right-10">
                <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->


    <!-- Hero Section -->
    <div class="flex-row-reverse items-center block mb-40 md:flex lg:mx-32 md:mx-8 lg:space-x-20">
        <!-- Background Hero Section -->
        <div class="bg-[#EAF9CE] py-32 px-20">
            <img data-aos="zoom-in" data-aos-duration="1000" src="./assets/bg-hero.svg" alt="">
        </div>
        <!-- Content -->
        <div class="mx-8 mt-10 md:mt-0 md:mx-0">
            <p data-aos="zoom-in" data-aos-duration="1000"
                class="bg-[#F5FCE8] text-second rounded-full px-2 py-1 w-32 text-[.9rem]" lang="en">Sall Top 20% Off</p>
            <h1 data-aos="fade-up" data-aos-duration="1000"
                class="text-second lg:text-[3.59rem] md:text-[3rem] text-[3rem] font-bold py-2">Will <span
                    class="text-black">Give You </span> <br>Satisfaction <span class="text-black">in Food</span></h1>
            <p data-aos="fade-up" data-aos-duration="1200" class="text-[.9rem] text-content lg:w-[80%]">There are various menus
                ranging from fast food and healthy food.
            </p>

            <!-- CTA (Shop and Explore blog) -->
            <div data-aos="fade-up" data-aos-duration="1400" class="flex items-center space-x-7 mt-8 text-[.9rem]">
                <button class="bg-second px-6 py-2.5 rounded-sm text-white">
                    <a href="shop.html">Shop Now</a>
                </button>
                <button class="flex items-center space-x-3 font-semibold text-second">
                    <a href="blog.html">Explore Our Blog</a>
                    <ion-icon name="arrow-forward-outline" class="pt-1 text-xl"></ion-icon>
                </button>
            </div>
        </div>
    </div>
    <!-- End Section -->


    <!-- Company Partner -->
    @include('layouts.company')
    <!-- End Company Partner -->


    <!-- Category -->
    <div class="grid grid-cols-1 gap-5 mx-8 mb-40 md:grid-cols-2 lg:mx-32 font-content">
        <!-- Fast Food -->
        <div class="flex items-center lg:space-x-5 space-x-3 bg-[#EAF9CE] px-5 py-10">
            <img data-aos="zoom-in" data-aos-duration="1000" src="./assets/fast-food.svg" alt=""
                class="lg:w-52 md:w-32 w-[12rem]">
            <!-- content -->
            <div class="space-y-2">
                <h4 data-aos="fade-up" data-aos-duration="1000" class="font-bold text-[1.2rem]">Fast Food</h4>
                <p data-aos="fade-up" data-aos-duration="1200" class="text-[.9rem] pb-3 text-content">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Vel earum officia eos reiciendis saepe dolor dolores nemo cum
                    ab delectus?</p>
                <button data-aos="fade-up" data-aos-duration="1400"
                    class="bg-second px-6 py-2.5 rounded-sm text-white text-[.9rem]">
                    <a href="shop.html">Shop Now</a>
                </button>
            </div>
        </div>

        <!-- Healthy Food -->
        <div class="flex items-center lg:space-x-5 space-x-3 bg-[#FFF7E2] px-5 py-10">
            <img data-aos="zoom-in" data-aos-duration="1000" src="./assets/healty-food.svg" alt=""
                class="lg:w-52 md:w-32 w-[12rem]">
            <!-- content -->
            <div class="space-y-2">
                <h4 data-aos="fade-up" data-aos-duration="1000" class="font-bold text-[1.2rem]">Healthy Food</h4>
                <p data-aos="fade-up" data-aos-duration="1200" class="text-[.9rem] pb-3 text-content">Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Vel earum officia eos reiciendis saepe dolor dolores nemo cum
                    ab delectus?</p>
                <button data-aos="fade-up" data-aos-duration="1400"
                    class="bg-second px-6 py-2.5 rounded-sm text-white text-[.9rem]">
                    <a href="shop.html">Shop Now</a>
                </button>
            </div>
        </div>
    </div>
    <!-- End Category -->


    <!-- About Us -->
    <div class="mb-40">
        <div class="flex-row-reverse items-center block mx-8 space-x-5 md:flex lg:mx-32">
            <!-- background -->
            <img data-aos="zoom-in" data-aos-duration="1000" src="./assets/bg-about.svg" alt=""
                class="mx-auto lg:mr-52">

            <!-- content -->
            <div data-aos="fade-up" data-aos-duration="1000" class="mt-10 space-y-2 md:mt-0">
                <p data-aos="fade-up" data-aos-duration="1200" class="text-highlight text-[.9rem]">About Us</p>
                <h1 data-aos="fade-up" data-aos-duration="1400" class="text-[2.5rem] font-bold">MangResto</h1>
                <p data-aos="fade-up" data-aos-duration="1600" class="text-[.9rem] lg:w-[70%] pb-5 text-content">Lorem
                    ipsum dolor, sit amet consectetur adipisicing elit. Laborum eligendi pariatur aperiam nisi inventore
                    tenetur dolorum. Maxime, explicabo veniam! Sunt.</p>
                <button data-aos="fade-up" data-aos-duration="1800"
                    class="bg-second px-6 py-2.5 rounded-sm text-white text-[.9rem]">
                    <a href="shop.html">Shop Now</a>
                </button>
            </div>
        </div>


    </div>
    <!-- End About Us -->


    <!-- Menu -->
    <div class="relative mx-8 mb-40 lg:mx-32">
        <div class="space-y-2">
            <h1 data-aos="fade-up" data-aos-duration="1100" class="text-[2.5rem] font-bold">Food MangResto</h1>
            <div class="flex items-center">
                <p data-aos="fade-up" data-aos-duration="1200" class="text-highlight text-[.9rem]">Best Food</p>
                <p data-aos="fade-up" data-aos-duration="1400" class="text-[.9rem] text-content lg:w-[30%] w-[40%] ml-auto"> This is the most popular food tha is often bought by some people, cheap and very healthy for you</p>
            </div>
        </div>

        <!-- Category -->
        <div class="flex items-center justify-center pt-10 space-x-10 text-center text-content">
            <p data-aos="zoom-in" data-aos-duration="1000" class="cursor-pointer hover:text-second">All Menu</p>
            <p data-aos="zoom-in" data-aos-duration="1200" class="cursor-pointer hover:text-second">Fast Food</p>
            <p data-aos="zoom-in" data-aos-duration="1400" class="cursor-pointer hover:text-second">Healthy Food</p>
        </div>

        <!-- List Menu -->
        <div id="" class="grid grid-cols-2 gap-6 mt-10 lg:grid-cols-4 md:grid-cols-3 font-content">
            @include('layouts.produk')
        </div>

        <button data-aos="fade-up" data-aos-duration="1600"
            class="bg-second px-6 lg:mx-[45%] md:mx-[43%] mx-[35%] py-2.5 items-center text-center rounded-sm text-white text-[.9rem] mt-16">
            <a href="shop.html">See more</a>
        </button>

    </div>
    <!-- End Menu -->


    <!-- Healthy Food -->
    <div class="mb-56">
        <div class="lg:mx-32 mx-8 bg-[#FFF7E2] px-10 py-10 lg:flex relative">
            <!-- Content Healthy Food Section -->
            <div class="space-y-2 content">
                <p data-aos="fade-up" data-aos-duration="1000" class="text-second text-[.9rem]">Healthy Food</p>
                <h1 data-aos="fade-up" data-aos-duration="1200" class="text-[2.6rem] lg:w-[50%] md:w-[55%] font-bold">
                    Healthy And you Can Enjoy in The Morning</h1>
                <p data-aos="fade-up" data-aos-duration="1400" class="pb-5 lg:w-[45%] text-[.9rem] text-content">Lorem
                    ipsum dolor sit, amet consectetur adipisicing elit.</p>
                <button data-aos="fade-up" data-aos-duration="1600"
                    class="bg-second px-6 py-2.5 items-center text-center rounded-sm text-white text-[.9rem]">
                    <a href="shop.html">Shop now</a>
                </button>
            </div>
            <!-- Background Healthy Food Section -->
            <img data-aos="zoom-in" data-aos-duration="1800" src="./assets/bg-healty.svg" alt=""
                class="absolute lg:top-16 md:top-40 top-[18rem] right-0 lg:w-auto md:w-[45%] w-[55%]">
        </div>
    </div>
    <!-- End Healthy Food -->


    <!-- Footer -->
    <div class="bg-[#1F2F00] lg:px-32 px-8 py-10 overflow-hidden" id="contact">
        <div class="block space-x-0 lg:flex font-content lg:space-x-10">
            <div>
                <!-- Logo Footer -->
                <div data-aos="fade-up" data-aos-duration="1000" class="flex items-center space-x-3 logo font-head">
                    <img src="./assets/Logo.svg" alt="" class="w-10">
                    <h1 class="hidden font-bold text-white md:block font-logo">MangResto</h1>
                </div>
                <!-- content -->
                <div class="mt-6">
                    <p data-aos="fade-up" data-aos-duration="1200"
                        class="text-white text-[.9rem] lg:w-[80%] md:w-[45%]">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Quas rem ab tenetur distinctio cupiditate minus autem.</p>
                    <div data-aos="fade-up" data-aos-duration="1400"
                        class="flex items-center pt-5 space-x-5 social-icon">
                        <a href="https://facebok.com">
                            <img src="./assets/facebok.svg" alt="">
                        </a>
                        <a href="https://instagram.com">
                            <img src="./assets/instagram.svg" alt="">
                        </a>
                        <a href="https://twitter.com">
                            <img src="./assets/twitter.svg" alt="">
                        </a>
                        <a href="https://linkedin.com">
                            <img src="./assets/linkedin.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Quicklink -->
            <div class="grid grid-cols-2 gap-5 mt-10 md:grid-cols-4 md:gap-y-0 gap-y-10 lg:mt-0">
                <!-- Navigation -->
                <div data-aos="fade-up" data-aos-duration="1000" class="space-y-3 text-white">
                    <h4 class="font-semibold">Navigation</h4>
                    <li class="list-none text-[.9rem] text-content pt-2">
                        <a href="home.html" class="hover:text-second">Home</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="about.html" class="hover:text-second">About Us</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="shop.html" class="hover:text-second">Shop</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="#contact" class="hover:text-second">Contact</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="blog.html" class="hover:text-second">Blog</a>
                    </li>
                </div>

                <!-- Category Product -->
                <div data-aos="fade-up" data-aos-duration="1200" class="space-y-3 text-white">
                    <h4 class="font-semibold">Our Product</h4>
                    <li class="list-none text-[.9rem] text-content pt-2">
                        <a href="FastFood.html" class="hover:text-second">Fast Food</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="HealthyFood.html" class="hover:text-second">Healthy Food</a>
                    </li>
                </div>

                <!-- Form Member -->
                <div data-aos="fade-up" data-aos-duration="1400" class="space-y-3 text-white">
                    <h4 class="font-semibold">Form Member</h4>
                    <li class="list-none text-[.9rem] text-content pt-2">
                        <a href="login.html" class="hover:text-second">Sign In</a>
                    </li>
                    <li class="list-none text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">Support</a>
                    </li>
                    <li class="list-none md:hidden block text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">Privacy Policy</a>
                    </li>
                    <li class="list-none md:hidden block text-[.9rem] text-content">
                        <a href="#" class="hover:text-second">Merchan Agreement</a>
                    </li>
                </div>

                <!-- Form Member -->
                <div data-aos="fade-up" data-aos-duration="1600" class="space-y-3 text-white">
                    <h4 class="font-semibold">Address</h4>
                    <li class="list-none text-[.9rem] text-content pt-2 flex items-center space-x-2">
                        <img src="./assets/maps.svg" alt="">
                        <p class="text-content">4517 Washington Ave. Manchester, Kentucky 39495</p>
                    </li>
                    <li class="list-none text-[.9rem] text-content pt-2 flex items-center space-x-2">
                        <img src="./assets/mail.svg" alt="">
                        <p class="text-content">hallo@mangresto123@gmail.com</p>
                    </li>
                    <li class="list-none md:hidden block text-[.9rem] text-content pt-2 flex items-center space-x-2">
                        (021) 678-9102
                    </li>
                </div>
            </div>
        </div>
        <footer class="md:flex block items-center font-content text-white text-[.9rem] mt-20">
            <p class="text-center md:text-left">&copy;Mancoding. All Rights Reserved</p>
            <div class="hidden ml-auto md:flex md:space-x-8">
                <p>(021) 678-9102</p>
                <p>Privacy Policy</p>
                <p>Merchan Agreement</p>
            </div>
        </footer>
    </div>
    <!-- End Footer -->




    <!-- JavaScript -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
    <script src="./data/apiMenu.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="./js/index.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
