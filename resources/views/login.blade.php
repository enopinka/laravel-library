<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- import tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>



  <div class="max-w-3xl mx-auto my-4 border border-slate-300  p-4 rounded-md shadow-md shadow-slate-300">
    <form method="post" action="/login" class="mx-auto">
      @csrf
      <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
        <input type="email" id="email" name="email"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
          placeholder="name@flowbite.com" required />
      </div>
      <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
        <input type="password" id="password" name="password"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
          required />
      </div>
      <div class="flex items-start mb-5">
        <div class="flex items-center">
          <input id="remember" type="checkbox" value=""
            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " />
        </div>
        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 ">Remember me</label>
      </div>
      <div class="flex justify-center items-center">
        <div class="flex flex-col justify-center">
          <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-fit px-5 py-2.5 text-center dark:bg-blue-600  self-center">Submit</button>
          <p class="self-center">Belum Punya Akun?</p>
          <a href="/register" class="self-center ml-2">Daftar</a>
        </div>
      </div>

    </form>
  </div>


</body>

</html>