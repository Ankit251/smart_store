<?php

if(isset($_POST['subm'])) {
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $em = $_POST['eml'];
    $em2 = $_POST['eml2'];
    $pas = $_POST['pwd'];
    $pas2 = $_POST['pwd2'];
    

    
    $errorEmpty = false;
    $errorEmail = false;

    if(empty($fn) || empty($ln) || empty($em) || empty($em2) || empty($pas) || empty($pas2)) {
        echo "<span class='form-error'>Please fill all fields!!</span>";
        $errorEmpty = true;
    } 
    elseif(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        echo "<span class='form-error'>Please enter valid email id!</span>";
        $errorEmail = true;
    }
    else {
        $con = mysqli_connect('localhost','root','','tblproject');        
        $query = "insert into users (firstname,lastname,email,password) values ('$fn','$ln','$em','$pas')";
        $res = mysqli_query($con,$query);
        echo "<span class='form-success'>Signup Successfull</span>";
    }
}
else {
    echo "there was an error";
}
?>

<script>

//  $("#fn , #ln , #eml, #eml2 , #pwd,#pwd2 ").removeClass("input-error");
//     var errorEmpty = "<?php echo $errorEmpty; ?>";;
//     var errorEmail = "<?php echo $errorEmail; ?>";

    if(errorEmpty == true){
        $("#fn , #ln , #eml , #pwd").addClass("input-error");
    }

    if(errorEmail == true){
        $("#eml").addClass("input-error");
    }

    if(errorEmpty == false && errorEmail == false){
        $("#fn , #ln , #eml , #pwd").val("");
    }

</script>

