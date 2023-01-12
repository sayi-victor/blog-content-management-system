<header class="p-1 mb-2 bg-green-300 text-gray-800 w-full text-white flex flex-row justify-between sm:hidden">
    {{-- User profile control --}}
    <div class="hidden" x-data="{usercontrol: false}">
        {{-- We'll add it later --}}
        <button @click="usercontrol =! usercontrol"> 
            <i class="fa-solid fa-user mr-2 text-2xl"></i>
        </button>
        <div x-show="usercontrol" @click.outside="usercontrol = false" class="bg-teal-400 top-0 px-2 py-4 flex flex-col left-0 fixed h-screen w-60">
            @guest
                <a class="text-left text-xl p-2 hover:underline" href="/login"> Log in </a>
                <a class="text-left text-xl p-2 hover:underline"  href="/register"> Create Account </a>
            @endguest
            @auth
            <div> 
                <span class="text-left text-xl p-2"> {{Auth::user()->username}} </span>
                <span class="text-sm border border-teal-700 rounded-md px-1 py-0.5"> {{UserType::get_user_type(Auth::user()->user_type)}} </span>
            </div>
                <a class="text-left text-xl p-2 hover:underline"  href="/profile"> Profile </a>
                <a class="text-left text-xl p-2 hover:underline"  href="/notifications"> Notifications </a>
                <a class="text-left text-xl p-2 hover:underline"  href="/bookmarks"> Bookmarks </a>
                <a class="text-left text-xl p-2 hover:underline"  href="/activity_log"> Activity Log </a>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="text-left text-xl p-2 hover:underline" type="submit"> Logout </button>
                </form>    
            @endauth
        </div> 
    </div>

    {{-- Company logo --}}
    <a href="/" class="font-semibold font-serif text-3xl basis-3/4 text-center"> Times </a>

    
    {{-- Navigation Links  --}}
    
        <div class="md:hidden" x-data="{ddlinks: false}">
            <button @click="ddlinks =! ddlinks"> 
                <i class="fa-solid fa-bars mr-2 text-2xl"></i>
            </button>
            <template x-if="true">
                <div x-show="ddlinks" 
                    @click.outside="ddlinks = false" 
                    class="bg-green-300 text-gray-800 top-0 px-2 py-4 flex flex-col right-0 fixed h-screen w-60">
                    <a class="text-left text-xl p-2 hover:underline" href="/"> Home </a>
                    <a class="text-left text-xl p-2 hover:underline" href="/news/latest"> Latest </a>
                    <a class="text-left text-xl p-2 hover:underline" href="/news/politics"> Politics </a>
                    <a class="text-left text-xl p-2 hover:underline" href="/news/sports"> Sports </a>
                    <a class="text-left text-xl p-2 hover:underline" href="/news/celebrity-news"> Celebrity </a>
                    <a class="text-left text-xl p-2 hover:underline" href="/news/entertainment"> Entertainment </a>
                    <a class="text-left text-xl p-2 hover:underline" href="/news/opinion"> Opinion </a>
                    <a class="text-left text-xl p-2 hover:underline" href="###"> Login </a>
                    <a class="text-left text-xl p-2 hover:underline" href="###"> Create Account </a>
                    <a class="text-left text-xl p-2 hover:underline" href="###"> Advertise Here </a>
                    <a class="text-left text-xl p-2 hover:underline" href="###"> Privacy Policy </a>
                    <a class="text-left text-xl p-2 hover:underline" href="###"> Contact Us </a>
                </div> 
            </template>
        </div>
    
</header>
