
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Grade</title>
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <?php
        
        define('max_grade',100);
        if(isset($_POST['physics'])||isset($_POST['chemistry'])||isset($_POST['math'])||isset($_POST['computer'])|| isset($_POST['biology'])||isset($message)){
            $physics = $_POST['physics'];
            $chemistry = $_POST['chemistry'];
            $math = $_POST['math'];
            $computer = $_POST['computer'];
            $biology = $_POST['biology'];
            $year = ($physics + $chemistry + $computer + $math + $biology)/500;
            $percentage = $year * 100;
            if($percentage>=90 && $percentage <= max_grade){
                  $message =  $percentage . " % " . ": Grade A";
            }elseif($percentage>=80 && $percentage < 90){
                $message =  $percentage . " % " . ": Grade B";
            }elseif($percentage>=70 && $percentage < 80){
                $message =   $percentage . " % " . ": Grade C";
            }elseif($percentage>=60 && $percentage < 70){
                $message =  $percentage . " % " . ": Grade D";
            }elseif($percentage>=40 && $percentage < 60){
                $message =  $percentage . " % " . ": Grade E";
            }else{
                $message =  $percentage . " % " . ": Grade F";
            }
            
        }
        
    ?>
    <body>
       <form method="POST">


        <div class="container border border-dark col-5 d-flex flex-row">
            <div>
            <div class="row g-3 pt-5">
                 <div class="col-5">
                      <label for="physics">Physics</label>
                      <input type="number" class="form-control border border-danger d-block" name="physics" aria-label="First name">
                 </div>
            </div>
            <div class="row g-3">
                 <div class="col-5">
                      <label for="chemistry">Chemistry</label>
                      <input type="number" class="form-control border border-danger " name="chemistry" aria-label="First name">
                 </div>
            </div>
            <div class="row g-3">
                 <div class="col-5">
                      <label for="math">Mathmatics</label>
                      <input type="number" class="form-control border border-danger " name="math" aria-label="First name">
                 </div>
            </div>
            <div class="row g-3">
                 <div class="col-5">
                      <label for="computer">computer</label>
                      <input type="number" class="form-control border border-danger " name="computer" aria-label="First name">
                 </div>
            </div>
            <div class="row g-3">
                 <div class="col-5">
                      <label for="biology">Biology</label>
                      <input type="number" class="form-control border border-danger " name="biology" aria-label="First name">
                 </div>
            </div>
            <div class="row g-3">
                 <div class="col-5 p-5">
                      <button class="btn btn-outline-danger d-block ">Calculate</button>
                 </div>
            </div>
            </div>
            <div class="alert alert-success col-7 m-auto d-block" role="alert">
               <h3 class="text-center"><?php echo $message ; ?> </h3>
               <p class="mb-0"></p>
            </div>
        </div>

      </form>
        
    </body>
</html>   

 