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
  <div class="flex flex-row w-full h-screen">
    <div>
      <x-sidebar-admin></x-sidebar-admin>
    </div>
    <div class="flex flex-col w-full ml-64">
      <x-navbar class="w-full"></x-navbar>
      <div class="w-full">
        {{$slot}}
      </div>
    </div>
  </div>


  </div>




</body>