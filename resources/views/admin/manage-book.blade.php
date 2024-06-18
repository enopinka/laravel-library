<x-layout-admin>
  <div class="max-w-4xl mx-auto mt-4 px-8">
    @if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
      {{ session('success') }}
    </div>
    @endif
    @if(session('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
      {{ session('error') }}
    </div>
    @endif
  </div>

  <div class="m-8">
    <a href="/admin/add-items"
      class="text-white my-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Tambah
      Barang Baru</a>

    <div>
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
            @foreach ($data as $data)
            <tr class="bg-white border-b hover:bg-gray-50 ">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                {{$data->title}}
              </th>
              <td class="px-6 py-4">
                {{$data->author}}
              </td>
              <td class="px-6 py-4">
                {{$data->year}}
              </td>
              <td class="px-6 py-4">
                @if($data->availability == 1)
                Tersedia
                @else
                Tidak tersedia
                @endif
              </td>
              <td class="px-6 py-4 text-left">
                <div class="flex flex-col justify-start">
                  <a href="/admin/manage-book/edit/{{ $data->id }}"
                    class="font-medium text-blue-600 hover:underline">Edit</a>

                  <a href="/admin/manage-book/delete/{{$data->id}}"
                    class="font-medium text-blue-600  hover:underline">Delete</a>
                </div>
              </td>

            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
</x-layout-admin>