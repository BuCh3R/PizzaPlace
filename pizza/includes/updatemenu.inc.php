<?php
require 'dbh.inc.php';

if(isset($_POST['almPizzaSubmit'])){
    $specificMenuTabel = "almpizza";
}else if(isset($_POST['mexiPizzaSubmit'])){
    $specificMenuTabel = "mexipizza";
}else if(isset($_POST['indbagtPizzaSubmit'])){
    $specificMenuTabel = "indbagtpizza";
}else if(isset($_POST['åbenIndbagtPizzaSubmit'])){
    $specificMenuTabel = "aabenindbagtpizza";
}else if(isset($_POST['luxusPizzaSubmit'])){
    $specificMenuTabel = "luxuspizza";
}else if(isset($_POST['børneMenuSubmit'])){
    $specificMenuTabel = "bornemenu";
}else if(isset($_POST['durumSubmit'])){
    $specificMenuTabel = "durum";
}else if(isset($_POST['pitaSubmit'])){
    $specificMenuTabel = "pitabrod";
}else if(isset($_POST['pizzaSandwichSubmit'])){
    $specificMenuTabel = "pizzasandwich";
}else if(isset($_POST['pastaSubmit'])){
    $specificMenuTabel = "pastaretter";
}else if(isset($_POST['grillSubmit'])){
    $specificMenuTabel = "grillretter";
}else if(isset($_POST['specialiteterSubmit'])){
    $specificMenuTabel = "specialiteter";
}else if(isset($_POST['xlBurgerSubmit'])){
    $specificMenuTabel = "xlburger";
}else if(isset($_POST['pommesFritesSubmit'])){
    $specificMenuTabel = "pommesfrites";
}else if(isset($_POST['salaterSubmit'])){
    $specificMenuTabel = "salatermedbrod";
}else if(isset($_POST['diverseSubmit'])){
    $specificMenuTabel = "diverse";
}else if(isset($_POST['tilbehørSubmit'])){
    $specificMenuTabel = "ekstratilbehor";
}else if(isset($_POST['sodavandSubmit'])){
    $specificMenuTabel = "sodavand";
}
    


if(isset($_POST['almPizzaSubmit']) || isset($_POST['mexiPizzaSubmit']) || isset($_POST['indbagtPizzaSubmit']) || isset($_POST['åbenIndbagtPizzaSubmit']) || isset($_POST['luxusPizzaSubmit']) || isset($_POST['børneMenuSubmit']) || isset($_POST['durumSubmit']) || isset($_POST['pitaSubmit']) || isset($_POST['pizzaSandwichSubmit']) || isset($_POST['pastaSubmit']) || isset($_POST['grillSubmit']) || isset($_POST['specialiteterSubmit']) || isset($_POST['xlBurgerSubmit']) || isset($_POST['pommesFritesSubmit']) || isset($_POST['salaterSubmit']) || isset($_POST['diverseSubmit']) || isset($_POST['tilbehørSubmit']) || isset($_POST['sodavandSubmit'])){
    
    $almNumber = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['almNumber']));
    $almName = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['almName']));
    $almDetails = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['almDetails']));
    $almPriceAlm = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['almPriceAlm']));
    $almPriceDeep = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['almPriceDeep']));
    $almPriceFam = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['almPriceFam']));

    
    
    if(empty($almName)){
        header("Location: ../crud.php?error=name_required");
        exit();
    }
    else{
        $sql = "INSERT INTO $specificMenuTabel (PizzaNumber, PizzaName, PizzaDetails, PizzaAlmPrice, PizzaDeepPrice, PizzaFamPrice) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../crud.php?error=sql");
            exit(); 
        }
        else{
            mysqli_stmt_bind_param($stmt, "ssssss", $almNumber , $almName, $almDetails, $almPriceAlm, $almPriceDeep, $almPriceFam );
            mysqli_stmt_execute($stmt);
            header("Location: ../crud.php?item=succes");
            exit();
        }
    
    }
}
else{
    header("Location: ../crud.php");
    exit();

}
// mysqli_stmt_close($stmt);
// mysqli_close($conn);
