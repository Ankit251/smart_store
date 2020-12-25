<?php
session_start();

?>

<html>

<head>

<link href="font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/875301f134.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;">Cart List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


        <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Serial No.</th>
                        <!-- <th scope="col">Image</th> -->
                        <th scope="col">Item</th>
                        <th scope="col">Item-name</th>
                        <th scope="col">quantity</th>
                        <th scope="col">Price</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            $total = 0;
                            if(isset($_SESSION['cart'])) {
                                foreach($_SESSION['cart'] as $key => $value){
                                    $total = $total + $value['Price'];
                                   
                                    echo "
                                    <tr>
                                        <td>1</td>
                                        <td>$value[Item_Name]</td>
                                        <td>$value[Item_Name]</td>
                                        <td>1</td>
                                        <td>$value[Price]</td>


                                    </tr>

                                    ";
                                }
                            }    

                        ?>
                      
                       
                    </tbody>
                </table>


      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary">Proceed to checkout</button>
      </div>
    </div>
  </div>
</div>
<!-- 
<div class="cart"> 
                                        <button class="w3view-cart" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>

                                        <span class="badge"> </span></button>
                                        
                                </div> -->
</body>

</html>