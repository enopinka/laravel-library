<x-layout-member>
  <div class="max-w-3xl mx-auto my-4 border border-slate-300 p-4 rounded-md shadow-md shadow-slate-300">
    <h2>Pinjam Buku: {{ $book->title }}</h2>
    <form method="post" action="{{ route('borrowBook', $book->id) }}">
      @csrf
      <p>Apakah Anda yakin ingin meminjam buku ini?</p>
      <button type="submit" class="">Pinjam</button>
      <a href="{{ route('manageBooks') }}" class="">Batal</a>
    </form>
</x-layout-member>