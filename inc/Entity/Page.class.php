<?php

class Page
{

    static $balance = 0;

    public static function header()
    {
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

    public static function footer()
    {
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

    public static function main($records)
    {
        ?>

  <main role="main" class="inner cover">
    <h2 class="cover-heading" >Your balance:</h2><h1 id="balance">$<?php echo self::$balance ?></h2>

    <p class="lead">
      <a href="expenses.php" id="incomeBtn" class="btn btn-lg btn-secondary">+</a>
      <a href="income.php" id="expensesBtn" class="btn btn-lg btn-secondary">-</a>
    </p>

    <table>

      <table>

      <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Category</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>

      <?php
      foreach($records as $record){
        echo "<tr>";
        echo "<td>". $record->getRecordID(). "</td>";
        echo "<td>". $record->getRecordDate(). "</td>";
        echo "<td>". $record->getAmount(). "</td>";
        echo "<td>". $record->getCategory(). "</td>";
        echo "<td>". $record->getRecordType(). "</td>";
        echo "</tr>";

        self::$balance += $record->getAmount();
      }

      ?>
  </tbody>
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

    public static function expenses()
    {
        ?>
     
      <main role="main" class="inner cover">
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <label for="category">category</label>

      <select name="category" id="cars">
        <option value="food">Food</option>
        <option value="gas">Gas</option>
        <option value="food">Food</option>
        <option value="audi">Audi</option>
      </select>
      <label for="amount">$ </label>
      <input type="number" id="amount" name="amount"><br>
      <input type="date" name="date">

      <input type="submit" name="submit" value="add">
      <a href="" id="addToMain" value="add">ADD</a>
      <a href="index.php" id="goBackToMain" class="btn btn-lg btn-secondary" >Back to Main</a>
      </form>
      </main>
    

<?php
}

    public static function topPage()
    {
        ?>
<main role="main" class="inner cover">

  <h1 class="cover-heading">Record your income and expenses</h1>
  <p class="lead">My walet helps you to manage your wallet</p>
  <p class="lead">
    <a href="main.php" class="btn btn-lg btn-secondary">TRY NOW</a>
  </p>
</main>

<?php
}

}