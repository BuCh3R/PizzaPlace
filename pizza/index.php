<?php require 'includes/dbh.inc.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <title>HAMZZA PIZZA</title>
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>
<div class="container oreganeinfo">
<h6>(Alle pizzaer er med oregano)</h6>
</div>

<?php
// get alm pizza menu
getAlmPizza($conn, "almpizza", "Alm Pizza", "almPizzaMenu");
getAlmPizza($conn, "mexipizza", "Mexicansk Pizza", "mexiPizzaMenu");
getAlmPizza($conn, "indbagtpizza", "Indbagt Pizza", "indbagtPizzaMenu");
getAlmPizza($conn, "aabenindbagtpizza", "Åben Indbagt Pizza", "åbenIndbagtPizzaMenu");
getAlmPizza($conn, "luxuspizza", "Luxus Pizza", "luxusPizzaMenu");
getAlmPizza($conn, "bornemenu", "Børne Menu", "børneMenuMenu");
getAlmPizza($conn, "durum", "Durum Rullebrød", "durumMenu");
getAlmPizza($conn, "pitabrod", "Pitabrød Hjemmelavet", "pitabrødMenu");
getAlmPizza($conn, "pizzasandwich", "Hjemmelavet Pizza Sandwich", "pizzaSandwichMenu");
getAlmPizza($conn, "pastaretter", "Pastaretter", "pastaretterMenu");
getAlmPizza($conn, "grillretter", "Grillretter", "grillretterMenu");
getAlmPizza($conn, "specialiteter", "Specialiteter", "specialiteterMenu");
getAlmPizza($conn, "xlburger", "XL Burger", "xlBurgerMenu");
getAlmPizza($conn, "pommesfrites", "Pommes Frites", "pommesFritesMenu");
getAlmPizza($conn, "salatermedbrod", "Salater Med Brød", "salaterMedBrødMenu");
getAlmPizza($conn, "diverse", "Diverse", "diverseMenu");
getAlmPizza($conn, "ekstratilbehor", "Ekstra Tilbehør", "ekstraTilbehørMenu");
getAlmPizza($conn, "sodavand", "Sodavand", "sodavandMenu");
function getAlmPizza($conn, $tableId, $menuHeadline, $checkpointId){
    $sql ="SELECT * FROM $tableId ORDER BY PizzaNumber";
    $result = $conn->query($sql);
    echo "<div class='container top-margin'>";
    echo "<div class='row'>";
    echo "<div class='col-9 white-background foodHeadline'><h2 id='$checkpointId'>
    <div class='menuTypeLayout-circle'><img src='img/hamzzalogo.png'></div><div class='menuTypeLayout-bar'>$menuHeadline</h2></div>";
    echo "<div class='col-1 white-background prices'><p><b>Alm</b><p></div>";
    echo "<div class='col-1 white-background prices'><p><b>Deep</b><p></div>";
    echo "<div class='col-1 white-background prices'><p><b>Fam</b><p></div>";
    echo "</div>";
    echo "</div>";
    while ($row = $result->fetch_assoc()){
        $pizzaNum = $row['PizzaNumber'];
        $pizzaName = $row['PizzaName'];
        $pizzaDetails = $row['PizzaDetails'];
        $pizzaPriceAlm = $row['PizzaAlmPrice'];
        $pizzaPriceDeep = $row['PizzaDeepPrice'];
        $pizzaPriceFam = $row['PizzaFamPrice'];
        if($pizzaPriceDeep==0){
            $pizzaPriceDeep = null;
        }
        if($pizzaPriceFam==0){
            $pizzaPriceFam = null;
        }
        echo "<div class='container'>";
        echo "<div class='row'>";
        echo "<div class='col-1 white-background prices'><b>".$pizzaNum.".</b></div>";
        echo "<div class='col-8 white-background underline-border'><b>".$pizzaName."</b><br>".$pizzaDetails."</div>";
        echo "<div class='col-1 white-background underline-border prices'><b>".$pizzaPriceAlm."</b></div>";
        echo "<div class='col-1 white-background underline-border prices'><b>".$pizzaPriceDeep."</b></div>";
        echo "<div class='col-1 white-background underline-border prices'><b>".$pizzaPriceFam."</b></div>";  
        echo "</div>";
        echo "</div>";
    }
}
?>

</body>
</html>