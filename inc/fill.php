<?php
$name = trim($_POST["name"]);
$vehicle = trim($_POST["vehicle"]);
$test3 = trim($_POST["test3"]);
$test4 = trim($_POST["test4"]);
$color = trim($_POST["color"]);

if ($color == "s90T5Mbm"){
    $vehicleYear = "2016";
    $brand = "Volvo";
    $model = "S90";
    $package = "T5";
    $xColor = "Mussel Blue Metallic";
    $iColor = "Blonde Leather";
    $img = "https://www.dropbox.com/s/dtbp73v6hcjj2bu/w-1200%20%281%29.jpeg?dl=1";
    $supImg1 = " ";
    $supImg2 = " ";
    $supImg3 = " ";
    $supImg4 = " ";
    $supImg5 = " ";
    $supImg6 = " ";
}
// // VEHICLE INFO-----------------------------------------------------------------
//
// if ($vehicle == "s60T5DynamicColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "S60";
//     $package = "T5 Dynamic";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// if ($vehicle == "s60T5InscriptionColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "S60";
//     $package = "T5 Inscription";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// if ($vehicle == "s60T5AWDCrossCountryColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "S60";
//     $package = "T5 AWD Cross Country";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// if ($vehicle == "s60AWDRDesignColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "S60";
//     $package = "AWD R-Design";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// // END S60----------------------------------------------------------------------
//
// if ($vehicle == "xc60T5DynamicColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "XC60";
//     $package = "T5 Dynamic";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// if ($vehicle == "xc60T5InscriptionColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "XC60";
//     $package = "T5 Inscription";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// if ($vehicle == "xc60T6AWDDynamicColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "XC60";
//     $package = "T6 AWD Dynamic";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// if ($vehicle == "xc60T6AWDInscriptionColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "XC60";
//     $package = "T6 AWD Inscription";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// if ($vehicle == "xc60T6AWDRDesignColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "XC60";
//     $package = "T6 AWD R-Design";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// // END XC60---------------------------------------------------------------------
//
// if ($vehicle == "s90T5Color"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "S90";
//     $package = "T5";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
//
// if ($vehicle == "s90T6AWDColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "S90";
//     $package = "T6 AWD";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// // END S90----------------------------------------------------------------------
//
// if ($vehicle == "xc90T5Color"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "XC90";
//     $package = "T5";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// if ($vehicle == "xc90T6AWDColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "XC90";
//     $package = "T6 AWD";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// if ($vehicle == "xc90T8TwinEnginePlugInHybridColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "XC90";
//     $package = "T8 Twin Engine Plug-In Hybrid";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// if ($vehicle == "xc90ExcellenceT8TwinEnginePlugInHybridColor"){
//     $vehicleYear = "2016";
//     $brand = "Volvo";
//     $model = "XC90";
//     $package = "Excellence - T8 Twin Engine Plug-In Hybrid";
//     $xColor = "XCOLOR";
//     $iColor = "ICOLOR";
//     $img = "IMAGE";
//     $supImg1 = " ";
//     $supImg2 = " ";
//     $supImg3 = " ";
//     $supImg4 = " ";
//     $supImg5 = " ";
//     $supImg6 = " ";
// }
// // END XC90---------------------------------------------------------------------
// ?>
