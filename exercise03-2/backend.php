<?php
 $nPropane = $_POST["nPropane"];
 $nAccess = $_POST["nAccessories"];
 $nGrill = $_POST["nGrill"];
 $tShip = $_POST["tShip"];
 $uname = $_POST["username"];
 $pword = $_POST["password"];

 $cPropane = 30;
 $cAccess = 50;
 $cGrill = 10;

 $tax = 7.5;
 $ntax = 1 + (7.5 / 100);
 $total = ($cPropane * $nPropane) + ($cAccess * $nAccess) + ($cGrill * $nGrill);
 $n = $nPropane + $nAccess + $nGrill;

 $stotal = ($ntax * $total) + $tShip;

 $t = "n/a";
 if($tShip == 0){
   $t = "Free Seven (7) Day Shipping";
 }
 else if($tShip == 5){
   $t = "Three (3) Day Shipping";
 }
 else if($tShip == 50){
   $t = "Overnight Shipping";
 }

 echo "<html>
          <head>
            <link rel=\"stylesheet\" href=\"backendstyle.css\">
          </head>
          <body>
            <h1 class=\"title\"> Propane and Propane Accessories </h1>
            <p class=\"title_desc\"> Totally not a King of the Hill Reference </p>
            <div class=\"t\">
            <div class=\"item_summary\">
              <table>
               <th> Item: </th>
               <th> Price per Unit: </th>
               <th> Unit(s): </th>
               <th> Cost: </th>
               <tr>
                <td> PROPANE </td>
                <td> $30 </td>
                <td>". $nPropane ."</td>
                <td>". $cPropane * $nPropane ."</td>
               </tr>
               <tr>
                <td> ACCESSORIES </td>
                <td> $50 </td>
                <td>". $nAccess ."</td>
                <td>". $cAccess * $nAccess ."</td>
               </tr>
               <tr>
                <td> GRILL </td>
                <td> $10 </td>
                <td>". $nGrill ."</td>
                <td>". $cGrill * $nGrill ."</td>
               </tr>
              </table>
              <p class=\"customer_summary\"> Order Summary: </p>
              <p class=\"number_of_items\"> Number of Items Bought: ". $n ."</p>
              <p class=\"ship_type\"> Type of Shipping: ". $t ."</p>
              <p class=\"ship_cost\"> Cost of Shipping: ". $tShip ." </p>
              <p class=\"total_cost\"> Subtotal: $". $total ."</p>
              <p class=\"tax_amount\"> Tax: ". $tax ."% </p>
             <div class=\"total_summary\">
              <p class=\"total_summary\"> Total Cost: </p>
              <p class=\"total\"> $". $stotal ." </p>
             </div>
             <div class=\"customer_information\">
              <p class=\"customer_information\"> Customer Info: </p>
              <p class=\"user_info\"> USERNAME: ". $uname ." </p>
              <p class=\"user_info\"> PASSWORD: ". $pword ."</p>
             </div>
             </div>
             <div class=\"footer\">
              <h1 class=\"title\"> Propane and Propane Accessories </h1>
             </div>
          </body>
      </html>";
 ?>
