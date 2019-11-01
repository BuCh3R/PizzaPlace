<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'; ?>
    <title>CRUD</title>
</head>
<body>
<?php
createNewFood("Alm Pizza", "almPizzaSubmit");
createNewFood("Mexicansk Pizza", "mexiPizzaSubmit");
createNewFood("Indbagt Pizza", "indbagtPizzaSubmit");
createNewFood("Åben Indbagt Pizza", "åbenIndbagtPizzaSubmit");
createNewFood("Luxus Pizza", "luxusPizzaSubmit");
createNewFood("Børne Menu", "børneMenuSubmit");
createNewFood("Durum Rullebrød", "durumSubmit");
createNewFood("Pitabrød Hjemmelavet", "pitaSubmit");
createNewFood("Hjemmelavet Pizza Sandwich", "pizzaSandwichSubmit");
createNewFood("Pastaretter", "pastaSubmit");
createNewFood("Grillretter", "grillSubmit");
createNewFood("Specialiteter", "specialiteterSubmit");
createNewFood("XL Burger", "xlBurgerSubmit");
createNewFood("Pommes Frites", "pommesFritesSubmit");
createNewFood("Salater Med Brød", "salaterSubmit");
createNewFood("Diverse", "diverseSubmit");
createNewFood("Ekstra Tilbehør", "tilbehørSubmit");
createNewFood("Sodavand", "sodavandSubmit");
function createNewFood($HeadlineFoodtype, $submitButtonName){
    echo "<form action='includes/updatemenu.inc.php' method='post'>";
    echo "<h1>$HeadlineFoodtype</h1>";
    echo "<input type='text' name='almNumber' placeholder='Nummer'>";
    echo "<input type='text' name='almName' placeholder='Navn'>";
    echo "<input type='text' name='almDetails' placeholder='Detaljer'>";
    echo "<input type='text' name='almPriceAlm' placeholder='Alm pris'>";
    echo "<input type='text' name='almPriceDeep' placeholder='Deep pan pris'>";
    echo "<input type='text' name='almPriceFam' placeholder='Familie pris'>";
    echo "<button type='submit' name='$submitButtonName'>Opret Ny Pizza</button>";
    echo "</form>";
    echo "<br>";
}
?>
</body>
</html>