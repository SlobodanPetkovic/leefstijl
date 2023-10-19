<php
<head>
    <meta charset="UTF-8">
    <title>Bmi</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css" />
</head>

<body>  
    <!--   --> 
 <div class="container-fluid">
 <div class="row">
 <div class="col-12">
    <center><h2>Check je leefstijl!</h2></center>
        </div>
 </div>
</body>
</html>
 

<!------------------------------------                                E---------------------------------------------> 

<?php
try {
    //Variabelen die ik ophaal
    $lengte=$_POST['lengte'];
    $gewicht=$_POST['gewicht'];
    //En berekening die je bmi berekend 
    $totaal = $gewicht / ($lengte*$lengte);
    $Nummer = number_format((float)$totaal, 2, '.', '');
    if ($Nummer <= 18.5)
    {
     Echo "Uw bmi waarde is $Nummer(Ondergewicht).";
    }
    
    else if  ($Nummer > 18.5 == $Nummer <25)
    {
        Echo "Uw bmi waarde is $Nummer(Gezond gewicht).";
    }
    
    else if ($Nummer > 25 == $Nummer < 30)
    {
        Echo "Uw bmi waarde is $Nummer(Overgewicht).";
    }
    
    else if ($Nummer >= 30)
    {
        Echo "Uw bmi waarde is $Nummer(Ernstig overgewicht (obesitas).";
    }
} catch (DivisionByZeroError $e) {
   echo "Error-1:Een van de waardes klopt niet!";
}
catch(error $e)
{
    echo "<center>Error2!</center><br/>";
    echo "<center>Ho wat is even, Er is iets mis gegaan!</center>";
}
    
?>