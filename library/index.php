<?php
include "header.php";
?>

<!-- Code for the collapse-->



<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
          <div class="dropdown">
  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Library
        </button>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="showall.php">Show all</a>
    
  </div>
</div>
        
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <!--Inside collapse -->
          
          <!-- Card 1-->
          
          
          <div class="card text-center">
  <div class="card-header primary" >
    Active
  </div>
  <div class="card-body">
    <h5 class="card-title">Card 1</h5>
    <p class="card-text">With supporting text Book's Name and Author's Name. From Database.</p>
    <a href="#" class="btn btn-success">View Book</a>
  </div>
  <div class="card-footer text-muted">
    13 days left
  </div>
</div>
         <br> 
          
          <!-- Card 2-->
          
          <div class="card text-center">
  <div class="card-header">
    Active
  </div>
  <div class="card-body">
    <h5 class="card-title">Card 2</h5>
    <p class="card-text">With supporting text Book's Name and Author's Name. From Database.</p>
    <a href="#" class="btn btn-danger">View Book</a>
  </div>
  <div class="card-footer text-muted">
    2 days left
  </div>
</div>
         <br> 
          
          <!-- Card 3-->
          <div class="card text-center">
  <div class="card-header">
    Not Active
  </div>
  <div class="card-body">
    <h5 class="card-title">Card 3</h5>
    <p class="card-text">With supporting text Book's Name and Author's Name. From Database.</p>
    <a href="#" class="btn btn-primary">Take Book</a>
  </div>
  <div class="card-footer text-muted">
    0 days ago
  </div>
</div>
         <br> 
          
       
          
          
          
          
          
          
          
          
          
          
          
          <!-- End of inside collapse-->
          <hr>
      </div>
    </div>
  </div>
  
  
</div>


<!-- Code for the collapse end-->



<?php
include "footer.php";
?>