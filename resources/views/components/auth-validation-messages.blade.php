@if ($message = Session::get('success'))
    
<div  class="animate-bounce flex w-full max-w-sm fixed bottom-5 right-5  overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800" x-data='{open : true}' x-show="open" @click="open = !open">
    <div class="flex items-center justify-center w-12 bg-green-500">
        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
        </svg>
    </div>

    <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
            <span class="font-semibold text-green-500 dark:text-green-400">Succès</span>
            <p class="text-sm text-gray-600 dark:text-gray-200">{{ $message }}</p>
        </div>
    </div>
</div>


@endif

@if ($message = Session::get('warning'))
<div  class="animate-bounce flex w-full max-w-sm fixed bottom-5 right-5  overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800" x-data='{open : true}' x-show="open" @click="open = !open">
    <div class="flex items-center justify-center w-12 bg-yellow-400">
        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
        </svg>
    </div>

    <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
            <span class="font-semibold text-yellow-400 dark:text-yellow-300">Important</span>
            <p class="text-sm text-gray-600 dark:text-gray-200">{{ $message }}</p>
        </div>
    </div>
</div>
@endif

@if ($message = Session::get('danger'))
<div class="animate-bounce flex w-full max-w-sm fixed bottom-5 right-5 overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800" x-data='{open : true}' x-show="open" @click="open = !open">
    <div class="flex items-center justify-center w-12 bg-red-400">
        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
        </svg>
    </div>

    <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
            <span class="font-semibold text-red-400 dark:text-yellow-300">Attention</span>
            <p class="text-sm text-gray-600 dark:text-gray-200">{{ $message }}</p>
        </div>
    </div>
</div>
@endif