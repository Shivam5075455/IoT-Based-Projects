<html>
<head>
    <meta name= "viewport" content="width=device-width,initial-scale=1.0">
    <style>
             .pho{
                 width: 80%;
             }
             .btn1{
                 color:#442c09; 
                 background: #fff9a3 ;
                 cursor: pointer;
           
                 border-color: #895912 ;
                 border-radius: 8px;
                 box-shadow: 2px 3px #895912;
             }
             .btn2{
                 color: #442c09;  
                 background: #fff9a3; 
                 border-color: #895912;
                 cursor: pointer;
                 border-radius: 8px;
                 box-shadow: 2px 3px #895912;
             }
             .btn3{
                 color: #442c09; 
                 background: #fff9a3;  
                 border-color: #895912;
                 cursor: pointer;
                 border-radius: 8px;
                 box-shadow: 2px 3px #895912;
             }
             .btn4{
                 color: #442c09;  
                 background: #fff9a3;  
                 border-color: #910808;
                 cursor: pointer;
                 border-radius: 8px;
                 box-shadow: 2px 3px #895912;
             }
             .head{
                 font-size: 30px;
             }
             body{
                 text-align:bottom;               
             }
            
             .crt{
                height:95vh;
                 text-align:bottom;
                 transform:translate(25%,90%);
             }
             ul{
                 list-style: none;
                 display:flex;
                 font-size:31px;
             }
             ul li{
                
             }
             ul li:nth-child(1)
             {
                right:100%;
                left:-5%; 
                transform:translate(100%,-5%);
                 
             }
             ul li:nth-child(2)
             {
                right:100%;
                transform:translate(100%);
                 color:#ba2316;
               
             }
             ul li:nth-child(3)
             {
                
                 left: -29%;
                 transform:translate(-29%);
                
             }
             ul li:nth-child(4)
             {
                left: -19%;
                 transform:translate(-19%);
                 color:#ba2316;       
             }
             </style>
    <title>Control With Internet</title>
</head>
<body>
   
    <div class="pho" style="background-image: url(https://www.wallpapertip.com/wmimgs/4-46066_bulb-hd-hd-wallpaper-download-lightbulb-horizontal.jpg);
     height: 1080; width: 100%;" align="center"><br><br><br><br>
    <h1 style="color:#a90d15; font-size: 50;">CLOUD CONTROL LED LIGHT </h1><br><br><br><br><br>
     
     <form action="" method="post">
     
    <button style="height:50px;width:103px; color:#402804; font-size:14px" name="btn1" class="btn1">OFF Mode</button>&nbsp;&nbsp;&nbsp;&nbsp;
    <button style="height:50px;width:103px; color:#402804; font-size:14px" name="btn2" class="btn2">Night Mode</button>&nbsp;&nbsp;&nbsp;&nbsp;
    <button style="height:50px;width:103px; color:#402804; font-size:14px" name="btn3" class="btn3">Normal Mode</button>&nbsp;&nbsp;&nbsp;&nbsp;
    <button style="height:50px;width:103px; color:#402804; font-size:14px" name="btn4" class="btn4">Study Mode</button><br>      
</form>
  <!--PHP start -->
<?php
$file2="SHI1.dat";  //database file
if (isset($_POST['btn1']))  // getting data, if any change in slider then we will get data ,,,, isset means ==
{
    file_put_contents($file2,"0");  //saving data if get from sli
   echo " <h3 style=\"font-size: 22px; color:#b81010f2;\">OFF Mode </h3>";   //display the value of slider
    
}
else if (isset($_POST['btn2']))  // getting data, if any change in slider then we will get data 
{
    file_put_contents($file2,"5");  //saving data if get from sli
   echo "<h4 style=\"font-size: 22px; color:#b81010f2;\">Night Mode</h4";   //display the value of slider    
}
else if (isset($_POST['btn3']))  // getting data, if any change in slider then we will get data 
{
    file_put_contents($file2,"100");  //saving data if get from sli
   echo "<h4 style=\"font-size: 22px;color:#b81010f2;\">Normal Mode </h4>";   //display the value of slider
    
}
else if (isset($_POST['btn4']))  // getting data, if any change in slider then we will get data 
{
    file_put_contents($file2,"255");  //saving data if get from sli
   echo "<h4 style=\"font-size: 22px;color:#b81010f2;\"> Study Mode</h4>";   //display the value of slider  
}
?>
<div>
<body>
    <footer class="crt">
    <P>
    <ul>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Created by:&nbsp;</li>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shivam</li>
        <li><br>&nbsp;&nbsp;&nbsp;Submitted to:&nbsp;</li>
        <li><br>&nbsp;AKG Engineering College</li>
</ul>
</P>
</footer>
</div>
</body>
<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<pre>
<p style="color:#ba2316;" class="head" >&#09;&#09;&#09;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2 style="color:black">Created by:</style><h2 style="color:#ba2316;">Shivam</style></h2><br>&#09;&#09;&#09;&#09;&#09;&#09;&nbsp;Submitted to: AKG Engineering College</P>
</pre> -->
</div>
</body>
    </html>