<?php
$survey = [
    "Question"=>["Are you satsified with the level of cleanliness ?","Are you satisfied with the service prices ?","Are you satisfied with the nursing service ?","Are you satisfied with the level of the doctor ?","Are you satisfied with the calmness in the hospital ?"],
    "grade"=>["good","verygood","bad"]
    
];
// $lastIndex = count($survey)-2;
// $table = "<table class='table w-50 mt-5 text-center'>
//           <thead><tr>";
// foreach($survey as $header=>$value){
//     $table.= "<th> {$header} </th>";
// }
// $table.= "</tr></thead><tbody>";

// foreach($survey as $header[Question]=>$value1){
//     $table.= "<tr> {$value1} </tr>";
// }
// $table.= "</tbody>";
// echo $table;
if(isset($_POST['enterproduct'])){
    $enterProduct = $_POST['enterproduct'];
    $userName = $_POST['username'];
    $city = $_POST['city'];
    function tablegenerate($row,$col){
        $quantity = $_POST['quantity'];
        $row = $quantity;
        echo "<table class='table table-bordered text-center  ml-4 col-12'>";
        $products = ["Product name","Price","quantity","Sub Total"];
        foreach($products as $col){
            echo"<th>{$col}</th>";
        }
        echo "</table>";
    }
        tablegenerate($row,$col);
}


?>
<!doctype html>
<html>
  <head>
    <title>Supermarket2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body{
        background-image: url(../task3/images/4.jpg);
        box-sizing: border-box;
        background-repeat: no-repeat;
        
    }
    .forme{
        margin-left: 630px;
        width: 53%;
        height: 300px;
    }
    
  </style>
  </head>
  <body>
    <div class="text-center">
        <img src="../task3/images/5.png" width="35%" height="200px" >
    </div>
    <div class="forme border border-0 rounded d-inline-block">
      <form class="row-7 g-3" method="POST">
        <div class="col-md-5 pt-3 pl-5" id="userdiv">
           <label for="inputEmail4" class="form-label" name=''>Username</label>
           <input type="text" class="form-control" id="username" name="username" required >
        </div>
        <div class="col-md-5 pt-2  pl-5" id="citydiv">
            <select class="form-select col-md-12 p-1" aria-label="Default select example" name="city" id="city" required>
                   <option selected>Choose City</option>
                   <option value="Cairo" name="Cairo">Cairo</option>
                   <option value="Giza" name="Giza">Giza</option>
                   <option value="Alex" name="Alex">Alex</option>
                   <option value="Other" name="Other">Other</option>
            </select>
        </div>
        <div class="col-md-5 pt-2  pl-5" id="quantitydiv">
           <label for="inputCity" class="form-label fs-1">Quantity</label>
           <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="col-12 mt-2 mb-2  pl-5" id="btndiv">
            <input type="submit" class=".bg-light.bg-gradient rounded p-1 w-25" name="enterProduct" value="Enter Product">
        </div>
      </form>
    </div>
  </body>
</html>