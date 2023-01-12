<footer class="p-3 bg-green-300 text-lg text-gray-900 grid sm:flex sm:flex-col">
    <form action="/subscribe" method="POST"
        class="col-span-2 flex flex-row flex-wrap justify-center ">
        @csrf
        <input type="email"  name="email" required placeholder="youremail@example.com"
            class="text-center mr-2 rounded-md py-1 px-2 outline-0 text-black placeholder:text-gray-500">
        <button class="mt-1 px-2 py-1 rounded-md text-white bg-green-700 hover:opacity-80 " type="submit"> Subscribe </button>
        <span class="basis-full text-center"> Subscribe to our weekly newsletter </span>
        @error('email')
            <span class="basis-full text-center text-red-600">{{$message}}</span>
        @enderror
    </form>
    <div class="sm:hidden flex flex-col items-start">
        <a href="/"> Home </a>
        <a href="/news/latest"> Latest </a>
        <a href="/news/politics"> Politics </a>
        <a href="/news/celebrity-news"> Celebrity </a>
        <a href="/news/entertainment"> Entertainment </a>
        <a href="/news/sports"> Sports </a>
        <a href="###"> Technology </a>
        <a href="###"> Science </a>
        <a href="/news/opinion"> Opinion </a>
        <a href="###"> Business </a>
        <a href="###"> How-to's </a>
    </div>
    <div class="flex flex-col sm:flex-row flex-wrap my-2 justify-center">
        <a class="sm:border-l first-of-type:border-l-0 sm:border-l-gray-400 hover:underline sm:mr-x-0.5 sm:p-1" href="###"> Contact Us </a>
        <a class="sm:border-l first-of-type:border-l-0 sm:border-l-gray-500 hover:underline sm:mr-x-0.5 sm:p-1" href="###"> Advertise Here </a>
        <a class="sm:border-l first-of-type:border-l-0 sm:border-l-gray-400 hover:underline sm:mr-x-0.5 sm:p-1" href="###"> Disclaimer </a>
        <a class="sm:border-l first-of-type:border-l-0 sm:border-l-gray-400 hover:underline sm:mr-x-0.5 sm:p-1" href="###"> Comment Policy </a>
        <a class="sm:border-l first-of-type:border-l-0 sm:border-l-gray-400 hover:underline sm:mr-x-0.5 sm:p-1" href="###"> Privacy Policy </a>
        <a class="sm:border-l first-of-type:border-l-0 sm:border-l-gray-400 hover:underline sm:mr-x-0.5 sm:p-1" href="###"> Cookie Policy </a>
        <a class="sm:border-l first-of-type:border-l-0 sm:border-l-gray-400 hover:underline sm:mr-x-0.5 sm:p-1" href="###"> Do not track </a>
        <a class="sm:border-l first-of-type:border-l-0 sm:border-l-gray-400 hover:underline sm:mr-x-0.5 sm:p-1" href="###"> Terms & Conditions </a>
        <a class="sm:border-l first-of-type:border-l-0 sm:border-l-gray-400 hover:underline sm:mr-x-0.5 sm:p-1" href="###"> Careers </a>
    </div>
    <div class="col-span-2 flex flex-col  text-sm text-center"> 
        <button type="button" class="sm:hidden text-base"> Back to top </button>
        <div>
            <span class="border-r border-r-gray-400 p-1 mr-1">  Times&copy; {{date('Y')}} </span> 
            <span>  All Rights Reserved  </span>
         </div>
    </div>
</footer>