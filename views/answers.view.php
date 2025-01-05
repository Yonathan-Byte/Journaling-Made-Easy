
   <?php require('partials/head.php');?>
   <?php require('partials/nav.php');?>
   <?php require('partials/title.php');?>

<main>
   <div class="mx-auto max-w-txl py-6 sm:px-6 lg:px-8">
    <?php 
        
        echo "<p class='text-gray-500 '>".htmlspecialchars($answers['answer'])."</p>";
        echo "<a href='/faqs' class='text-blue-500 hover:underline'>Go back</a>";
        
  ?>

</div> 
</main>

    <?php //require('partials/footer.php');?>
   
</html>
