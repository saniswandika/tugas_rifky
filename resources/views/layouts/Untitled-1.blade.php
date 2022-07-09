
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Blog Template</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    {{-- bootstrap --}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/js/app.jsnpm i bootstrap@5.2.0-beta1') }}">
    <link href="/css/app.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
    <script src="../path/to/flowbite/dist/flowbite.js"></script>
</head>
<body class="bg-opacity-10 font-family-Montserrat" style="background: #627D98;">

    <!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-blue-500 shadow" style="background: #627D98;">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Shop</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="#">About</a></li>
                </ul>
            </nav>

            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto" style="background:rgb(182, 178, 178);">
 
        <div class="flex flex-col items-center py-12 multi-bg-example"  src="" >
            <a class="font-bold text-gray-100 uppercase hover:text-gray-700 text-5xl" href="#">
                Minimal Blog
            </a>
            <p class="text-lg text-gray-600">
                Lorem Ipsum Dolor Sit Amet
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
  <div x-data="{ open: true }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
    <div class="p-4 flex flex-row items-center justify-between">
      
      <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'flex': open, 'hidden': !open}" style="background:rgb(202, 202, 202);" class="flex-grow p-6 md:pb-0 hidden md:flex md:justify-center md:flex-row ">
      <a class="px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-gray-200 rounded-lg dark-mode:bg-gray-700 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Blog</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Portfolio</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">About</a>
      <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Contact</a>
      <div @click.away="open = false" class="relative" x-data="{ open: false }">
        <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
          <span>Dropdown</span>
          <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
          <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #1</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #2</a>
            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">Link #3</a>
          </div>
        </div>
      </div>    
    </nav>
  </div>
</div>


    <div class="container mx-auto flex flex-wrap py-6" style="background: #627D98;">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                {{-- <a href="#" class="hover:opacity-75">
                    <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</a>
                    <p href="#" class="text-sm pb-3">
                        By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on April 25th, 2020
                    </p>
                    <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet posuere magna..</a>
                    <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
                </div> --}}
                <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
                    <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                      <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="0"
                        class="active"
                        aria-current="true"
                        aria-label="Slide 1"
                      ></button>
                      <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="1"
                        aria-label="Slide 2"
                      ></button>
                      <button
                        type="button"
                        data-bs-target="#carouselExampleCaptions"
                        data-bs-slide-to="2"
                        aria-label="Slide 3"
                      ></button>
                    </div>
                    <div class="carousel-inner relative w-full overflow-hidden">
                      <div class="carousel-item active relative float-left w-full">
                        <img
                          src="https://mdbootstrap.com/img/Photos/Slides/img%20(15).jpg"
                          class="block w-full"
                          alt="..."
                        />
                        <div class="carousel-caption hidden md:block absolute text-center">
                          <h5 class="text-xl montserrat">First slide label</h5>
                          <p>Some representative placeholder content for the first slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item relative float-left w-full">
                        <img
                          src="https://mdbootstrap.com/img/Photos/Slides/img%20(22).jpg"
                          class="block w-full"
                          alt="..."
                        />
                        <div class="carousel-caption hidden md:block absolute text-center">
                          <h5 class="text-xl">Second slide label</h5>
                          <p>Some representative placeholder content for the second slide.</p>
                        </div>
                      </div>
                      <div class="carousel-item relative float-left w-full">
                        <img
                          src="https://mdbootstrap.com/img/Photos/Slides/img%20(23).jpg"
                          class="block w-full"
                          alt="..."
                        />
                        <div class="carousel-caption hidden md:block absolute text-center">
                          <h5 class="text-xl">Third slide label</h5>
                          <p>Some representative placeholder content for the third slide.</p>
                        </div>
                      </div>
                    </div>
                    <button
                      class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                      type="button"
                      data-bs-target="#carouselExampleCaptions"
                      data-bs-slide="prev"
                    >
                      <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    
                    </button>
                    <button
                      class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                      type="button"
                      data-bs-target="#carouselExampleCaptions"
                      data-bs-slide="next"
                    >
                      <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                      
                    </button>
                  </div>
                  <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Technology</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</a>
                    <p href="#" class="text-sm pb-3">
                        By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on April 25th, 2020
                    </p>
                    <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet posuere magna..</a>
                    <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>
                     
            <div class="card mb-4" style="font-family: montserrat">
              <div class="row">
                <div class="footer-text-about">
                  <p class="mt-5 h1" style="text-align: center;">Daftar <br>Penelitian</p>
                  
                </div>
                
                <div class="col-lg-8" style="font-family: montserrat">
                  <div class="card-body">
                      <table class="table">
                        <tr>
                            <th>Judul Penelitian</th>
                            <th>Nama Peneliti</th>
                            <th>Objek Penelitian</th>
                            <th>Tahun</th>
                      
                        </tr>
                        <tr>
                          <td style="width: 40%;"><a href="">Observasi fauna ancaman bagi penetasan telur penyu padaKawasan Konservasi Penyu Pantai Pangumbahan</a></td>
                          <td style="width: 2%;">Flora kawasan Konservasi </td>
                          <td style="width: 20%;">Rifky Annuary </td>
                          <td style="width: 15%;">2022 </td>
                        </tr>
                        <tr>
                          <td style="width: 40%;"><a href="">Observasi fauna demi keancaran kelahiran penyu</a></td>
                          <td style="width: 20%;">Flora kawasan Konservasi </td>
                          <td style="width: 18%;">Rifky Annuary </td>
                          <td style="width: 15%;">2022 </td>
                        </tr>
                        <tr>
                          <td style="width: 40%;"><a href="">Sistem Informasi Pengawasan dan Konservasi Penyu di Balai Konservasi Pantai pangumbahan Sukabumi</a></td>
                          <td style="width: 20%;">sistem informasi </td>
                          <td style="width: 18%;">Rifky Annuary </td>
                          <td style="width: 15%;">2022 </td>
                        </tr>
                        <tr>
                          <td style="width: 40%;"><a href="">Keberlanjutan Pengelolaan Kawasan Konservasi Penyu di Pantai Pangumbahan, Sukabumi, Jawa Barat</a></td>
                          <td style="width: 20%;">sumber daya dan lingkungan </td>
                          <td style="width: 18%;">Rifky Annuary </td>
                          <td style="width: 15%;">2022 </td>
                        </tr>
                        <tr>
                          <td style="width: 40%;"><a href="">Keberlanjutan Pengelolaan Kawasan Konservasi Penyu di Pantai Pangumbahan, Sukabumi, Jawa Barat</a></td>
                          <td style="width: 30%;">[1] M. Apuk Isman<br> [2] Cecep Kusmana <br>[3] Andi Gunawan <br>[4] Ridwan Affandi </td>
                          <td style="width: 18%;">Rifky Annuary </td>
                          <td style="width: 15%;">2022 </td>
                        </tr>
                        
                      
                    </table>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="card mt-4" style="margin-left: 30px; border-radius:10px;">

                 
                      <div class="card-body bg-penyu">
                          <form>
                            <h3 style="text-align:center; font-style: normal; font-size: 20px; font-weight: 500; font-family: 'Montserrat';">Cari Penelitian</h3>
                            <h3 style="text-align:center; width: 100%; background-color: #0a0a0a; height: 2px"></h3>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label" style="color: aliceblue; ">Judul</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" CARI JUDUL">
                              
                              </div>
                              <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label"style="color: aliceblue">Objek</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" CARI OBJEK">
                                
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label"style="color: aliceblue">Penelitian</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" CARI PENELITIAN">
                        
                              </div>
                              <div class="mb-3">
                                <label for="tahun" class="form-label" style="color: aliceblue">Tahun</label>
                                <input type="tahun" class="form-control" id="tahun"  placeholder="CARI TAHUN PENELITIAN">
                              </div>
                              <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1" style="color: aliceblue">Check me out</label>
                              </div>
                              <button type="submit" class="btn btn-lights">Submit</button>
                            </form>
                      </div>
                    </div>
                  </div>
                <div class="card-body">
              </div>
            </div>
            
            <!-- Blog post-->
          
        </div>



            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=3">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Sports</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</a>
                    <p href="#" class="text-sm pb-3">
                        By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on October 22nd, 2019
                    </p>
                    <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet posuere magna..</a>
                    <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <!-- Pagination -->
            <div class="flex items-center py-8">
                <a href="#" class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
                <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next <i class="fas fa-arrow-right ml-2"></i></a>
            </div>

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
        
            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <a href="">
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="https://source.unsplash.com/collection/1346951/150x150?sig=1" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                          <div class="font-bold text-xl mb-2">The Coldest Sunset</div>
                          <p class="text-gray-700 text-base">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                          </p>
                        </div>
                        <div class="px-6 pt-4 pb-2">
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
                          <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
                        </div>
                      </div>
                    </a>
            </div>

        </aside>

    </div>

    <footer class="w-full border-t bg-white pb-12" >
        <body class="antialiased sans-serif bg-gray-200">
            <div x-data="app()" x-cloak class="px-4" style="background: #627D98;">
              <div class=" mx-auto py-24">
                <div class="shadow p-6 rounded-lg bg-white">
                  <div class="md:flex md:justify-between md:items-center">
                    <div>
                      <h2 class="text-xl text-gray-800 font-bold leading-tight">Product Sales</h2>
                      <p class="mb-2 monserat text-gray-600 text-sm">Monthly Average</p>
                    </div>
          
                    <!-- Legends -->
                   
                  </div>
          
                  <div class="line my-8 relative">
                    <!-- Tooltip -->
                    <template x-if="tooltipOpen == true">
                      <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block" :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`">
                        <div class="shadow-xs rounded-lg bg-white p-2">
                          <div class="flex items-center justify-between text-sm">
                            <div>Sales:</div>
                            <div class="font-bold ml-2">
                              <span x-html="tooltipContent"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </template>
          
                    <!-- Bar Chart -->
                    <div class="flex -mx-2 items-end mb-2">
                      <template x-for="data in chartData">
          
                        <div class="px-2 w-1/6">
                          <div :style="`height: ${data}px`" class="transition ease-in duration-200 bg-blue-600 hover:bg-blue-400 relative" @mouseenter="showTooltip($event); tooltipOpen = true" @mouseleave="hideTooltip($event)">
                            <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                          </div>
                        </div>
          
                      </template>
                    </div>
          
                    <!-- Labels -->
                    <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
                    <div class="flex -mx-2 items-end">
                      <template x-for="data in labels">
                        <div class="px-2 w-1/6">
                          <div class="bg-red-600 relative">
                            <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                            <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                          </div>
                        </div>
                      </template>
                    </div>
          
                  </div>
                </div>
              </div>
            </div>
          
            <script>
              function app() {
                return {
                  chartData: [112, 10, 225, 134, 101, 80, 50, 100, 200],
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
                  tooltipContent: '',
                  tooltipOpen: false,
                  tooltipX: 0,
                  tooltipY: 0,
                  showTooltip(e) {
                    console.log(e);
                    this.tooltipContent = e.target.textContent
                    this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
                    this.tooltipY = e.target.clientHeight + e.target.clientWidth;
                  },
                  hideTooltip(e) {
                    this.tooltipContent = '';
                    this.tooltipOpen = false;
                    this.tooltipX = 0;
                    this.tooltipY = 0;
                  }
                }
              }
            </script>
          </body>

          
    </footer>
    <footer class="footer-1 bg-gray-100  sm:py-12" style="background: #627D98;">
      <div class="container mx-auto ">
        <div class="sm:flex sm:flex-wrap sm:-mx-4 md:py-4">
          <div class="px-4 mt-1 sm:w-1/3 xl:w-1/6 sm:mx-auto xl:mt-0 xl:ml-auto">
            <h5 class="text-xl font-bold mb-6 sm:text-center xl:text-center ">Location</h5>
            <div class="flex sm:justify-center ">
              <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=-7.319566651942749,%20106.38731121353881&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:left;height:200px;width:300px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:300px;}</style></div></div>          
                               
              
            </div>
          </div>
          <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0">
            <h5 class="text-xl font-bold mb-6">features</h5>
            <ul class="list-none footer-links">
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Resource</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Resource name</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Another resource</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Final resource</a>
              </li>
            </ul>
          </div>
          <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 sm:mt-0">
            <h5 class="text-xl font-bold mb-6">Resources</h5>
            <ul class="list-none footer-links">
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Resource</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Resource name</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Another resource</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Final resource</a>
              </li>
            </ul>
          </div>
          <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
            <h5 class="text-xl font-bold mb-6">About</h5>
            <ul class="list-none footer-links">
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Team</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Locations</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Privacy</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Terms</a>
              </li>
            </ul>
          </div>
          <div class="px-4 sm:w-1/2 md:w-1/4 xl:w-1/6 mt-8 md:mt-0">
            <h5 class="text-xl font-bold mb-6">Help</h5>
            <ul class="list-none footer-links">
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Support</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Help Center</a>
              </li>
              <li class="mb-2">
                <a href="#" class="border-b border-solid border-transparent hover:border-purple-800 hover:text-purple-800">Contact Us</a>
              </li>
            </ul>
          </div>
          
        </div>
    
        </div>
      </div>
    </footer>
    <script>
        function getCarouselData() {
            return {
                currentIndex: 0,
                images: [
                    'https://source.unsplash.com/collection/1346951/800x800?sig=1',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=2',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=3',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=4',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=5',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=6',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=7',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=8',
                    'https://source.unsplash.com/collection/1346951/800x800?sig=9',
                ],
                increment() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex + 1;
                },
                decrement() {
                    this.currentIndex = this.currentIndex === this.images.length - 6 ? 0 : this.currentIndex - 1;
                },
            }
        }
    </script>
          <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>
</html>