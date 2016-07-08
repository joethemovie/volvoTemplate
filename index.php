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
      </div>
      <div class="test">
        <form action="emailTemplate.php" method="post">

        <div id="nameSection" class="targetDiv">
          <h1>Customer's Name</h1>
            <input type="text" name="name" id="name">
        </div>





        <div id="vehicleSection" class="targetDiv">
          <h1>Vehicle Select</h1>
          <select id="car">
            <option value="S60">S60</option>
            <option value="XC60">XC60</option>
            <option value="S90">S90</option>
            <option value="XC90">XC90</option>
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
<!--END XC60------------------------------------------------------------------->
          </div>
          <div id="S90" class="group" >
            <select name="model" id="s90Model">
              <option value="s90T5Color"><a class="showSingle" target="S60">T5</a></option>
              <option value="s90T6Color"><a class="showSingle" target="XC60">T6 AWD</a></option>
            </select>
            <div class="colorGroup" id="s90T5Color">

              <label class="control">
                <input type="checkbox" name="color" value="s90T5Mbm"> s90T5Mbm
                <div class="control__indicator"></div>
              </label>
              <br>
              <label class="control">
                <input type="checkbox" name="color" value="anotherColor"> Test
                <div class="control__indicator"></div>
              </label>


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

        <div id="packagesSection" class="targetDiv">
          <h1>Vehicle Price</h1>
            <input type="text" name="test3" id="test3">
        </div>

        <div id="accessoriesSection" class="targetDiv">
          <h1>Accessories Select</h1>
            <input type="text" name="test4" id="test4">
        </div>

        <div class="majorMenu">
          <ul>
            <li><a class="showSingle" target="name">Name</a></li>
            <li><a class="showSingle" target="vehicle">Vehicle</a></li>
            <li><a class="showSingle" target="packages">Packages</a></li>
            <li><a class="showSingle" target="accessories">Accessories</a></li>
          </ul>
        </div>
          <button type="submit" name="next" id="submit">Submit</button>
        </form>



      </div>
    </div>

  </body>
</html>
