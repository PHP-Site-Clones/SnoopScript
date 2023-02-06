<?php
    include("translator.php");

if(isset($_GET['search'])){
$url = htmlentities($_GET['search']);
 if  ( $ret = parse_url($url) ) {

      if ( !isset($ret["scheme"]) )
       {
       $url = "http://{$url}";
       }
}
$context = stream_context_create(array(
    'http' => array(
        'method' => "GET",
        'header' =>
            "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8\r\n" .
            "Accept-Language: en-US,en;q=0.8\r\n".
            "Keep-Alive: timeout=3, max=10\r\n",
            "Connection: keep-alive",
        'user_agent' => "User-Agent: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11",
        "ignore_errors" => true,
        "timeout" => 3
    )
));
$donut = file_get_contents($url, false, $context);
    echo textiziler($donut);
    exit;
}?>
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
          <a class="nav-link active" href="#Current">Tranzizzle
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="snoopscript-lumen.php">Textiziler</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<center>
  <br/><br/><br/><br/><br/><br/>
  <form name="query" action="" method="get">
    <div class="form-group w-50">
      <label for="exampleTextarea" class="form-label mt-4">Tranzizzle</label>
      <br/>
      <textarea class="form-control d-flex" name="search" placeholder="website" rows="10"><?=$sex;?></textarea>
      <br/>
      <input style="text-align:center;" class="btn btn-lg btn-primary d-flex w-100 h-10" type="submit" name="se" />
    </div>
  </form>
</center>