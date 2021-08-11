<?php

class Page  {

    static function header() { 
    ?>
    <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>My Wallet</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
    <script type="text/javascript" src="script.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="myWalletHome.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
  </head>
  <body class="text-center" onload="addToMain()">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="masthead">
    <div class="inner">
      <h3 class="masthead-brand">My Wallet</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="index.php">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header>
    <?php
    }

    static function footer()    { 
    ?>
              <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>Created by @Haruka_Kotani</p>
    </div>
  </footer>
</div>
</body>
</html>

</body>
</html>
    <?php
    }  

    static function main(){
        ?>

  <main role="main" class="inner cover">
    <h2 class="cover-heading" >Your balance: </h2><h1 id="balance">$0.00</h2>
  
    <p class="lead">
      <a href="expenses.php" id="incomeBtn" class="btn btn-lg btn-secondary">+</a>
      <a href="income.php" id="expensesBtn" class="btn btn-lg btn-secondary">-</a>
    </p>

    <table>

      <p>table here </p>
      <p>001: 09/01/2020 income $50000 restaurant balance $-50000</p>

      <p id="displayTittle"> Something</p>



    </table>
  </main>

  <script>
    function incomeFunction(){
      window.location.replace("income.html");
    }

    function expensesFunction(){
      window.location.replace("expenses.php");
    
  </script>
        <?php
    }

    static function expenses(){
      ?>
       <main role="main" class="inner cover">
    <label for="tittle">Tittle </label>
    <input type="text" id="tittle"><br>
    <label for="amount">$ </label>
    <input type="number" id="amount"><br>

     
    <a href="" id="addToMain" class="btn btn-lg btn-secondary" >ADD</a>
    <a href="index.php" id="goBackToMain" class="btn btn-lg btn-secondary" >Back to Main</a>
  </main>


<?php
    }

}