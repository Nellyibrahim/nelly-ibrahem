
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SURVEY</a>
    <img src="../review layouts/images/logo.png" alt="Logo" width="75" height="55" class="d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Review</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<table class="table w-50 text-center text-primary table table-warning table-striped table table-bordered">
  <thead>
    <tr>
      <?php
      $head = ["Question","Bad","Good","Very Good","Excellent"] ;
      
      foreach($head as $header){
        echo "<th>{$header}</th>";
        
        
      }
      ?>
  </tr>
  </thead>
  <tbody>
      
      <?php
    $questions = ["Are you satsified with the level of cleanliness ?"=>"<form method='post' action=''><input type='radio' name='radio_btn' value='bad'></form>",
    "Are you satisfied with the service prices ?"=>"<form method='post' action=''><input type='radio' name='radio_btn'></form>",
    "Are you satisfied with the nursing service ?"=>"<form method='post' action=''><input type='radio' name='radio_btn'></form>",
    "Are you satisfied with the level of the doctor ?"=>"<form method='post' action=''><input type='radio' name='radio_btn'></form>",
    "Are you satisfied with the calmness in the hospital ?"=>"<form method='post' action=''><input type='radio' name='radio_btn'></form>"];
    foreach($questions as $question=>$v){
      echo "<tr> <td>{$question}</td>";
      for($i=0;$i<=count($head)-2;$i++){
        echo "<td>{$v}</td>";
      }
      echo "</tr>";
    }?>
    
    <?php

    if(isset($_POST['radio_btn'])){
      $radio = $_POST['radio_btn'];
      echo $radio;
    }
    
    
    
    
    ?>
    
    
  </tbody>
</table>