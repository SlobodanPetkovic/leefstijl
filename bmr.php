<head>
    <meta charset="UTF-8">
    <title>bmr</title>
    <!--Hier worden alle bestanden gekoppeld--> <!-- --> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Style.css" />
</head>

<body>  
     <!--Hier voeg ik drie collomen bij zo kan ik het mooi inrichten--> 
 <div class="container-fluid">
 <div class="row">
 <div class="col-12">
    <center><h2>Check je leefstijl!</h2></center>  <!-- hiet centreer ik mij header txt-->
        </div>
 </div>
 
</body>
</html>
<!------------------------------------Uitvoer CODE---------------------------------------------> 

<?php



$lengte=$_POST['Lengte_Cm'];
$gewicht=$_POST['Gewicht_Kg'];
$leeftijd=$_POST['Leeftijd'];
$sex=$_POST['sex'];


//En berekening die je Bmr berekend 

try{
if ($sex == "vrouw" )
{
    $totaal = round((((9.5634 *$gewicht) + (1.8496 * $lengte)- (4.6756 *$leeftijd)) + 655.0955),0);//BEREKENING KCAL
    
    echo "Calorie behoefte vrouw is $totaal kcal";

}
else
{
    $totaal = round((((13.7516 * $gewicht) + (5.0033 * $lengte)-(6.755 *$leeftijd)) + 66.473),0);//BEREKENING KCAL
    echo "Calorie behoefte man is $totaal kcal";

}
}
catch(error $e)
{
    echo "<center>Error2!</center><br/>";
    echo "<center>  </center>";
}

?>