@extends('layouts.FrontPage')
@section('template')
 <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Technology</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Automotive</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Finance</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Politics</a>
                <a href="#" class="hover:bg-gray-400 rounded py-2 px-4 mx-2">Culture</a>
                <a href="#" class="rounded py-2 px-4 mx-2"><button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                  Lihat Virtual Tour
                </button>
              </a>
                
            </div>
        </div>
    </nav>


    <div class="container mx-auto md:mx-auto flex flex-wrap py-6">

        <!-- Posts Section -->
        
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
               

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
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
                </div>
            </article>

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=2">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">Automotive, Finance</a>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4">Lorem Ipsum Dolor Sit Amet Dolor Sit Amet</a>
                    <p href="#" class="text-sm pb-3">
                        By <a href="#" class="font-semibold hover:text-gray-800">David Grzyb</a>, Published on January 12th, 2020
                    </p>
                    <a href="#" class="pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis porta dui. Ut eu iaculis massa. Sed ornare ligula lacus, quis iaculis dui porta volutpat. In sit amet posuere magna..</a>
                    <a href="#" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
                </div>
            </article>

            <div class="relative overflow-x-auto shadow-md sm:rounded-xxl px-8 rounded-lg" style="background: #f6f7f9;">
                   
                <div class="flex flex-cols-1"> 
                    <div class="my-11">
                        <p class="flex justify-center underline underline-offset-8 text-center whitespace-pre-line text-2xl" >Daftar  Penelitian</p>
                        <table class="w-full mt-7 p-8 text-sm text-left text-gray-500 dark:text-gray-400 ">
                      
                            <thead class="text-xs text-gray-700 border-b-2 border-gray-900 bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                           
                                <tr>
                                    <th scope="col" class="px-9 py-3">
                                    Judul Penelitian
                                    </th>
                                    <th scope="col" class="px-9 py-3">
                                    Nama Peneliti
                                    </th>
                                    <th scope="col" class="px-9 py-3">
                                     Objek Penelitian
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                    Tahun
                                    </th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-b-2 dark:bg-gray-800 dark:border-gray-900">
                                    <th scope="row" class="px-1 py-2 font-medium text-gray-900 dark:text-white whitespace-normal indent-3">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sistem Informasi Pengawasan dan Konservasi Penyu di Balai Konservasi Pantai pangumbahan Sukabumi</a>
                                    </th>
                                    <td class="px-6 py-4"> 
                                        Rifky Annuary
                                    </td>
                                    <td class="px-6 py-4">
                                        Flora kawasan Konservasi
                                    </td>
                                    <td class="px-6 py-4">
                                        2999
                                    </td>
                                   
                                </tr>
                                <tr class="bg-white border-b-2 dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-1 py-2 font-medium text-gray-900 dark:text-white whitespace-normal indent-2">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Sistem Informasi Pengawasan dan Konservasi Penyu di Balai Konservasi Pantai pangumbahan Sukabumi</a>
                                    </th>
                                    <td class="px-6 py-4"> 
                                        Rifky Annuary
                                    </td>
                                    <td class="px-6 py-4">
                                        Flora kawasan Konservasi
                                    </td>
                                    <td class="px-6 py-4">
                                        2999
                                    </td>
                                  
                                </tr>
                            </tbody>
                            
                        </table>
                    </div>
                        <div class="md:w-full md:flex justify-end py-10">
                            <div class="w-full max-w-sm">
                                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">

                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                        <p class="flex justify-center text-center whitespace-pre-line text-xl mb-5" >Search</p>
                                    </label>
                                  <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                      Judul
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                                  </div>
                                  <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                      Object
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder=" Object">
                                  </div>
                                  <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                     Penelitian
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Penelitian">
                                  </div>

                                  <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                      Tahun
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Tahun">
                                  </div>
                                  <div class="flex items-center justify-between">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                     search
                                    </button>
                                    
                                  </div>
                                </form>
                               
                              </div>
                        </div>
                    </div>  
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
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Get to know us
                </a>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Instagram</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                </div>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
                </a>
            </div>

        </aside>

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

    </div>

@endsection