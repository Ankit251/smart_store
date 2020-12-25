<?php
session_start();

?>

<html>

<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/875301f134.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-lg-12 text-center border rounded bg-light my-5">

            <h1>My cart</h1>
            </div>

            <div class="col-lg-9">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Serial No.</th>
                        <!-- <th scope="col">Image</th> -->
                        <th scope="col">Item-name</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
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
                                        <td>$value[Price]</td>


                                    </tr>

                                    ";
                                }
                            }    

                        ?>
                      
                       
                    </tbody>
                </table>

            </div>

            <div class="col-lg-3">
                <div class="border bg-light rounded p-4">
                    <h4>Total</h4>
                    <h5 class="text-right"><?php  echo $total; ?></h5>
                    <br>
                    <form>

                  
  

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Cash on Delivery
                                </label>
                            </div>
                            <br>
                    

                    
                            <button class="btn btn-primary btn-block">Checkout</button>

                    </form>
                </div>
            </div>
        </div>

    </div>

</body>

</html>