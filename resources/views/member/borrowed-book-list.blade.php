<x-layout-member>
  <div class="m-8">
    <div class="mt-8 relative overflow-x-auto shadow-md sm:rounded-lg">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
          <tr>
            <th scope="col" class="px-6 py-3">
              Judul
            </th>
            <th scope="col" class="px-6 py-3">
              Penulis
            </th>
            <th scope="col" class="px-6 py-3">
              Tahun
            </th>
            <th scope="col" class="px-6 py-3">
              Ketersediaan
            </th>
            <th scope="col" class="px-6 py-3">
              <span class="sr-only">Edit</span>
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $book)
          <tr class="bg-white border-b hover:bg-gray-50">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
              {{ $book->title }}
            </th>
            <td class="px-6 py-4">
              {{ $book->author }}
            </td>
            <td class="px-6 py-4">
              {{ $book->year }}
            </td>
            <td class="px-6 py-4">
              @if($book->availability == 1)
              Tersedia
              @else
              Tidak tersedia
              @endif
            </td>
            <td class="px-6 py-4 text-left">
              <div class="flex flex-col justify-start">
                <a href="/return-book/{{$book->id}}"
                  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Kembalikan</a>

              </div>
            </td>
          </tr>
          @endforeach
        </tbody>

      </table>
    </div>
  </div>

</x-layout-member>