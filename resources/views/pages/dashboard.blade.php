@extends('layouts.dashboard')

@section('content')
    <div class="">
        <h1 class="title-section">beranda</h1>
        <div class="">
            <div class="flex flex-col md-max:flex-row  rounded-xl gap-[15px]">
                <div id="dosen" class="p-[20px] border-2 w-full border-[#C5CEFF] rounded-lg bg-white drop-shadow-[0_0_18px_rgba(76,92,180,.25)]">
                    <h2 class="subtitle-section">dosen</h2>
                    <h4 class="font-bold text-[30px] md:text-[35px]">20</h4>
                    <span class="font-normal text-gray-500">jumlah dosen</span>
                </div>
                <div id="mahasiswa" class="p-[20px] border-2 w-full border-[#C5CEFF] rounded-lg bg-white drop-shadow-[0_0_18px_rgba(76,92,180,.25)]">
                    <h2 class="subtitle-section">mahasiswa</h2>
                    <h4 class="font-bold text-[30px] md:text-[35px]">120</h4>
                    <span class="font-normal text-gray-500">jumlah mahasiswa</span>
                </div>
                
                <div id="laporan_masalah" class="p-[20px] border-2 w-full border-[#C5CEFF] rounded-lg bg-white drop-shadow-[0_0_18px_rgba(76,92,180,.25)]">
                    <h2 class="subtitle-section">laporan masalah</h2>
                    <h4 class="font-bold text-[30px] md:text-[35px]">144+</h4>
                    <span class="font-normal text-gray-500">jumlah laporan</span>
                </div>
            </div>
            
        </div>
    </div>
@endsection

