
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$context = stream_context_create([ 
    'http'=> [ 
        'method'=> 'GET', 
        'user_agent'=> $_SERVER['HTTP_USER_AGENT'] 
    ]
]); 


$url = "https://koinex.in/api/ticker";
$json = file_get_contents($url , false, $context);
$json_data = json_decode($json, true);

$inrbtc = $json_data["prices"]["inr"]["BTC"];
$inreth = $json_data["prices"]["inr"]["ETH"];
$inrxrp = $json_data["prices"]["inr"]["XRP"];
$inrtrx = $json_data["prices"]["inr"]["TRX"];
$inrltc = $json_data["prices"]["inr"]["LTC"];
$inrbch = $json_data["prices"]["inr"]["BCH"];
$inreos = $json_data["prices"]["inr"]["EOS"];
$inrreq = $json_data["prices"]["inr"]["REQ"];
$inromg = $json_data["prices"]["inr"]["OMG"];
$inrncash = $json_data["prices"]["inr"]["NCASH"];
$inrgnt = $json_data["prices"]["inr"]["GNT"];
$inrae = $json_data["prices"]["inr"]["AE"];
$inrzrx = $json_data["prices"]["inr"]["ZRX"];
$inrbat = $json_data["prices"]["inr"]["BAT"];
$inrxlm = $json_data["prices"]["inr"]["XLM"];
$inrneo = $json_data["prices"]["inr"]["NEO"];
$inrgas = $json_data["prices"]["inr"]["GAS"];
$inrxrb = $json_data["prices"]["inr"]["XRB"];
$inrncash = $json_data["prices"]["inr"]["NCASH"];
$inraion = $json_data["prices"]["inr"]["AION"];
$inrcmt = $json_data["prices"]["inr"]["CMT"];
$inront = $json_data["prices"]["inr"]["ONT"];
$inrzil = $json_data["prices"]["inr"]["ZIL"];
$inriost = $json_data["prices"]["inr"]["IOST"];
$inract = $json_data["prices"]["inr"]["ACT"];
$inrzco = $json_data["prices"]["inr"]["ZCO"];
$inrsnt = $json_data["prices"]["inr"]["SNT"];
$inrpoly = $json_data["prices"]["inr"]["POLY"];
$inrelf = $json_data["prices"]["inr"]["ELF"];
$inrrep = $json_data["prices"]["inr"]["REP"];
$inrqkc = $json_data["prices"]["inr"]["QKC"];
$inrxzc = $json_data["prices"]["inr"]["XZC"];
$inrtusd=  $json_data["prices"]["inr"]["TUSD"];


//BTC Exchange


$btcxrp = $json_data["prices"]["bitcoin"]["XRP"];
$btcxrpbuy = $json_data["stats"]["bitcoin"]["XRP"]["lowest_ask"];
$btcxrpbuyinr = $json_data["stats"]["bitcoin"]["XRP"]["lowest_ask"]*$inrbtc;
$btcxrpsell = $json_data["stats"]["bitcoin"]["XRP"]["highest_bid"];
$btcxrpsellinr = $json_data["stats"]["bitcoin"]["XRP"]["highest_bid"]*$inrbtc;
$btcxrpinr = $json_data["prices"]["bitcoin"]["XRP"]*$inrbtc;

$btctrx = $json_data["prices"]["bitcoin"]["TRX"];
$btctrxbuy = $json_data["stats"]["bitcoin"]["TRX"]["lowest_ask"];
$btctrxbuyinr = $json_data["stats"]["bitcoin"]["TRX"]["lowest_ask"]*$inrbtc;
$btctrxsell = $json_data["stats"]["bitcoin"]["TRX"]["highest_bid"];
$btctrxsellinr = $json_data["stats"]["bitcoin"]["TRX"]["highest_bid"]*$inrbtc;
$btctrxinr = $json_data["prices"]["bitcoin"]["TRX"]*$inrbtc;

$btcltc = $json_data["prices"]["bitcoin"]["LTC"];
$btcltcbuy = $json_data["stats"]["bitcoin"]["LTC"]["lowest_ask"];
$btcltcbuyinr = $json_data["stats"]["bitcoin"]["LTC"]["lowest_ask"]*$inrbtc;
$btcltcsell = $json_data["stats"]["bitcoin"]["LTC"]["highest_bid"];
$btcltcsellinr = $json_data["stats"]["bitcoin"]["LTC"]["highest_bid"]*$inrbtc;
$btcltcinr = $json_data["prices"]["bitcoin"]["LTC"]*$inrbtc;


$btcbch = $json_data["prices"]["bitcoin"]["BCH"];
$btcbchbuy = $json_data["stats"]["bitcoin"]["BCH"]["lowest_ask"];
$btcbchbuyinr = $json_data["stats"]["bitcoin"]["BCH"]["lowest_ask"]*$inrbtc;
$btcbchsell = $json_data["stats"]["bitcoin"]["BCH"]["highest_bid"];
$btcbchsellinr = $json_data["stats"]["bitcoin"]["BCH"]["highest_bid"]*$inrbtc;
$btcbchinr = $json_data["prices"]["bitcoin"]["BCH"]*$inrbtc;


$btceos = $json_data["prices"]["bitcoin"]["EOS"];
$btceosbuy = $json_data["stats"]["bitcoin"]["EOS"]["lowest_ask"];
$btceosbuyinr = $json_data["stats"]["bitcoin"]["EOS"]["lowest_ask"]*$inrbtc;
$btceossell = $json_data["stats"]["bitcoin"]["EOS"]["highest_bid"];
$btceossellinr = $json_data["stats"]["bitcoin"]["EOS"]["highest_bid"]*$inrbtc;
$btceosinr = $json_data["prices"]["bitcoin"]["EOS"]*$inrbtc;

$btcreq = $json_data["prices"]["bitcoin"]["REQ"];
$btcreqbuy = $json_data["stats"]["bitcoin"]["REQ"]["lowest_ask"];
$btcreqbuyinr = $json_data["stats"]["bitcoin"]["REQ"]["lowest_ask"]*$inrbtc;
$btcreqsell = $json_data["stats"]["bitcoin"]["REQ"]["highest_bid"];
$btcreqsellinr = $json_data["stats"]["bitcoin"]["REQ"]["highest_bid"]*$inrbtc;
$btcreqinr = $json_data["prices"]["bitcoin"]["REQ"]*$inrbtc;



$btceth = $json_data["prices"]["bitcoin"]["ETH"];
$btcethbuy = $json_data["stats"]["bitcoin"]["ETH"]["lowest_ask"];
$btcethbuyinr = $json_data["stats"]["bitcoin"]["ETH"]["lowest_ask"]*$inrbtc;
$btcethsell = $json_data["stats"]["bitcoin"]["ETH"]["highest_bid"];
$btcethsellinr = $json_data["stats"]["bitcoin"]["ETH"]["highest_bid"]*$inrbtc;
$btcethinr = $json_data["prices"]["bitcoin"]["ETH"]*$inrbtc;


$btcomg = $json_data["prices"]["bitcoin"]["OMG"];
$btcomgbuy = $json_data["stats"]["bitcoin"]["OMG"]["lowest_ask"];
$btcomgbuyinr = $json_data["stats"]["bitcoin"]["OMG"]["lowest_ask"]*$inrbtc;
$btcomgsell = $json_data["stats"]["bitcoin"]["OMG"]["highest_bid"];
$btcomgsellinr = $json_data["stats"]["bitcoin"]["OMG"]["highest_bid"]*$inrbtc;
$btcomginr = $json_data["prices"]["bitcoin"]["OMG"]*$inrbtc;


$btcncash = $json_data["prices"]["bitcoin"]["NCASH"];
$btcncashbuy = $json_data["stats"]["bitcoin"]["NCASH"]["lowest_ask"];
$btcncashbuyinr = $json_data["stats"]["bitcoin"]["NCASH"]["lowest_ask"]*$inrbtc;
$btcncashsell = $json_data["stats"]["bitcoin"]["NCASH"]["highest_bid"];
$btcncashsellinr = $json_data["stats"]["bitcoin"]["NCASH"]["highest_bid"]*$inrbtc;
$btcncashinr = $json_data["prices"]["bitcoin"]["NCASH"]*$inrbtc;

//ETH Exchange



$ethxrp = $json_data["prices"]["ether"]["XRP"];
$ethxrpbuy = $json_data["stats"]["ether"]["XRP"]["lowest_ask"];
$ethxrpbuyinr = $json_data["stats"]["ether"]["XRP"]["lowest_ask"]*$inreth;
$ethxrpsell = $json_data["stats"]["ether"]["XRP"]["highest_bid"];
$ethxrpsellinr = $json_data["stats"]["ether"]["XRP"]["highest_bid"]*$inreth;
$ethxrpinr = $json_data["prices"]["ether"]["XRP"]*$inreth;


$ethtrx = $json_data["prices"]["ether"]["TRX"];
$ethtrxbuy = $json_data["stats"]["ether"]["TRX"]["lowest_ask"];
$ethtrxbuyinr = $json_data["stats"]["ether"]["TRX"]["lowest_ask"]*$inreth;
$ethtrxsell = $json_data["stats"]["ether"]["TRX"]["highest_bid"];
$ethtrxsellinr = $json_data["stats"]["ether"]["TRX"]["highest_bid"]*$inreth;
$ethtrxinr = $json_data["prices"]["ether"]["TRX"]*$inreth;

$ethltc = $json_data["prices"]["ether"]["LTC"];
$ethltcbuy = $json_data["stats"]["ether"]["LTC"]["lowest_ask"];
$ethltcbuyinr = $json_data["stats"]["ether"]["LTC"]["lowest_ask"]*$inreth;
$ethltcsell = $json_data["stats"]["ether"]["LTC"]["highest_bid"];
$ethltcsellinr = $json_data["stats"]["ether"]["LTC"]["highest_bid"]*$inreth;
$ethltcinr = $json_data["prices"]["ether"]["LTC"]*$inreth;


$ethbch = $json_data["prices"]["ether"]["BCH"];
$ethbchbuy = $json_data["stats"]["ether"]["BCH"]["lowest_ask"];
$ethbchbuyinr = $json_data["stats"]["ether"]["BCH"]["lowest_ask"]*$inreth;
$ethbchsell = $json_data["stats"]["ether"]["BCH"]["highest_bid"];
$ethbchsellinr = $json_data["stats"]["ether"]["BCH"]["highest_bid"]*$inreth;
$ethbchinr = $json_data["prices"]["ether"]["BCH"]*$inreth;


$etheos = $json_data["prices"]["ether"]["EOS"];
$etheosbuy = $json_data["stats"]["ether"]["EOS"]["lowest_ask"];
$etheosbuyinr = $json_data["stats"]["ether"]["EOS"]["lowest_ask"]*$inreth;
$etheossell = $json_data["stats"]["ether"]["EOS"]["highest_bid"];
$etheossellinr = $json_data["stats"]["ether"]["EOS"]["highest_bid"]*$inreth;
$etheosinr = $json_data["prices"]["ether"]["EOS"]*$inreth;


$ethomg = $json_data["prices"]["ether"]["OMG"];
$ethomgbuy = $json_data["stats"]["ether"]["OMG"]["lowest_ask"];
$ethomgbuyinr = $json_data["stats"]["ether"]["OMG"]["lowest_ask"]*$inreth;
$ethomgsell = $json_data["stats"]["ether"]["OMG"]["highest_bid"];
$ethomgsellinr = $json_data["stats"]["ether"]["OMG"]["highest_bid"]*$inreth;
$ethomginr = $json_data["prices"]["ether"]["OMG"]*$inreth;


//XRP Exchange

$xrptrx = $json_data["prices"]["ripple"]["TRX"];
$xrptrxbuy = $json_data["stats"]["ripple"]["TRX"]["lowest_ask"];
$xrptrxbuyinr = $json_data["stats"]["ripple"]["TRX"]["lowest_ask"]*$inrxrp;
$xrptrxsell = $json_data["stats"]["ripple"]["TRX"]["highest_bid"];
$xrptrxsellinr = $json_data["stats"]["ripple"]["TRX"]["highest_bid"]*$inrxrp;
$xrptrxinr = $json_data["prices"]["ripple"]["TRX"]*$inrxrp;


$xrpltc = $json_data["prices"]["ripple"]["LTC"];
$xrpltcbuy = $json_data["stats"]["ripple"]["LTC"]["lowest_ask"];
$xrpltcbuyinr = $json_data["stats"]["ripple"]["LTC"]["lowest_ask"]*$inrxrp;
$xrpltcsell = $json_data["stats"]["ripple"]["LTC"]["highest_bid"];
$xrpltcsellinr = $json_data["stats"]["ripple"]["LTC"]["highest_bid"]*$inrxrp;
$xrpltcinr = $json_data["prices"]["ripple"]["LTC"]*$inrxrp;


$xrpeos = $json_data["prices"]["ripple"]["EOS"];
$xrpeosbuy = $json_data["stats"]["ripple"]["EOS"]["lowest_ask"];
$xrpeosbuyinr = $json_data["stats"]["ripple"]["EOS"]["lowest_ask"]*$inrxrp;
$xrpeossell = $json_data["stats"]["ripple"]["EOS"]["highest_bid"];
$xrpeossellinr = $json_data["stats"]["ripple"]["EOS"]["highest_bid"]*$inrxrp;
$xrpeosinr = $json_data["prices"]["ripple"]["EOS"]*$inrxrp;

$xrpreq = $json_data["prices"]["ripple"]["REQ"];
$xrpreqbuy = $json_data["stats"]["ripple"]["REQ"]["lowest_ask"];
$xrpreqbuyinr = $json_data["stats"]["ripple"]["REQ"]["lowest_ask"]*$inrxrp;
$xrpreqsell = $json_data["stats"]["ripple"]["REQ"]["highest_bid"];
$xrpreqsellinr = $json_data["stats"]["ripple"]["REQ"]["highest_bid"]*$inrxrp;
$xrpreqinr = $json_data["prices"]["ripple"]["REQ"]*$inrxrp;

$xrpomg = $json_data["prices"]["ripple"]["OMG"];
$xrpomgbuy = $json_data["stats"]["ripple"]["OMG"]["lowest_ask"];
$xrpomgbuyinr = $json_data["stats"]["ripple"]["OMG"]["lowest_ask"]*$inrxrp;
$xrpomgsell = $json_data["stats"]["ripple"]["OMG"]["highest_bid"];
$xrpomgsellinr = $json_data["stats"]["ripple"]["OMG"]["highest_bid"]*$inrxrp;
$xrpomginr = $json_data["prices"]["ripple"]["OMG"]*$inrxrp;

$xrpncash = $json_data["prices"]["ripple"]["NCASH"];
$xrpncashbuy = $json_data["stats"]["ripple"]["NCASH"]["lowest_ask"];
$xrpncashbuyinr = $json_data["stats"]["ripple"]["NCASH"]["lowest_ask"]*$inrxrp;
$xrpncashsell = $json_data["stats"]["ripple"]["NCASH"]["highest_bid"];
$xrpncashsellinr = $json_data["stats"]["ripple"]["NCASH"]["highest_bid"]*$inrxrp;
$xrpncashinr = $json_data["prices"]["ripple"]["NCASH"]*$inrxrp;

$xrpgnt = $json_data["prices"]["ripple"]["GNT"];
$xrpgntbuy = $json_data["stats"]["ripple"]["GNT"]["lowest_ask"];
$xrpgntbuyinr = $json_data["stats"]["ripple"]["GNT"]["lowest_ask"]*$inrxrp;
$xrpgntsell = $json_data["stats"]["ripple"]["GNT"]["highest_bid"];
$xrpgntsellinr = $json_data["stats"]["ripple"]["GNT"]["highest_bid"]*$inrxrp;
$xrpgntinr = $json_data["prices"]["ripple"]["GNT"]*$inrxrp;

$xrpae = $json_data["prices"]["ripple"]["AE"];
$xrpaebuy = $json_data["stats"]["ripple"]["AE"]["lowest_ask"];
$xrpaebuyinr = $json_data["stats"]["ripple"]["AE"]["lowest_ask"]*$inrxrp;
$xrpaesell = $json_data["stats"]["ripple"]["AE"]["highest_bid"];
$xrpaesellinr = $json_data["stats"]["ripple"]["AE"]["highest_bid"]*$inrxrp;
$xrpaeinr = $json_data["prices"]["ripple"]["AE"]*$inrxrp;






echo "<table border='1'>
<font color='red'><tr><td>CryptoCurrency</td><td>INR Value</td><td><center>BTC Value</center></td><td><center>ETH Value</center></td><td><center>XRP Value</center></td></tr></font>
<tr><td>Ripple</td> <td>Rs $inrxrp</td> <td>$btcxrp BTC(Rs $btcxrpinr)<br/>Buy : $btcxrpbuy(Rs $btcxrpbuyinr) <br/> Sell : $btcxrpsell(Rs $btcxrpsellinr) </td> <td>$ethxrp ETH(Rs $ethxrpinr)<br/>Buy : $ethxrpbuy(Rs 

$ethxrpbuyinr) <br/> Sell : $ethxrpsell(Rs $ethxrpsellinr)</td></tr>

<tr><td>REQ</td> <td>Rs $inrreq</td> <td>$btcreq BTC(Rs $btcreqinr) <br/>Buy : $btcreqbuy(Rs $btcreqbuyinr) <br/> Sell : $btcreqsell(Rs $btcreqsellinr)</td> <td> ----------</td><td>$xrpreq XRP(Rs $xrpreqinr)<br/>Buy : 

$xrpreqbuy(Rs $xrpreqbuyinr) <br/> Sell : $xrpreqsell(Rs $xrpreqsellinr)</td></tr>

<tr><td>NCASH</td> <td>Rs $inrncash</td> <td>$btcncash BTC(Rs $btcncashinr)<br/>Buy : $btcncashbuy(Rs $btcncashbuyinr) <br/> Sell : $btcncashsell(Rs $btcncashsellinr) </td> <td> ----------</td><td>$xrpncash XRP(Rs 

$xrpncashinr)<br/>Buy : $xrpncashbuy(Rs $xrpncashbuyinr) <br/> Sell : $xrpncashsell(Rs $xrpncashsellinr)</td></tr>

<tr><td>Tron</td> <td>Rs $inrtrx</td> <td>$btctrx BTC(Rs $btctrxinr)<br/>Buy : $btctrxbuy (Rs $btctrxbuyinr) <br/> Sell : $btctrxsell (Rs $btctrxsellinr)  </td> <td>$ethtrx ETH(Rs$ethtrxinr)<br/>Buy : $ethtrxbuy(Rs 

$ethtrxbuyinr) <br/> Sell : $ethtrxsell(Rs $ethtrxsellinr)</td> <td>$xrptrx XRP(Rs $xrptrxinr)<br/>Buy : $xrptrxbuy(Rs $xrptrxbuyinr) <br/> Sell : $xrptrxsell(Rs $xrptrxsellinr)</td></tr>
<tr><td>AE</td> <td>Rs $inrae</td> <td>---------------</td> <td> ----------</td><td>$xrpae XRP(Rs $xrpaeinr)<br/>Buy : $xrpaebuy(Rs $xrpaebuyinr) <br/> Sell : $xrpaesell(Rs $xrpaesellinr)</td></tr>

<tr><td>GNT</td> <td>Rs $inrgnt</td> <td>---------------</td> <td> ----------</td><td>$xrpgnt XRP(Rs $xrpgntinr)<br/>Buy : $xrpgntbuy(Rs $xrpgntbuyinr) <br/> Sell : $xrpgntsell(Rs $xrpgntsellinr)</td></tr>



<tr><td>BitcoinCash</td> <td>Rs $inrbch</td> <td>$btcbch BTC(Rs $btcbchinr) <br/>Buy : $btcbchbuy(Rs $btcbchbuyinr) <br/> Sell : $btcbchsell(Rs $btcbchsellinr)</td> <td>$ethbch ETH(Rs $ethbchinr)<br/>Buy : $ethbchbuy(Rs 

$ethbchbuyinr) <br/> Sell : $ethbchsell(Rs $ethbchsellinr)</td></tr>

<tr><td>EOS</td> <td>Rs $inreos</td> <td>$btceos BTC(Rs $btceosinr)<br/>Buy : $btceosbuy(Rs $btceosbuyinr) <br/> Sell : $btceossell(Rs $btceossellinr) </td> <td>$etheos ETH(Rs$etheosinr)<br/>Buy : $etheosbuy(Rs 

$etheosbuyinr) <br/> Sell : $etheossell(Rs $etheossellinr)</td> <td>$xrpeos XRP(Rs $xrpeosinr)<br/>Buy : $xrpeosbuy(Rs $xrpeosbuyinr) <br/> Sell : $xrpeossell(Rs $xrpeossellinr)</td></tr>
<tr><td>Omisego</td> <td>Rs $inromg</td> <td>$btcomg BTC(Rs $btcomginr)<br/>Buy : $btcomgbuy(Rs $btcomgbuyinr) <br/> Sell : $btcomgsell(Rs $btcomgsellinr) </td> <td>$ethomg ETH(Rs$ethomginr)<br/>Buy : 

$ethomgbuy(Rs $ethomgbuyinr) <br/> Sell : $ethomgsell(Rs $ethomgsellinr)</td> <td>$xrpomg XRP(Rs $xrpomginr)<br/>Buy : $xrpomgbuy(Rs $xrpomgbuyinr) <br/> Sell : $xrpomgsell(Rs $xrpomgsellinr)</td></tr>
<tr><td>Litecoin</td> <td>Rs $inrltc</td> <td>$btcltc BTC(Rs $btcltcinr) <br/>Buy : $btcltcbuy(Rs $btcltcbuyinr) <br/> Sell : $btcltcsell(Rs $btcltcsellinr)</td> <td>$ethltc ETH(Rs$ethltcinr)<br/>Buy : $ethltcbuy(Rs $ethltcbuyinr) 

<br/> Sell : $ethltcsell(Rs $ethltcsellinr)</td> <td>$xrpltc XRP(Rs $xrpltcinr)<br/>Buy : $xrpltcbuy(Rs $xrpltcbuyinr) <br/> Sell : $xrpltcsell(Rs $xrpltcsellinr)</td></tr>
</table>";


