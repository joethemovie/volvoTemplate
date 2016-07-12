<?php
$signature ='
Sincerely, <br><br>
Tyler Stahl <br>
E-Commerce Associate<br>
Ramsey Volvo<br>
(888) 319-0377 <br>
tstahl@ramseyvolvo.com';

$name = trim($_POST["name"]);
$vehicle = trim($_POST["vehicle"]);
$vehiclePrice = trim($_POST["vehiclePrice"]);
$test4 = trim($_POST["test4"]);
$color = trim($_POST["color"]);
$goodUntil = trim($_POST['goodUntil']);

$visionPackage = trim($_POST["visionPackage"]);
$climatePackage = trim($_POST["climatePackage"]);
$conveniencePackage = trim($_POST["conveniencePackage"]);
$bowersWilkins = trim($_POST["bowersWilkins"]);
$MomentumPlusPackage = trim($_POST["MomentumPlusPackage"]);
$wilkinsPremSoundPackage = trim($_POST["wilkinsPremSoundPackage"]);
$highLvlIntIllumDarkFlame = trim($_POST["highLvlIntIllumDarkFlame"]);
$t5IntroPackage = trim($_POST["t5IntroPackage"]);

$packagesArray = array (
  '33' => $visionPackage,
  '34' => $climatePackage,
  '35' => $conveniencePackage,
  '36' => $bowersWilkins,
  '37' => $MomentumPlusPackage,
  '38' => $wilkinsPremSoundPackage,
  '39' => $highLvlIntIllumDarkFlame,
  '40' => $t5IntroPackage
);

$packagesInlay = implode(', ',array_filter($packagesArray));

if ($packagesInlay == ''){
  $packagesInlay = '';
} else {
  $packagesInlay = 'with ' . $packagesInlay;
}

$heatedFrontSeats = trim($_POST["heatedFrontSeats"]);
$blackHeadliner = trim($_POST["blackHeadliner"]);
$graphicalHeadsUpDisplay = trim($_POST["graphicalHeadsUpDisplay"]);
$premiumAirSuspension = trim($_POST["premiumAirSuspension"]);
$integratedCenterBooster = trim($_POST["integratedCenterBooster"]);
$charcoalHeadliner = trim($_POST["charcoalHeadliner"]);
$fourCornerAirSuspension = trim($_POST["fourCornerAirSuspension"]);

$optionsArray = array (
  '26' => $heatedFrontSeats,
  '27' => $blackHeadliner,
  '28' => $graphicalHeadsUpDisplay,
  '29' => $premiumAirSuspension,
  '30' => $integratedCenterBooster,
  '31' => $charcoalHeadliner,
  '32' => $fourCornerAirSuspension
);

$optionsInlay = implode('<br>',array_filter($optionsArray));

$splitDualTailpipesDiffuser = trim($_POST["splitDualTailpipesDiffuser"]);
$illuminatedSillMoulding = trim($_POST["illuminatedSillMoulding"]);
$rearSpoiler = trim($_POST["rearSpoiler"]);
$ipadHolder = trim($_POST["ipadHolder"]);
$bikeCarrierFrameAlum = trim($_POST["bikeCarrierFrameAlum"]);
$canoeKayakCarrier = trim($_POST["canoeKayakCarrier"]);
$skiHolder = trim($_POST["skiHolder"]);
$skiHolderAlum = trim($_POST["skiHolderAlum"]);
$mudFlapsRear = trim($_POST["mudFlapsRear"]);
$mudFlapsFront = trim($_POST["mudFlapsFront"]);
$loadBars = trim($_POST["loadBars"]);
$ruggedStylingRunningBoards = trim($_POST["ruggedStylingRunningBoards"]);
$ruggedStylingKitDarkGreySideScuffPlates = trim($_POST["ruggedStylingKitDarkGreySideScuffPlates"]);
$urbanStylingKitWRunningBoards = trim($_POST["urbanStylingKitWRunningBoards"]);
$urbanStylingKitWScuffPlates = trim($_POST["urbanStylingKitWScuffPlates"]);
$frontDecorFrames = trim($_POST["frontDecorFrames"]);
$frontRearSkidPlates = trim($_POST["frontRearSkidPlates"]);
$runningBoards = trim($_POST["runningBoards"]);
$bumperCover = trim($_POST["bumperCover"]);
$luggageCompartmentMatPlastic = trim($_POST["luggageCompartmentMatPlastic"]);
$protectiveGrilleSteel = trim($_POST["protectiveGrilleSteel"]);
$mudflapsFrontAndRear = trim($_POST["mudflapsFrontAndRear"]);
$loadCarriers = trim($_POST["loadCarriers"]);
$engineProtectionSheilds = trim($_POST["engineProtectionSheilds"]);
$trailerHitch = trim($_POST["trailerHitch"]);

$accessoriesArray = array (
  '1' => $splitDualTailpipesDiffuser,
  '2' => $illuminatedSillMoulding,
  '3' => $rearSpoiler,
  '4' => $ipadHolder,
  '5' => $bikeCarrierFrameAlum,
  '6' => $canoeKayakCarrier,
  '7' => $skiHolder,
  '8' => $skiHolderAlum,
  '9' => $mudFlapsRear,
  '10' => $mudFlapsFront,
  '11' => $loadBars,
  '12' => $ruggedStylingRunningBoards,
  '13' => $ruggedStylingKitDarkGreySideScuffPlates,
  '14' => $urbanStylingKitWScuffPlates,
  '15' => $frontDecorFrames,
  '16' => $frontRearSkidPlates,
  '17' => $runningBoards,
  '18' => $bumperCover,
  '19' => $luggageCompartmentMatPlastic,
  '20' => $protectiveGrilleSteel,
  '21' => $protectiveGrilleSteel,
  '22' => $mudflapsFrontAndRear,
  '23' => $loadCarriers,
  '24' => $engineProtectionSheilds,
  '25' => $trailerHitch
);

 $accessoriesInlay = implode('<br>',array_filter($accessoriesArray)) ;

if ($color == "s90T5Mabm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T5";
    $xColor = "Magic Blue Metallic";
    $iColor = "Blonde Leather";
    $img = "https://www.dropbox.com/s/dtbp73v6hcjj2bu/w-1200%20%281%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T5Cwpm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T5";
    $xColor = "Crystal White Pearl Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/mz7q5q0ljdipqwg/w-1200.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T5Bsm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T5";
    $xColor = "Bright Silver Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/tn6sqp6d6eu3249/w-1200%20%282%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T5Ogm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T5";
    $xColor = "Osmium Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/ogmnr15mrsd3hgr/w-1200%20%283%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T5Obm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T5";
    $xColor = "Onyx Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/d9gultq235vgljh/w-1200%20%284%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T5Lsm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T5";
    $xColor = "Luminous Sand Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/n9wqo1j1988msl0/w-1200%20%285%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T5Mubm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T5";
    $xColor = "Mussel Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/1g5w4kw64rgt7x0/w-1200%20%286%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T5Bs"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T5";
    $xColor = "Black Stone";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/myhwdpr07zp4t32/w-1200%20%287%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T5Iw"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T5";
    $xColor = "Ice White";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/1uss0tgk5mh1qlt/w-1200%20%288%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else

// END S90 T5-------------------------------------------------------------------

if ($color == "s90T6AWDMabm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T6 AWD";
    $xColor = "Magic Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/utwo3bj0chy7u70/w-1200.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T6AWDCwpm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T6 AWD";
    $xColor = "Crystal White Pearl Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/aqwh6glkm0oibfx/w-1200%20%281%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T6AWDBsm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T6 AWD";
    $xColor = "Bright Silver Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/0p6ol8thc1b77xu/w-1200%20%282%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T6AWDOgm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T6 AWD";
    $xColor = "Osmium Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/2osy94thfload66/w-1200%20%283%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T6AWDObm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T6 AWD";
    $xColor = "Onyx Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/uwyau92dm7z5c4r/w-1200%20%286%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T6AWDLsm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T6 AWD";
    $xColor = "Luminous Sand Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/5aalk4r0a8e6c5b/w-1200%20%284%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T6AWDMubm"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T6 AWD";
    $xColor = "Mussel Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/9m5xc6w0dzmmb4p/w-1200%20%285%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T6AWDBs"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T6 AWD";
    $xColor = "Black Stone";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/tuc9aqhezve89en/w-1200%20%289%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "s90T6AWDIw"){
    $headerVideo = "https://www.dropbox.com/s/vaqdgurgvobecgc/headerVolvoS90.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "S90";
    $powertrain = "T6 AWD";
    $xColor = "Ice White";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/ekny3pssb292y7w/w-1200%20%287%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
// END S90 T6 AWD---------------------------------------------------------------
// END S90----------------------------------------------------------------------

if ($color == "xc90T5Mabm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Magic Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/jge8pmrc4zvsadm/w-1200.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5Ebm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Ember Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/jncripiqcdkmic5/w-1200-1.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5Sgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Saville Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/dldpid4t4ne9eeq/w-1200-2.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5Tbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Twilight Bronze Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/ldmm49mfc60v6cr/w-1200-3.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5Cwm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Crystal White Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/f7b55wujwyz7jdb/w-1200-4.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5Bsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Bright Silver Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/bqycblupkdukqmg/w-1200-5.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5Ogm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Osmium Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/zulz4e91mak5531/w-1200-6.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5Obm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Onyx Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/ygokymerww8djkz/w-1200-8.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5Lsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Luminous Sand Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/2x0t8ous8oiyabd/w-1200-7.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5Iw"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Ice White";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/nt7qg0d58e7sjsc/w-1200-9.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
// END XC90 T5 -----------------------------------------------------------------

if ($color == "xc90T5RDesignEsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5 R-Design";
    $xColor = "Electric Silver Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/t74v6bqt06rkuze/w-1200.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5RDesignCwm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5 R-Design";
    $xColor = "Crystal White Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/47ldbl5otl7mysx/w-1200-1.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5RDesignOgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5 R-Design";
    $xColor = "Osmium Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/4zelyij9heurcm8/w-1200-2.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5RDesignObm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5 R-Design";
    $xColor = "Onyx Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/w1q9ap0uc9uapk5/w-1200-3.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5RDesignBbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5 R-Design";
    $xColor = "Bursting Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/syxbzgtap7b64hv/w-1200-4.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T5RDesignPr"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5 R-Design";
    $xColor = "Passion Red";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/3wa2y1bdaiot16l/w-1200-5.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
// END XC90 T5 R-DESIGN --------------------------------------------------------
if ($color == "xc90T6AWDMbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T5";
    $xColor = "Magic Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/afn4766qs4otb7t/w-1200-1.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6AWDEbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD";
    $xColor = "Ember Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/a8j03i7nnoaoxgd/w-1200-2.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6AWDSgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD";
    $xColor = "Saville Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/rgmuexoaptyapj9/w-1200-3.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6AWDTbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD";
    $xColor = "Twilight Bronze Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/02zoffgemnpkc6f/w-1200-4.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6AWDCwm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD";
    $xColor = "Crystal White Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/u3j4zbsqio5kd7j/w-1200-5.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6AWDBsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD";
    $xColor = "Bright Silver Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/6zavutuuzq6gu8k/w-1200-6.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6AWDOgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD";
    $xColor = "Osmium Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/7j8ajax7axd7exd/w-1200-7.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6AWDObm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD";
    $xColor = "Onyx Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/auow6z82sexlvju/w-1200-8.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6AWDLsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD";
    $xColor = "Luminous Sand Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/vv2cjv5tyf6sixm/w-1200-9.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6AWDIw"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD";
    $xColor = "Ice White";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/rqr4n2kgo3yizzr/w-1200.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
// END XC90 T6 AWD -------------------------------------------------------------

if ($color == "xc90T6RDesignEsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD R-Design";
    $xColor = "Electric Silver Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/mb7w7cilf17on34/w-1200-1.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6RDesignCwm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD R-Design";
    $xColor = "Crystal White Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/ewj5pf8d59v9bv0/w-1200-2.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6RDesignOgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD R-Design";
    $xColor = "Osmium Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/z59pyzmsedvv12w/w-1200-3.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6RDesignObm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD R-Design";
    $xColor = "Onyx Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/03smc8z6hjzc8zo/w-1200-4.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6RDesignBbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD R-Design";
    $xColor = "Bursting Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/7t4ciopf25rn601/w-1200-5.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6RDesignPr"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 AWD R-Design";
    $xColor = "Passion Red";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/o4z4zaflwdms1od/w-1200.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
// END XC90 T6 AWD R-DESIGN ----------------------------------------------------
if ($color == "xc90T6InscriptionMabm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 Inscription";
    $xColor = "Magic Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/8qbmal0aneu4wvl/w-1200-1.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6InscriptionEbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 Inscription";
    $xColor = "Ember Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/9c9dxnap8bwavtr/w-1200-2.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6InscriptionSgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 Inscription";
    $xColor = "Savile Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/bf9jz7elsfwionn/w-1200-3.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6InscriptionTbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 Inscription";
    $xColor = "Twilight Bronze Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/zuiqs0i34sv4hoy/w-1200-4.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6InscriptionCwm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 Inscription";
    $xColor = "Crystal White Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/29rt36uzl8xfe4g/w-1200-5.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6InscriptionBsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 Inscription";
    $xColor = "Bright Silver Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/p8fs7tj2xhp23ul/w-1200-6.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6InscriptionOgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 Inscription";
    $xColor = "Osmium Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/qkqvippk2lkbing/w-1200-7.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6InscriptionObm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 Inscription";
    $xColor = "Onyx Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/p91qidl0qfwtdyd/w-1200-8.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6InscriptionLsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 Inscription";
    $xColor = "Luminous Sand Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/8ulxvbk9s7wekz5/w-1200-9.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T6InscriptionIw"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T6 Inscription";
    $xColor = "Ice White";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/65i8frzhmc0kyj2/w-1200.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}
// END XC90 T6 INSCRIPTION -----------------------------------------------------
else
if ($color == "xc90T8Mbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid";
    $xColor = "Magic Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/a707j0hwrmzjk4p/w-1200-1.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8Ebm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid";
    $xColor = "Ember Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/0ac6i5xqfoqzzw5/w-1200-2.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8Sgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid";
    $xColor = "Saville Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/0nj79r1p50vw4b5/w-1200-3.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8Tbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid";
    $xColor = "Twilight Bronze Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/fthhv0s249m661y/w-1200-4.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8Cwm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid";
    $xColor = "Crystal White Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/00m97c4wralgj0u/w-1200-5.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8Bsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid";
    $xColor = "Bright Silver Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/lg3tsd78wseeoad/w-1200-6.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8Ogm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid";
    $xColor = "Osmium Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/ykngxl54prhk86e/w-1200-7.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8Obm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid";
    $xColor = "Onyx Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/d5mw4r5c3k448jq/w-1200-8.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8Lsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid";
    $xColor = "Luminous Sand Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/6jzibv6b9nomntv/w-1200-9.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8Iw"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid";
    $xColor = "Ice White";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/xc5sh9hij46xfxx/w-1200.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
// END XC90 T8 -----------------------------------------------------------------

if ($color == "xc90T8RDesignEsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid R-Design";
    $xColor = "Electric Silver Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/bondf4mco9w6vxh/w-1200-1.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8RDesignCwm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid R-Design";
    $xColor = "Crystal White Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/qi44tqa8d30bso9/w-1200-2.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8RDesignOgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid R-Design";
    $xColor = "Osmium Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/1k5a2a7qgcfx9hd/w-1200-3.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8RDesignObm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid R-Design";
    $xColor = "Onyx Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/jg3zar3fq3ygjw6/w-1200-4.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8RDesignBbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid R-Design";
    $xColor = "Bursting Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/rqdgdoxam6yuhrc/w-1200-5.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8RDesignPr"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Twin Engine Plug-In Hybrid R-Design";
    $xColor = "Passion Red";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/jvv3bxwjuhsmh17/w-1200.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
// END XC90 T8 R-DESIGN --------------------------------------------------------
if ($color == "xc90T8InscriptionMabm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Inscription";
    $xColor = "Magic Blue Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/zi7kv2eiwd3x8s7/w-1200-1.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8InscriptionEbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Inscription";
    $xColor = "Ember Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/zchc1jp1xafqr04/w-1200-2.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8InscriptionSgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Inscription";
    $xColor = "Savile Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/xzndbz2g8ev8hoj/w-1200-3.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8InscriptionTbm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Inscription";
    $xColor = "Twilight Bronze Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/px9xut57sgvhizn/w-1200-4.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8InscriptionCwm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Inscription";
    $xColor = "Crystal White Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/dantmz7pibo20kj/w-1200-5.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8InscriptionBsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Inscription";
    $xColor = "Bright Silver Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/ek9se1fytarr20m/w-1200-6.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8InscriptionOgm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Inscription";
    $xColor = "Osmium Grey Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/d1v8a9kl82gv7x2/w-1200-7.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8InscriptionObm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Inscription";
    $xColor = "Onyx Black Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/oylutjmj7qjlfjq/w-1200-8.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8InscriptionLsm"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Inscription";
    $xColor = "Luminous Sand Metallic";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/4hvq5lu0ml6zpot/w-1200-9.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}else
if ($color == "xc90T8InscriptionIw"){
    $headerVideo = "https://www.dropbox.com/s/7qq7gs352n9wbuz/ramseypricequote.png?dl=1";
    $vehicleYear = "2017";
    $brand = "Volvo";
    $model = "XC90";
    $powertrain = "T8 Inscription";
    $xColor = "Ice White";
    $iColor = "ICOLOR";
    $img = "https://www.dropbox.com/s/1vh1eqtzg8vd278/w-1200.jpg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}
// END XC90 T8 INSCRIPTION -----------------------------------------------------
// END XC90---------------------------------------------------------------------
?>
