<?php
// Get IP Address Some Conditions to avoid error
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $IP = $_SERVER['HTTP_CLIENT_IP'];
} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $IP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $IP = $_SERVER['REMOTE_ADDR']; 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get Your IP sir!</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  
  <section class="text-gray-600 body-font relative">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-12">
        <br><br>
        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">
            
        <?php 

        echo $IP;

        ?>

        </h1>
      </div>
      <div class="lg:w-1/2 md:w-2/3 mx-auto">
        <div class="flex flex-wrap -m-2">
          <br>
          <br>
          <br>
          <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
            <a class="text-indigo-500">&#169; Fahad Dhruba</a>
            <br>
            <a class="text-indigo-500">dhruba.fahad2004@gmail.com</a>
          </div>
        </div>
      </div>
    </div>
  </section>


</body>
</html>


