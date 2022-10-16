<?php


if(isset($_POST['enterProduct'])){
    $username = $_POST['username'];
    $city = $_POST['city'];
    $quantity = $_POST['quantity'];
    
    
         if(!empty($username) && !empty($city) && !empty($quantity)){
            
         }else{
            $result = "please fill the field";
            echo $result;
           } 
                     
}  

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Supermarket</title>
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
      <form class="row-7 g-3" action="supermarket.php" method="POST">
        
        <div class="col-md-5 pt-3 pl-5">
           <label for="inputEmail4" class="form-label">Username</label>
           <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="col-md-5 pt-2  pl-5">
            <select class="form-select col-md-12 p-1" aria-label="Default select example" name="city" id="city">
                   <option selected>Choose City</option>
                   <option value="cairo" name="Cairo">Cairo</option>
                   <option value="Giza" name="Giza">Giza</option>
                   <option value="Alex" name="Alex">Alex</option>
                   <option value="Other" name="Other">Other</option>
            </select>
        </div>
        <div class="col-md-5 pt-2  pl-5">
           <label for="inputCity" class="form-label fs-1">Quantity</label>
           <input type="number" class="form-control" id="quantity" name="quantity">
        </div>
        <div class="col-12 mt-2 mb-2  pl-5">
            <input type="submit" class=".bg-light.bg-gradient rounded p-1 w-25" name="enterProduct" value="Enter Product">
        </div>
      </form>
    </div>
    <div class="forme border border-0 rounded d-inline-block">
      <form class="row-12 g-3" action="supermarket.php" method="POST">
        
        <div class="col-10 pt-3">
               <?php
                if(isset($_POST['quantity'])){
                    $col = "";
                    $row = $_POST['quantity'];
                    function tablrgenerate($r,$c){
                        echo "<table class='table table-bordered text-center  ml-4 col-12'>";
                        $products = ["Product name","Price","quantity","Sub Total"];
                        foreach($products as $product){
                           echo"<th>{$product}</th>";

                        }
                        for($i=0;$i<$r;$i++){
                              echo"<tr>";
                            
                                  echo "<td><input type='text' class='form-control' rows='1' name='col1'></td>
                                  <td><input type='text' class='form-control' rows='1' name='col2' ></td>
                                  <td><input type='text' class='form-control' rows='1' name='col3'></td>
                                  <td><input type='text' class='form-control' rows='1' name='col4' value=''></td>";    
                         }

                       echo"</tr>";
                       echo "</table>";
                     }
                      echo tablrgenerate($row,$col);
                      echo "<input type='submit' class='.bg-light.bg-gradient rounded p-1 w-100 ml-4 d-block' name='calculate' value='Calculate'>";
                }
                    
                
                
                if(isset($_POST['$calculate'])){
                  if(!empty($username) && !empty($city) && !empty($quantity)){
                    $col2 = $_POST['col2'];
                    $col3 = $_POST['col3'];
                    $col4 = $col2 + $col3;
                  }else{
                     $result = "please fill the field";
                     echo $result;
                    }
                    
               
                }
                ?>
        </div>
      </form>
    </div>
    <div class="forme border border-0 rounded d-inline-block">
      <form class="row-12 g-3" action="supermarket.php" method="POST">
        <div class="col-10 pt-3">
               <?php
                if(isset($_POST['username'])&&isset($_POST['city'])){
                  $username = $_POST['username'];
                  $city = $_POST['city'];
                  $check = ['username'=> $username,'city'=> $city,'Total' => '','Discount'=>'','Total after descount'=>'','Delivery'=>['Cairo','Giza','Alex','Other'],'Net Total'=>''];
                  foreach($check as $key=>$value){
                   echo "<table class='table table-bordered text-center  ml-4 col-12'><tr>";
                   echo "<th class='text-danger fs-2 col-6'>{$key}</th>";
                   echo "<td class='fs-2 col-6'>{$value}</td>";
                   if($key == 'Delivery'){
                    foreach($value as $values){
                      if($values == 'Cairo'){
                        $delivery = 0;
                      }elseif($values == 'Giza'){
                        $delivery = 30;
                        
                      }elseif($values == 'Alex'){
                        $delivery = 50;
                        
                      }elseif($values == 'Other'){
                        $delivery = 100;
                        
                      }
                      echo $delivery;
                    }
                      
                    
                }
                   echo "</tr></table>";
                  }
                } 
                
                ?> 
        </div>
      </form>
    </div>
  
    <!-- if($key == 'Delivery'){
                    if($city == 'Cairo'){
                      $delivery = 0;
                      echo $delivery;
                        
                      }elseif($value == 'Giza'){
                        $delivery = "30";
                        echo $delivery;
                      }elseif($value == 'Alex'){
                        $delivery = "50";
                        echo $delivery;
                      
                    }
                    
                } -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>