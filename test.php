<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>What are HTML imports and how do they work</title>
    <link rel="import" href="https://docs.google.com/spreadsheets/d/e/2PACX-1vSwQgEPtQHYkhx1Ff7Bx0xstUTpmRtHT56HTUVisp38lBUxtklcJv23oLlPvWnPvSrojezsgahluJEe/pubhtml">
  </head>
  <body>
    <h1>Hello from Designmodo</h1>
    <?php
    include "https://docs.google.com/spreadsheets/d/e/2PACX-1vSwQgEPtQHYkhx1Ff7Bx0xstUTpmRtHT56HTUVisp38lBUxtklcJv23oLlPvWnPvSrojezsgahluJEe/pubhtml/index.php";
    ?>
 
    <script>
      var link = document.querySelector('link[rel=import]');
      var content = link.import.querySelector('.ritz');
      document.body.appendChild(content.cloneNode(true));
    </script>
 
  </body>
</html>