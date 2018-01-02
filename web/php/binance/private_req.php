<?php // a set of functions that are specific to bitfinex's API

// bitfinex definition of "pair": coin.currency

$postSender = new binance($api_key, $api_secret);

function call_func($cmd){
  switch($cmd){
    case "getBalances":
      return $GLOBALS['postSender']->getBalances();

    case "buy":
      return $GLOBALS['postSender']->buy($_GET["coin"].$_GET["currency"], $_GET["amt"], $_GET["price"], $_GET["orderType"]);

    case "sell":
      return $GLOBALS['postSender']->sell($_GET["coin"].$_GET["currency"], $_GET["amt"], $_GET["price"], $_GET["orderType"]);

    case "withdraw":
      return $GLOBALS['postSender']->withdraw();

  default:
      throwErr("cmd: '".$cmd."'");
  }
}


?>
