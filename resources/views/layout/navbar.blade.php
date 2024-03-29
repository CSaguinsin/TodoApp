<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <nav  class="block w-full max-w-screen-xl px-6 py-3 mx-auto text-white backdrop-saturate-200">
  <div class="flex items-center justify-between text-blue-gray-900">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="../assets/DosmartLogo.png" class="w-30 h-20"  />
  </a>
    <div class="hidden lg:block">
      <ul class="flex flex-col gap-2 my-2 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
        <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
          <a href="/" class="seconddescription flex items-center transition-colors hover:text-blue-500">
            Home
          </a>
        </li>
        {{-- <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
          <a href="/task" class="flex items-center transition-colors hover:text-blue-500">
            Task
          </a> --}}
        </li>
        <li class="block p-1 font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
          <a href="https://github.com/CSaguinsin/TodoApp" target="_blank" class="seconddescription flex items-center transition-colors hover:text-blue-500">
            Docs
          </a>
        </li>

      </ul>
    </div>
    <button
      class="relative ml-auto h-6 max-h-[40px] w-6 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-inherit transition-all hover:bg-transparent focus:bg-transparent active:bg-transparent disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none lg:hidden"
      type="button">
      <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
          aria-hidden="true" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
        </svg>
      </span>
    </button>
  </div>
</nav>
</body>
</html>
