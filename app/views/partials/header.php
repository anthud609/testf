<div
      class="fixed top-0 right-0 m-8 p-3 text-xs font-mono text-white h-6 w-6 rounded-full flex items-center justify-center bg-gray-700 sm:bg-pink-500 md:bg-orange-500 lg:bg-green-500 xl:bg-blue-500"
    >
      <div class="block  sm:hidden md:hidden lg:hidden xl:hidden">al</div>
      <div class="hidden sm:block  md:hidden lg:hidden xl:hidden">sm</div>
      <div class="hidden sm:hidden md:block  lg:hidden xl:hidden">md</div>
      <div class="hidden sm:hidden md:hidden lg:block  xl:hidden">lg</div>
      <div class="hidden sm:hidden md:hidden lg:hidden xl:block">xl</div>
    </div>

    <!-- Global App Header -->
    <header
      class="bg-gradient-to-r from-purple-600 to-indigo-600 text-white flex items-center justify-between px-6 py-3 shadow-md flex-shrink-0"
    >
      <div class="flex items-center space-x-3">
        <i class="fas fa-rocket text-2xl"></i>
        <span class="text-xl font-bold tracking-wide hidden sm:inline"
          >BPO Ops Management</span
        >
      </div>
      <div class="flex items-center space-x-4">
        <!-- Hamburger button (mobile) -->
        <button
          class="p-2 rounded-full hover:bg-purple-1000/20 focus:outline-none focus:ring-2 focus:ring-white block lg:hidden"
          @click="mobileAsideOpen = true"
        >
          <i class="fas fa-bars"></i>
        </button>

        <div class="relative hidden md:block">
          <input
            type="text"
            placeholder="Search..."
            class="pl-10 pr-4 py-1 rounded-full bg-white text-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-400"
          />
          <i
            class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"
          ></i>
        </div>
        <button
          class="p-2 rounded-full hover:bg-purple-1000/20 focus:outline-none focus:ring-2 focus:ring-white"
        >
          <i class="fas fa-envelope"></i>
        </button>
        <button
          class="p-2 rounded-full hover:bg-purple-1000/20 focus:outline-none focus:ring-2 focus:ring-white"
        >
          <i class="fas fa-bell"></i>
        </button>
        <button
          class="p-2 rounded-full hover:bg-purple-1000/20 focus:outline-none focus:ring-2 focus:ring-white"
        >
          <i class="fas fa-th-list"></i>
        </button>
        <div class="flex items-center space-x-2 cursor-pointer">
          <img
            src="https://via.placeholder.com/32"
            alt="User avatar"
            class="w-8 h-8 rounded-full"
          />
          <span class="hidden sm:inline">Manager</span>
        </div>
      </div>
    </header>
