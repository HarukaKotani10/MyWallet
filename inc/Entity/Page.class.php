<?php

class Page
{

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

      .form-length{
        width:100px
      }

      .btn-hover a {
        background-color: yellow;
      }
      

    </style>
    <!-- Custom styles for this template -->
    <link href="myWalletHome.css" rel="stylesheet">
    <script type="text/javascript" src="script.js"></script>
  </head>
  <body class="text-center">
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

    public static function main($records, $balance)
    {
        ?>

  <main role="main" class="inner cover">
    <h2 class="cover-heading" >Your balance:</h2><h1 id="balance">$<?php echo $balance->Balance; ?></h2>

    <p class="lead">
      <a href="income.php" id="expensesBtn" class="btn btn-lg btn-secondary">+</a>
      <a href="expenses.php" id="incomeBtn" class="btn btn-lg btn-secondary">-</a>
    </p>
      <table class="table" style="color: white;">
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

      }

      ?>
  </tbody>
</table>
  </main>
        <?php
}

    public static function expenses()
    {
     
        ?>

      <main role="main" class="inner cover">
      <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" style="margin-left:100px;">
              
<div class="form-group row">
    <label for="category" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-5">
    <select name="category" id="category" class="form-control">
        <option value="food">Groceries</option>
        <option value="gas">Gas</option>
        <option value="food">Restaurant</option>
        <option value="audi">Rent</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="amount" class="col-sm-2 col-form-label">Amount</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="amount" placeholder="100" name="amount">
    </div>
  </div>
  <div class="form-group row">
    <label for="date" class="col-sm-2 col-form-label">Date</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" id="date" name="date" value="<?php echo date("Y-m-d")?>">
    </div>
  </div>

  <div class="form-group row">
  <label for="submit" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-5">
    <input type="submit" name="submit" value="add" class="btn btn-lg btn-secondary form-control" style="background-color: #4266f5;">  
    </div>
  </div>

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
public static function login(){
  ?>
  <div class="form-group">
    <label for="exampleInputEmail1" style="align-items: left;">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  <?php
}
}