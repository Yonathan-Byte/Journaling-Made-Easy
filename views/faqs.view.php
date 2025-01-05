
   <?php require('partials/head.php');?>
   <?php require('partials/nav.php');?>
   <?php require('partials/title.php');?>

<main>
   <div class="mx-auto max-w-txl py-6 sm:px-6 lg:px-8">
   <ul>
   <?php foreach ($questions as $question) :?>
        <a href="/answers?id=<?=$question['id']?>" class="text-blue-500 hover:underline">
        <li><?=htmlspecialchars($question['question'])?></li>
        </a>
        
    <?php endforeach;?>
   </ul> 
   <p class=" mt-6">
     <a href="/ask" class="text-orange-500 hover:underline">Ask a question</a>
   </p>

</div> 
</main>

    <?php //require('partials/footer.php');?>
   
</html>
