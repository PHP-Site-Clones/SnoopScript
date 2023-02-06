<?php
  include("translator.php");
  
  if($_POST["translate"]){
    $sex = textiziler($_POST["translatetext"]);
  }
?>
<head>
  <title>SnoopScript | Textilizer</title>
  <link rel="stylesheet" href="bootswatch_lumen.css">
  <link rel="stylesheet" href="center.css">
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="">SnoopScript</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#Current">Textiziler
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="snoopscriptwebsitetranslator-lumen.php">Tranzizzle</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center>
  <br/><br/><br/><br/><br/><br/>
  <form method="POST">
    <div class="form-group w-50">
      <label for="exampleTextarea" class="form-label mt-4">Textiziler</label>
      <br/>
      <textarea class="form-control d-flex" name="translatetext" placeholder="white boy text goes here" rows="10"><?=$sex;?></textarea>
      <br/>
      <input style="text-align:center;" class="btn btn-lg btn-primary d-flex w-100 h-10" type="submit" name="translate" />
    </div>
  </form>
</center>