<x-layout-member>
  <div class="max-w-3xl mx-auto my-4 border border-slate-300 p-4 rounded-md shadow-md shadow-slate-300">
    <h2>Pinjam Buku: {{ $book->title }}</h2>
    <form method="post" action="{{ route('borrowBook', $book->id) }}">
      @csrf
      <p>Apakah Anda yakin ingin meminjam buku ini?</p>
      <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Pinjam</button>
      <a href="{{ route('manageBooks') }}"
        class="text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Cancel</a>
    </form>
</x-layout-member>