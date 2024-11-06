<div class="flex capitalize">
  <aside id="sidebar" class="sidebar">
      <div class="flex justify-between items-center px-[20px] pt-[20px] pb-[110px]">
          <div class="flex gap-4">
              <img class="border border-white logo-sidebar" src="img/logo.png" alt="Logo JTI">
              <img class="logo-sidebar" src="img/logo-pnb.png" alt="Logo PNB">
          </div>

          <button onclick="closeSidebar()" id="btn-closeSide" class="icons btn color-btn-close"><i class='bx bx-left-arrow-alt' ></i></button>
      </div>
      <div class="pl-[20px]">
          <span class="span-menu">menu</span>
          <ul class="menu-sidebar">
              <li class="hover:bg-[#4545C1] "><a href="" class="flex-center"><i class='icons pr-[20px] bx bxs-home'></i>dashboard</a></li>
          </ul>

      </div>
  </aside>
  <div class="flex flex-col w-full">
      <header class="border-b l-navbar">
          <nav class="b-container nav">
              <button onclick="openSidebar()" id="btn-menu" class="btn color-btn-menu icons"><i class='bx bx-menu' ></i></button>

              <div class="flex items-center gap-[10px] md:gap-[25px] justify-end w-full max-w-[500px]">
                  <button id="btn-darkmode" class="btn-full color-btn-navbar icons"><i class=' bx bxs-sun' ></i></button>
                  <button id="btn-notificaton" class="btn-full color-btn-navbar icons"><i class='bx bxs-bell' ></i></button>
                  <div class="flex gap-[15px]">
                      <div class="hidden md:flex-col md:flex">
                          <!-- menampilkan nama panggilan pengguna -->
                          <h1 class="font-semibold text-right text-mobile-heading">putri </h1>
                           <!-- Menampilkabn Role seperti "mahasiswa 3C TRPL" -->
                          <span class="font-normal ">{{ session('role') }}</span>
                      </div>
                      <div>
                          <button id="dropdownButton" class="flex-center pt-1 gap-[10px]">
                              <img class="w-[50px] h-[50px] rounded-full" src="https://randomuser.me/api/portraits/women/85.jpg" alt="">

                              <div class="hidden md:flex">
                                  <i class='icons bx bx-chevron-down'></i>
                              </div>
                          </button>
                          <div id="dropdownMenu" class="absolute right-[20px] z-50 hidden w-[250px] mt-[5px] bg-white rounded-b-md shadow-lg">
                              <div class="py-3 border-b " role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                                  <button class="dropMenu-list"><i class='text-icon-mobile pr-[20px] bx bxs-cog' ></i>pengaturan</button>
                              </div>
                                  <a href="/" class="dropMenu-list logout" role="menuitem"><i class='text-icon-mobile pr-[20px] bx bx-exit' ></i>keluar</a>
                          </div>
                      </div>
                  </div>
              </div>
          </nav>
      </header>
      <div class="mx-[40px] my-[20px]">
        <x-dashboard.content />
      </div>
  </div>
</div>
