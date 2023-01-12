@if (session('success'))
<div x-show="alert" x-data="{ alert }" class="bg-green-500 text-white my-2 flex flex-row items-center rounded-lg px-2 py-1 text-base" role="alert" id="alert">
    <div @click.outside="alert = false"> {{session('success')}} </div>
    <button @click="alert = false" class="ml-4 fa-solid fa-xmark"></button>
</div>
@elseif (session('error'))
<div x-show="alert" x-data="{ alert }" class="bg-red-100 my-2 rounded-lg flex flex-row items-center px-2 py-1 text-base text-red-700" role="alert">
    <div @click.outside="alert = false"> {{session('error')}} </div>
    <button @click="alert = false" class="ml-4 fa-solid fa-xmark"></button>
</div>
@endif