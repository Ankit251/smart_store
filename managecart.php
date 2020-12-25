<?php  

session_start();


$usr = $_SESSION['username'];

if($_SERVER["REQUEST_METHOD"]== "POST"){
    if(isset($_POST['Add_To_Cart'])){
        $itn = $_POST['Item_name'];
        $pr = $_POST['Price'];
        $qu = $_POST['quantity'];
        $ima = $_POST['image'];

        if(isset($_SESSION['cart'])) {

            $myitems = array_column($_SESSION['cart'],'Item_Name');
            if(in_array($_POST['Item_name'],$myitems)) {
                echo "<script>
                alert('Item already added');
                window.location.href='slide.php';
                </script>";
            }

            else {
                $count= count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('Item_Name'=>$_POST['Item_name'], 'Price'=>$_POST['Price'], 'Image'=>$_POST['image'],'Quantity'=>$_POST['quantity']);
                $con = mysqli_connect('localhost','root','','tblproject');
                $qr = "Insert into cart(user_name,item_name,quantity,buy,price,images) values ('$usr','$itn','$qu','no','$pr','$ima')";
                mysqli_query($con,$qr);
                echo "<script>
                alert('Item added');
                window.location.href='slide.php';
                </script>";
            }   
        }
        else {
            $_SESSION['cart'][0] = array('Item_Name'=>$_POST['Item_name'], 'Price'=>$_POST['Price'], 'Image'=>$_POST['image'],'Quantity'=>$_POST['quantity']);
            $con = mysqli_connect('localhost','root','','tblproject');
            $qr = "Insert into cart(user_name,item_name,quantity,buy,price,images) values ('$usr','$itn','$qu','no','$pr','$ima')";
            mysqli_query($con,$qr);
            echo "<script>
            alert('Item added');
            window.location.href='slide.php';
            </script>";
        }
        
    }

}

?>