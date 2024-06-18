<x-layout-admin>
  <div class="max-w-4xl mx-auto mt-4 px-8">
    @if(Session::get('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
      {{Session::get("success")}}
    </div>
    @endif
    @if(Session::get('error'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative">
      {{Session::get("error")}}
    </div>
    @endif
  </div>


  <div class="m-8 relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
          <th scope="col" class="px-6 py-3">
            Nama
          </th>
          <th scope="col" class="px-6 py-3">
            Email
          </th>
          <th scope="col" class="px-6 py-3">
            <span class="sr-only">Aksi</span>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $data)
        <tr class="bg-white border-b hover:bg-gray-50 ">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
            {{$data->name}}
          </th>
          <td class="px-6 py-4">
            {{$data->email}}
          </td>
          <td class="px-6 py-4 text-right">
            <a href="/admin/manage-user/{{$data->id}}" class="font-medium text-blue-600  hover:underline">Hapus</a>
          </td>

        </tr>
        @endforeach


      </tbody>
    </table>
  </div>

</x-layout-admin>