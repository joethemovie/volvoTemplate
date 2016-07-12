<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800i" rel="stylesheet">
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/master.js"></script>
</head>
  <body>
    <div class="container">

      <div class="topBar">
        <div class="leftContent">
          <h4>
            <a href="index.php" id="volvoHeader">Ramsey Volvo</a>
          </h4>
        </div>
        <form action="template.php" method="post">
        <div class="majorMenu">
          <ul>
            <li><a class="showSingle" target="name">Name</a></li>
            <li><a class="showSingle" target="price">Price</a></li>
            <li><a class="showSingle" target="vehicle">Vehicle</a></li>
            <li><a class="showSingle" target="packages">Packages</a></li>
            <li><a class="showSingle" target="accessories">Accessories</a></li>
            <li><a class="showSingle" target="options">Options</a></li>
            <li><button type="submit" name="next" id="submit">Submit</button></li>
          </ul>
        </div>
      </div>
      <div class="test">

        <div id="nameSection" class="targetDiv">
          <h1>Customer's Name</h1>
            <input type="text" name="name" id="name">
        </div>

        <div id="vehicleSection" class="targetDiv">
          <h1>Vehicle Select</h1>
          <select id="car">
            <option value="filler" disabled>Select Vehicle</option>
            <option value="S90">S90</option>
            <option value="XC90">XC90</option>
            <option value="S60" disabled>S60 (unavailable)</option>
            <option value="XC60" disabled>XC60 (unavailable)</option>
          </select>

<!-- END GROUP SELECT -->


           <div id="S60" class="group" >
             <select name="model" id="s60Model">
               <option value="S60 T5 Dynamic"><a class="showSingle" target="S60">T5 Dynamic</a></option>
               <option value="S60 T5 Inscription"><a class="showSingle" target="XC60">T5 Inscription</a></option>
               <option value="S60 T5 AWD Cross Country"><a class="showSingle" target="S90">T5 AWD Cross Country</a></option>
               <option value="S60 AWD R-Design"><a class="showSingle" target="XC90">AWD R-Design</a></option>
             </select>
          </div>
<!--END S60-------------------------------------------------------------------->
         <div id="XC60" class="group" >
           <select name="model" id="xc60Model">
             <option value="XC60 T5 Dynamic"><a class="showSingle" target="S60">T5 Dynamic</a></option>
             <option value="XC60 T5 Inscription"><a class="showSingle" target="XC60">T5 Inscription</a></option>
             <option value="XC60 T6 AWD Dynamic"><a class="showSingle" target="S60">T6 AWD Dynamic</a></option>
             <option value="XC60 T6 AWD Inscription"><a class="showSingle" target="XC60">T6 AWD Inscription</a></option>
             <option value="XC60 T6 AWD R-Design"><a class="showSingle" target="S90">T6 AWD R-Design</a></option>
           </select>
<!-- END XC60------------------------------------------------------------------->
          </div>
          <div id="S90" class="group" >
            <select name="model" id="s90Model">
              <option value="s90T5Color"><a class="showSingle" target="S60">T5</a></option>
              <option value="s90T6AWDColor"><a class="showSingle" target="XC60">T6 AWD</a></option>
            </select>
            <div class="colorGroup" id="s90T5Color">
              <h3>Color</h3>
              <br>
              <div class="control-group">
                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T5Mabm"/> Magic Blue Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T5Cwpm"/> Crystal White Pearl Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T5Bsm"/> Bright Silver Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T5Ogm"/> Osmium Grey Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T5Obm"/> Onyx Black Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T5Lsm"/> Luminous Sand Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T5Mubm"/> Mussel Blue Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T5Bs"/> Black Stone
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T5Iw"/> Ice White
                  <div class="control__indicator"></div>
                </label>
              </div>
            </div>
            <div class="colorGroup" id="s90T6AWDColor">
              <h3>Color</h3>
              <br>
              <div class="control-group">
                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T6AWDMabm"/> Magic Blue Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T6AWDCwpm"/> Crystal White Pearl Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T6AWDBsm"/> Bright Silver Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T6AWDOgm"/> Osmium Grey Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T6AWDObm"/> Onyx Black Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T6AWDLsm"/> Luminous Sand Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T6AWDMubm"/> Mussel Blue Metallic
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T6AWDBs"/> Black Stone
                  <div class="control__indicator"></div>
                </label>

                <label class="control control--radio">
                  <input type="radio" name="color" value="s90T5Iw"/> Ice White
                  <div class="control__indicator"></div>
                </label>
              </div>
            </div>
           </div>
<!-- END S90 COLOR PICK ------------------------------------------------------->
<!-- BEGIN XC90 COLOR PICK ---------------------------------------------------->

           <div id="XC90" class="group" >
             <select name="model" id="XC90Model">
               <option value="xc90T5Color"><a class="showSingle" target="XC90T5">T5</a></option>
               <option value="XC90T5RDesignColor"><a class="showSingle" target="XC90T5RDesign">T5 R-Design</a></option>
               <option value="xc90T6AWDColor"><a class="showSingle" target="XC90T6AWD">T6 AWD</a></option>
               <option value="XC90T6RDesignColor"><a class="showSingle" target="XC90T6RDesign">T6 R-Design</a></option>
               <option value="xc90T6InscriptionColor"><a class="showSingle" target="xc90T6Inscription">T6 Inscription</a></option>
               <option value="xc90T8Color"><a class="showSingle" target="xc90T8">T8</a></option>
               <option value="XC90T8RDesignColor"><a class="showSingle" target="XC90T8RDesign">T8 R-Design</a></option>
               <option value="xc90T8InscriptionColor"><a class="showSingle" target="xc90T8Inscription">T8 Inscription</a></option>
             </select>
             <div class="colorGroup" id="xc90T5Color">
               <h3>Color</h3>
               <br>
               <div class="control-group">
                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5Mabm"/> Magic Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5Ebm"/> Ember Black Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5Sgm"/> Saville Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5Tbm"/> Twilight Bronze Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5Cwm"/> Crystal White Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5Bsm"/> Bright Silver Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5Ogm"/> Osmium Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5Obm"/> Onyx Black Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5Lsm"/> Luminous Sand Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5Iw"/> Ice White
                   <div class="control__indicator"></div>
                 </label>

               </div>
             </div>
             <div class="colorGroup" id="XC90T5RDesignColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">
                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5RDesignEsm"/> Electric Silver Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5RDesignCwm"/> Crystal White Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5RDesignOgm"/> Osmium Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5RDesignObm"/> Onyx Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5RDesignBbm"/> Bursting Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T5RDesignPr"/> Passion Red
                   <div class="control__indicator"></div>
                 </label>

               </div>
             </div>
             <div class="colorGroup" id="xc90T6AWDColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">
                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6AWDMabm"/> Magic Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6AWDEbm"/> Ember Black Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6AWDSgm"/> Saville Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6AWDTbm"/> Twilight Bronze Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6AWDCwm"/> Crystal White Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6AWDBsm"/> Bright Silver Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6AWDOgm"/> Osmium Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6AWDObm"/> Onyx Black Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6AWDLsm"/> Luminous Sand Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6AWDIw"/> Ice White
                   <div class="control__indicator"></div>
                 </label>

               </div>
             </div>
             <div class="colorGroup" id="XC90T6RDesignColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">
                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6RDesignEsm"/> Electric Silver Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6RDesignCwm"/> Crystal White Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6RDesignOgm"/> Osmium Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6RDesignObm"/> Onyx Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6RDesignBbm"/> Bursting Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6RDesignPr"/> Passion Red
                   <div class="control__indicator"></div>
                 </label>


               </div>
             </div>
             <div class="colorGroup" id="xc90T6InscriptionColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">
                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6InscriptionMabm"/> Magic Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6InscriptionEbm"/> Ember Black Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6InscriptionSgm"/> Saville Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6InscriptionTbm"/> Twilight Bronze Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6InscriptionCwm"/> Crystal White Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6InscriptionBsm"/> Bright Silver Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6InscriptionOgm"/> Osmium Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6InscriptionObm"/> Onyx Black Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6InscriptionLsm"/> Luminous Sand Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T6InscriptionIw"/> Ice White
                   <div class="control__indicator"></div>
                 </label>


               </div>
             </div>
             <div class="colorGroup" id="xc90T8Color">
               <h3>Color</h3>
               <br>
               <div class="control-group">
                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8Mabm"/> Magic Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8Ebm"/> Ember Black Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8Sgm"/> Saville Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8Tbm"/> Twilight Bronze Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8Cwm"/> Crystal White Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8Bsm"/> Bright Silver Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8Ogm"/> Osmium Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8Obm"/> Onyx Black Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8Lsm"/> Luminous Sand Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8Iw"/> Ice White
                   <div class="control__indicator"></div>
                 </label>

               </div>
             </div>
             <div class="colorGroup" id="XC90T8RDesignColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">
                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8RDesignEsm"/> Electric Silver Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8RDesignCwm"/> Crystal White Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8RDesignOgm"/> Osmium Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8RDesignObm"/> Onyx Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8RDesignBbm"/> Bursting Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8RDesignPr"/> Passion Red
                   <div class="control__indicator"></div>
                 </label>


               </div>
             </div>
             <div class="colorGroup" id="xc90T8InscriptionColor">
               <h3>Color</h3>
               <br>
               <div class="control-group">
                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8InscriptionMabm"/> Magic Blue Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8InscriptionEbm"/> Ember Black Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8InscriptionSgm"/> Saville Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8InscriptionTbm"/> Twilight Bronze Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8InscriptionCwm"/> Crystal White Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8InscriptionBsm"/> Bright Silver Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8InscriptionOgm"/> Osmium Grey Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8InscriptionObm"/> Onyx Black Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8InscriptionLsm"/> Luminous Sand Metallic
                   <div class="control__indicator"></div>
                 </label>

                 <label class="control control--radio">
                   <input type="radio" name="color" value="xc90T8InscriptionIw"/> Ice White
                   <div class="control__indicator"></div>
                 </label>


               </div>
             </div>
            </div>
<!--END S90-------------------------------------------------------------------->
           <div id="XC90" class="group" >
             <select name="model" id="xc90Model">
               <option value="XC90 T5"><a class="showSingle" target="S60">T5</a></option>
               <option value="XC90 T6 AWD"><a class="showSingle" target="XC60">T6 AWD</a></option>
               <option value="XC90 T8 Twin Engine Plug-In Hybrid"><a class="showSingle" target="S90">T8 Twin Engine Plug-In Hybrid</a></option>
               <option value="XC90 Excellence -  T8 Twin Engine Plug-In Hybrid"><a class="showSingle" target="XC90">Excellence - T8 Twin Engine Plug-In Hybrid</a></option>
             </select>
            </div>
<!--END XC90------------------------------------------------------------------->

<!-- END TRIM SELECT -->




        </div>

        <div id="priceSection" class="targetDiv">
          <h1>Price Section</h1>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vehicle Price <input type="text" name="vehiclePrice" id="vehiclePrice"> <br>
            Price Good Until <input type="text" name="goodUntil" id="goodUntil">
        </div>

<!-- PACKAGES         --------------------------------------------------------->
        <div id="packagesSection" class="targetDiv">
          <h1>Packages</h1>
<!-- S90 ---------------------------------------------------------------------->

        <div class="packagesControl" id="packagesArea">
          <div class="control-group">
          <label  class="control control--checkbox"><input type="checkbox" id="visionPackage" name="visionPackage" value="Vision Package"> Vision Package
          <div class="control__indicator"></div>
          </label>
          <label  class="control control--checkbox"><input type="checkbox" id="climatePackage" name="climatePackage" value="Climate Package"> Climate Package
          <div class="control__indicator"></div>
          </label>
          <label  class="control control--checkbox"><input type="checkbox" id="conveniencePackage" name="conveniencePackage" value="Convenience Package"> Convenience Package
          <div class="control__indicator"></div>
          </label>
          <label  class="control control--checkbox"><input type="checkbox" id="bowersWilkins" name="bowersWilkins" value="Bowers &amp; Wilkins Premium Sound System"> Bowers &amp; Wilkins Premium Sound System
          <div class="control__indicator"></div>
          </label>

          <label  class="control control--checkbox"><input type="checkbox" id="MomentumPlusPackage" name="MomentumPlusPackage" value="Momentum Plus Package"> Momentum Plus
          <div class="control__indicator"></div>
          </label>
          <label  class="control control--checkbox"><input type="checkbox" id="wilkinsPremSoundPackage" name="wilkinsPremSoundPackage" value="Bowers &amp; Wilkins Premium Sound System"> Bowers &amp; Wilkins Premium Sound System
          <div class="control__indicator"></div>
          </label>
          <label  class="control control--checkbox"><input type="checkbox" id="highLvlIntIllumDarkFlame" name="highLvlIntIllumDarkFlame" value="High Level Interior Illumination &amp; Dark Flame Birch Inlays"> High Level Interior Illumination &amp; Dark Flame Birch Inlays
          <div class="control__indicator"></div>
          </label>
          <label  class="control control--checkbox"><input type="checkbox" id="t5IntroPackage" name="t5IntroPackage" value="T5 Intro Package"> T5 Intro Package
          <div class="control__indicator"></div>
          </label>
          </div>
        </div>
      </div>

<!-- OPTIONS         ---------------------------------------------------------->
        <div id="optionsSection" class="targetDiv">
          <h1>Options Select</h1>
          <div class="packagesControl" id="optionsArea">
            <div class="control-group">
              <label  class="control control--checkbox"><input type="checkbox" id="heatedFrontSeats" name="heatedFrontSeats" value="Heated Front Seats"> Heated Front Seats
              <div class="control__indicator"></div>
              </label>
              <label  class="control control--checkbox"><input type="checkbox" id="blackHeadliner" name="blackHeadliner" value="Black Headliner"> Black Headliner
              <div class="control__indicator"></div>
              </label>
              <label  class="control control--checkbox"><input type="checkbox" id="graphicalHeadsUpDisplay" name="graphicalHeadsUpDisplay" value="Graphical Heads-Up Display"> Graphical Heads-Up Display
              <div class="control__indicator"></div>
              </label>
              <label  class="control control--checkbox"><input type="checkbox" id="premiumAirSuspension" name="premiumAirSuspension" value="Premium Air Suspension"> Premium Air Suspension
              <div class="control__indicator"></div>
              </label>
              <label  class="control control--checkbox"><input type="checkbox" id="integratedCenterBooster" name="integratedCenterBooster" value="Integrated, Center Booster Cushion, 2nd row"> Integrated, Center Booster Cushion, 2nd row
              <div class="control__indicator"></div>
              </label>
              <label  class="control control--checkbox"><input type="checkbox" id="charcoalHeadliner" name="charcoalHeadliner" value="Charcoal Headliner"> Charcoal Headliner
              <div class="control__indicator"></div>
              </label>
              <label  class="control control--checkbox"><input type="checkbox" id="fourCornerAirSuspension" name="fourCornerAirSuspension" value="4-corner Air Suspension "> 4-corner Air Suspension
              <div class="control__indicator"></div>
              </label>

            </div>
          </div>
        </div>
<!-- ACCESSORIES -------------------------------------------------------------->
        <div id="accessoriesSection" class="targetDiv">
          <h1>Accessories Select</h1>
        <div class="packagesControl" id="accessoriesArea">
          <div class="control-group">
            <label  class="control control--checkbox"><input type="checkbox" id="splitDualTailpipesDiffuser" name="splitDualTailpipesDiffuser" value="Split Dual End Tailpipes w/ Rear Diffuser"> Split Dual End Tailpipes w/ Rear Diffuser
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="illuminatedSillMoulding" name="illuminatedSillMoulding" value="Illuminated Sill Moulding"> Illuminated Sill Moulding
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="rearSpoiler" name="rearSpoiler" value="Rear Spoiler"> Rear Spoiler
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="ipadHolder" name="ipadHolder" value="Ipad&reg; Holder"> Ipad&reg; Holder
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="bikeCarrierFrameAlum" name="bikeCarrierFrameAlum" value="Bike Carrier, Frame-Mounted Aluminum"> Bike Carrier, Frame-Mounted Aluminum
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="canoeKayakCarrier" name="canoeKayakCarrier" value="Canoe/Kayak Carrier"> Canoe/Kayak Carrier
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="skiHolder" name="skiHolder" value="Ski Holder"> Ski Holder
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="skiHolderAlum" name="skiHolderAlum" value="Ski Holder Aluminum"> Ski Holder Aluminum
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="mudFlapsRear" name="mudFlapsRear" value="Mudflaps,Rear"> Mudflaps,Rear
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="mudFlapsFront" name="mudFlapsFront" value="Mudflaps,Front"> Mudflaps,Front
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="loadBars" name="loadBars" value="Load Bars"> Load Bars
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="ruggedStylingRunningBoards" name="ruggedStylingRunningBoards" value="Rugged Styling Kit &amp; Running Boards"> Rugged Styling Kit &amp; Running Boards
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="ruggedStylingKitDarkGreySideScuffPlates" name="ruggedStylingKitDarkGreySideScuffPlates" value="Rugged Styling Kit, Dark Grey &amp; Side Scuff Plates"> Rugged Styling Kit, Dark Grey &amp; Side Scuff Plates
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="urbanStylingKitWRunningBoards" name="urbanStylingKitWRunningBoards" value="Urban Styling Kit &amp; Running Boards"> Urban Styling Kit &amp; Running Boards
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="urbanStylingKitWScuffPlates" name="urbanStylingKitWScuffPlates" value="Urban Styling Kit &amp; Side Scuff Plates"> Urban Styling Kit &amp; Side Scuff Plates
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="frontDecorFrames" name="frontDecorFrames" value="Front Décor Frames"> Front Décor Frames
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="frontRearSkidPlates" name="frontRearSkidPlates" value="Front &amp; Rear Skid Plates"> Front &amp; Rear Skid Plates
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="runningBoards" name="runningBoards" value="Running Boards"> Running Boards
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="bumperCover" name="bumperCover" value="Bumper Cover"> Bumper Cover
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="luggageCompartmentMatPlastic" name="luggageCompartmentMatPlastic" value="Luggage Compartment Mat - Plastic"> Luggage Compartment Mat - Plastic
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="protectiveGrilleSteel" name="protectiveGrilleSteel" value="Protective Grille, Steel"> Protective Grille, Steel
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="mudflapsFrontAndRear" name="mudflapsFrontAndRear" value="Mudflaps, Front and Rear"> Mudflaps, Front and Rear
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="loadCarriers" name="loadCarriers" value="Load Carriers"> Load Carriers
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="engineProtectionSheilds" name="engineProtectionSheilds" value="Engine Protection Shield"> Engine Protection Shield
            <div class="control__indicator"></div>
            </label>
            <label  class="control control--checkbox"><input type="checkbox" id="trailerHitch" name="trailerHitch" value="Trailer Hitch"> Trailer Hitch
            <div class="control__indicator"></div>
            </label>

          </div>
        </div>
      </div>



        </form>



      </div>
    </div>

  </body>
</html>
