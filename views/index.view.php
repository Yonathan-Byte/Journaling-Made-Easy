
   <?php require('partials/head.php');?>
   <?php require('partials/nav.php');?>

    <!-- Hero Section for the landing page or home basically -->
    <main class="bg-gray-50 ">
    <section class="py-16 px-4">
  <div class="max-w-6xl mx-auto flex flex-col-reverse lg:flex-row items-center">
    <!-- Text Content -->
    <div class="w-full lg:w-1/2 mt-8 lg:mt-0 text-center lg:text-left">
      <h1 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900 leading-tight">
        Transform Your Life Through the Power of Journaling
      </h1>
      <p class="text-base md:text-lg text-gray-600 mt-4 mb-6">
        Unlock personal growth, mental clarity, and emotional wellness
        with our intuitive journaling platform.
      </p>
      <div class="flex flex-col sm:flex-row justify-center lg:justify-start items-center space-y-4 sm:space-y-0 sm:space-x-3">
        <a
          href="#order"
          class="inline-block bg-orange-500 text-white font-semibold py-3 px-6 rounded-lg hover:bg-orange-600"
        >
          Get Started
        </a>
        <a
          href="#order"
          class="inline-block bg-orange-500 text-white font-semibold py-3 px-6 rounded-lg hover:bg-orange-600"
        >
          Send Me a Guide
        </a>
      </div>
      <p class="text-sm text-gray-500 mt-4">
        We'll Never Share Your Info With Anyone.
      </p>
    </div>
    <!-- Image Content -->
    <div class="w-full lg:w-1/2 flex justify-center">
      <img
        src="../images/diary.png"
        alt="Journaling Image"
        class="w-full max-w-md h-auto"
      />
    </div>
  </div>
</section>


      <!-- Benefits Section -->
     
<?php require('partials/section.php');?>

      <!-- Testimonial Section -->
      <section class="py-12 text-center">
        <a href="/testimonials">
          <h2 class="text-2xl font-bold mb-4 hover:underline">
            What Our Users Are Saying About Us?
          </h2>
        </a>
      </section>
    </main>

    <!-- Footer -->
    <?php require('partials/footer.php');?>
   
</html>
