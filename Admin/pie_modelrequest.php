<?php
include("header.php");
include("companyconfig.php");
  
 $query ="SELECT COUNT( `bike_modelname` ) AS requestcount, `bike_modelname`
 FROM `tblbikelancebikemodel` m
 INNER JOIN tblbikelancerequest r ON r.bike_id = m.model_id
 GROUP BY `bike_modelname`
 LIMIT 0 , 30";  
 $result = mysqli_query($con, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>    
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);   
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['bike_modelname', 'requestcount'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          { 
					echo "['".$row["bike_modelname"]."', ".$row["requestcount"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div> 
           <div style="width:900px; margin-top:6%">  
                <h3 align="center">Pie Chart Showing the Rentrequest Count in Modelwise</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
          </div>
      </body>  
 </html>  
<?php
include("footer.php");
?>