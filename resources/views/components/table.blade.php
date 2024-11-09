
  <div class="mx-[40px] my-[20px]">
    <h1 class="text-[30px] font-medium">Tabel</h1>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left text-gray-500 ">
          <thead class="text-xs text-gray-700 uppercase bg-gray-300 ">
            
              <tr>
                  <th scope="col" class="px-6 py-3">Nama</th>
                  <th scope="col" class="px-6 py-3">Nim</th>
                  <th scope="col" class="px-6 py-3">Kelas</th>
                  <th scope="col" class="px-6 py-3">Prodi</th>
                  <th scope="col" class="px-6 py-3">Aksi</th>

                  
                  {{-- @foreach ($columns as $column)
                    <th scope="col" class="px-6 py-3">{{ $column }}</th>
                    @endforeach
                    
                    =====tambahin logic=====
                    @if (session())
                    <th scope="col" class="px-6 py-3">Aksi</th>
                    @endif --}}
              </tr>
          </thead>
          <tbody>
              <tr class="odd:bg-white even:bg-gray-50 dark:border-gray-700">
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">Bambang</th>
                  <td class="px-6 py-4">009</td>
                  <td class="px-6 py-4">3F</td>
                  <td class="px-6 py-4">Jaringan</td>
                  <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ubah</a>
                  </td>
              </tr>
              
              {{-- @foreach ($data as $row)
                    <tr class="odd:bg-white even:bg-gray-50 dark:border-gray-700">
                        @foreach ($row as $cell)
                            <td class="px-6 py-4">{{ $cell }}</td>
                        @endforeach
                        
                        =====tambahin logic=====
                        @if (session())
                        <td class="px-6 py-4">
                          <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">ubah</a>
                          <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">hapus</a>
                      </td>
                        @endif
                    </tr>
                @endforeach --}}
            
            </tbody>
      </table>
    </div>
  </div>
