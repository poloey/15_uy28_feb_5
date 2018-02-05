<?php   

$fruits = ['apple', 'orange', 'banana'];



 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <title>all fruits</title>
   <link rel="stylesheet" href="bootstrap.min.css">
 </head>
 <body class="bg-info">
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h2>All fruits</h2>
      </div>
      <div class="card-body">
        <ul class="list-group">
          <?php for($i = 0; $i < count($fruits); $i++): ?>
            <li class="list-group-item mb-2"><?php echo $fruits[$i]; ?></li>
          <?php endfor; ?>
        </ul>
      </div>
    </div>
  </div>
   
 </body>
 </html>