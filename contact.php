
 <?php $title = "contact"; ?>
<?php include 'header.php';
?>

<?php include 'check_form.php'?>

<h1>PAGE DE CONTACT </h1>

<?php 
include 'session_data.php';


var_dump($_SESSION);
?> 




<form class="infos" post=""  method="post" enctype="multipart/form-data">

    <div class="row">
        <div class="col-sm-4">
        <span class="error"><?php echo "*".$firstnameErr;?></span>
        <input type="text" name="firstname" class="form-control" value="<?php echo fieldvalue("firstname") ?>">
        </div>
        
        <div class="col-sm-4">
        <span class="error"><?php echo "*".$nameErr;?></span>
        <input type="text" name="lastname" class="form-control" placeholder="Last name" value="<?php echo fieldvalue('lastname') ?>">
      
        </div>
        <span class="error"><?php echo $genderErr;?></span>
        Civilité :<br>
        <select class="form-select" name="civility" value="<?php echo fieldvalue("civility") ?>">
            <option value="<?php echo fieldvalue("civility") ?>" selected disabled hidden>
           <?php if(fieldvalue("civility") != null){
            echo fieldvalue("civility");
           }else{
                echo "Civilité";
           }
           ?>
            </option>
            <option value="Madame">Madame</option>
            <option value="Mademoiselle">Mademoiselle</option>
            <option value="Monsieur">Monsieur</option>
            <option value="Autre">Autre</option>
        </select>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-4">
        <span class="error"><?php echo "*".$emailErr;?></span>
        <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo fieldvalue('email') ?>">
        </div>
        
        <div class="col-sm-4">
            <br>
        <input type="number" name="number" class="form-control" placeholder="Phone" value="<?php echo fieldvalue('number') ?>">
        </div>
    </div>
    <br>

    <p>Raison du contact:</p>
    <div class="form-check">

    <input type="radio" name="MyRadio" value="emploi"
    <?php if(fieldvalue("MyRadio") == "emploi") {
        echo "checked";
    }else{
        echo "";
    }

    ?>>Pour un emploi<br> 
        <input type="radio" name="MyRadio" value="projet"  <?php if(fieldvalue("MyRadio") == "projet") {
        echo "checked";
    }else{
        echo "";
    }

    ?>>Pour un projet
    
    </div>


    <div class="form-group col-sm-6">
    <span class="error"><?php echo "*".$messErr;?></span>
    <label for="exampleFormControlTextarea2">Votre message :</label>
    <textarea class="form-control rounded-0" name="message" id="exampleFormControlTextarea2" rows="3" ><?php echo fieldvalue('message') ?></textarea>
    </div>



    Select file to upload:
  <input type="file" name="fileToUpload" id="fileToUpload" />
 


    

    <!-- Submit button -->
    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">MAMA</button>

</form>
   
<?php include 'upload_file.php'; ?>

    <?php

 
if(isset($_POST['submit']) and $error_count < 1){
    $val;
    $file=fopen("savedtest.txt", "a");
    foreach($_POST as $key => $value){
        
        if( $key != "submit"){
          
            fwrite($file, $key);
            fwrite($file, ":");
            fwrite($file, $value);
            fwrite($file, PHP_EOL);
            
        }

    
    
}
fclose($file);
}
elseif($error_count > 0){
    $file=fopen("savedtest.txt", "a");
    fwrite($file, "too much mistakes, number of mistakes  :".$error_count);
    fwrite($file, PHP_EOL);
    fclose($file);
    
}
?>

<?php include 'footer.php';
?>