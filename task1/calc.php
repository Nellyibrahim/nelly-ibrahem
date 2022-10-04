<?php
// nelly
    $message = "";
    if(isset($_POST['fNum']) || isset($_POST['sNum']) || isset($_POST['result']) || isset($message)){

        $fNum = $_POST['fNum'];
        $sNum = $_POST['sNum'];
        

        

        switch($_POST['operator']){
            case "sum":
                $message = $fNum + $sNum;
                break;
            case "div":
                $message = $fNum / $sNum;
                break;
            case "sub":
                $message = $fNum - $sNum;
                break;
            case "mul":
                $message = $fNum * $sNum;
                break;
            case "remainder":
                $message = $fNum % $sNum;
                break;
            case "avg":
                $message = ($fNum + $sNum)/2;
                break;
            default:
                $message = "no num";
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Calculator</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <form method="POST">
          <div class="container border border-dark col-5">
            <div class="row mb-3 pt-5">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">First Number</label>
              <div class="col-sm-10">
                <input type="number" class="form-control form-control-sm" id="colFormLabelSm" name="fNum">
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Second Number</label>
              <div class="col-sm-10">
                <input type="number" class="form-control form-control-sm" id="colFormLabelSm" name="sNum">
              </div>
            </div>
            <div class="row mb-3">
              <label for="colFormLabelSm result" class="col-sm-2 col-form-label col-form-label-sm">Result</label>
              <div class="col-sm-10">
                <input type="number" class="form-control form-control-sm" id="colFormLabelSm result" disabled>
              </div>
            </div>
            <div class="btn-group pb-3" role="group" aria-label="Basic mixed styles example">
                <button  class="btn btn-danger" name="operator" value="div">Division /</button>
                <button  class="btn btn-warning" name="operator" value="sum">sum +</button>
                <button  class="btn btn-success" name="operator" value="sub">Subtract -</button>
                <button  class="btn btn-dark" name="operator" value="mul">Multiply *</button>
                <button  class="btn btn-success" name="operator" value="remainder">Remainder %</button>
                <button  class="btn btn-danger" name="operator" value="avg">Average</button>
            </div>
          </div>
        </form>
        <div class="alert alert-success col-5 m-auto" role="alert">
           <h3 class="text-center"><?php echo $message ; ?> </h3>
           <p class="mb-0"></p>
        </div>
        
    </body>
