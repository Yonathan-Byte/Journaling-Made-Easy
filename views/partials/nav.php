<header class="border-b bg-gray-800 text-white">
  <div class="container mx-auto flex items-center justify-between p-4">
    <a href="/">
      <div class="text-2xl font-bold">Reflectify</div>
    </a>
    <!-- Hamburger Menu Button (visible on mobile) -->
    <button 
      id="mobile-menu-button"
      class="block lg:hidden text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-gray-300"
    >
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>
    <!-- Navigation Links -->
    <nav id="mobile-menu" class="hidden lg:block">
      <ul class="flex flex-col lg:flex-row lg:space-x-6 space-y-4 lg:space-y-0">
        <li>
          <a
            href="/about"
            class="<?= urlIs('/about') ? 'rounded-md bg-gray-900 text-orange-500 hover:text-white ' : 'text-gray-300'; ?> px-3 py-2 text-sm font-medium hover:text-orange-500"
          >About us</a>
        </li>
        <li>
          <a
            href="/notes"
            class="<?= urlIs('/notes') ? 'rounded-md bg-gray-900 text-orange-500 hover:text-white ' : 'text-gray-300'; ?> px-3 py-2 text-sm font-medium hover:text-orange-500"
          >Quick Notes</a>
        </li>
        <li>
          <a
            href="/faqs"
            class="<?= urlIs('/faqs') ? 'rounded-md bg-gray-900 text-orange-500 hover:text-white ' : 'text-gray-300'; ?> px-3 py-2 text-sm font-medium hover:text-orange-500"
          >FAQs</a>
        </li>
        <li>
          <a
            href="/contact"
            class="<?= urlIs('/contact') ? 'rounded-md bg-gray-900 text-orange-500 hover:text-white' : 'text-gray-300'; ?> px-3 py-2 text-sm font-medium hover:text-orange-500"
          >Contact Us</a>
        </li>
      </ul>
    </nav>
  </div>
</header>

<script>
  // Toggle the mobile menu
  document.getElementById('mobile-menu-button').addEventListener('click', function () {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  });
</script>
