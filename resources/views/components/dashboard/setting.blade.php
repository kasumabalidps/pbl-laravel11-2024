
<div class="h-max">
  <h1 class="title-section">Pengaturan</h1>
  <div class="flex flex-col lg:flex-row gap-[15px] lg:justify-center">
    <div id="info-pengguna" class="border border-[#C5CEFF] rounded-lg mb-[15px] w-full lg:max-w-[400px] lg:max-h-[450px] bg-white drop-shadow-[0_0_18px_rgba(76,92,180,.25)]">
      <h2 class="subtitle-section mx-[20px] my-[10px]">informasi pengguna</h2>
      <form action="" method="post" class="flex flex-col text-[14px] mx-[20px]">
        <div class="flex flex-col lg:flex-row gap-[10px]">
          <div class="lg:flex-col lg:flex lg:w-[250px]">
            <label class="label-form" for="nama_pengguna">nama pengguna</label>
            <input class="w-full input-form" type="text" name="nama_pengguna">
          </div>
          <div class="lg:flex-col lg:flex lg:w-[250px]">
            <label class="label-form" for="kelas">kelas</label>
            <input class="w-full input-form" type="text" name="kelas">
          </div>
        </div>
          <label class="label-form" for="nim">nim</label>
          <input class="input-form" type="text" name="nim">
          <label class="label-form" for="nama lengkap">nama lengkap</label>
          <input class="input-form" type="text" name="nama_lengkap">

          <div class="flex mt-[25px] mb-[20px] justify-end gap-4 ">
            <button class="border-2 rounded-lg border-[#C5CEFF] text-[#C5CEFF] bg-transparent font-medium  px-[20px] py-[10px]" type="reset">Keluar</button>
            <button class="rounded-lg bg-[#6161EC] text-white font-medium px-[20px] py-[10px]" type="submit">Simpan</button>
          </div>
      </form>
    </div>
    <div id="foto-pengguna" class="border border-[#C5CEFF] rounded-lg w-full h-full lg:max-w-[300px] bg-white drop-shadow-[0_0_18px_rgba(76,92,180,.25)]">
      <h2 class="subtitle-section mx-[20px] my-[10px]">profil pengguna</h2>
      <div class="">
        <img class="w-[200px] h-[200px] my-[30px] mx-auto rounded-full" src="https://randomuser.me/api/portraits/women/85.jpg" alt="">
        <form class="hidden" action="" method="post">
          <input type="file">
        </form>
      </div>
      <div class="m-[20px] flex justify-end">
        <button class="rounded-lg bg-[#6161EC] text-white font-medium px-[20px] py-[10px]" type="submit" >Ubah</button>
      </div>
    </div>
  </div>
</div>