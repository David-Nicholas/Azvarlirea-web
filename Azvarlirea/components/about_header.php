<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

<header class="about_header">

   <section class="flex">

      <nav class="navbar">
         <a onclick="history.back()">back</a>
      </nav>

   </section>

</header>