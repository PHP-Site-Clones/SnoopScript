<?php
    function textiziler($text){
    $lookForArray1 = array(
      "cigarette",
      "weed",
      "vape",
      "you",
      "mf",
      "sex",
      "hit",
      "nicotine",
      "roblox",
      "walter",
      "docs"
    );
    $replaceForArray1 = array(
      "zaza",
      "getting high wit dat zaza",
      "vape and hittin' da zaza",
      "you mf",
      "mothafuckin'",
      "gay sex yo?",
      "hittin'",
      "nic",
      "ro-sex",
      "heisenberg",
      "your a fuckin' nerdy ass mf if you go to php.net and read all dat shi mane."
    );
    $text = str_ireplace($lookForArray1, $replaceForArray1, $text);
    return $text;
  }
?>