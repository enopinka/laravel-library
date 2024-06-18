<x-layout-admin>
  <div class="max-w-3xl mx-auto my-4 px-4">
    <p class="my-4 text-lg font-semibold">Tambah Barang Baru</p>

    <form method="post" action="{{ isset($book) ? route('updateBook', $book->id) : '/admin/add-items' }}">
      @csrf
      @if(isset($book))
      @method('PUT')
      @endif

      <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="title" id="title" value="{{ isset($book) ? $book->title : '' }}"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " required />
        <label for="title"
          class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Judul</label>
      </div>

      <div class="relative z-0 w-full mb-5 group">
        <input type="text" name="author" id="author" value="{{ isset($book) ? $book->author : '' }}"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " required />
        <label for="author"
          class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Penulis</label>
      </div>

      <div class="relative z-0 w-full mb-5 group">
        <input type="number" name="year" id="year" value="{{ isset($book) ? $book->year : '' }}"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
          placeholder=" " required />
        <label for="year"
          class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tahun
          Terbit</label>
      </div>

      <div class="relative z-0 w-full mb-5 group">
        <select name="availability" id="availability"
          class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border border-gray-300 rounded-md focus:outline-none focus:ring-0 focus:border-blue-600 peer">
          <option value="">Pilih Ketersediaan</option>
          <option value="1" {{ isset($book) && $book->availability == 1 ? 'selected' : '' }}>Tersedia</option>
          <option value="0" {{ isset($book) && $book->availability == 0 ? 'selected' : '' }}>Tidak Tersedia</option>
        </select>
        <label for="availability"
          class="absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:left-auto peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Ketersediaan</label>
      </div>

      <div class="flex justify-end gap-4">
        <a href="/"
          class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Cancel</a>
        <button type="submit" method="post"
          class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Submit</button>
      </div>
    </form>


  </div>
  </x-layout>