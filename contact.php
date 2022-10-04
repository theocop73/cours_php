
 <?php $title = "contact"; ?>
<?php include 'header.php';
?>

<?php include 'check_form.php'?>

<h1>PAGE DE CONTACT </h1>

<form class="infos"  method="post">

    <div class="row">
        <div class="col-sm-4">
        <span class="error"><?php echo "*".$firstnameErr;?></span>
        <input type="text" name="firstname" class="form-control" placeholder="First name">
        </div>
        
        <div class="col-sm-4">
        <span class="error"><?php echo "*".$nameErr;?></span>
        <input type="text" name="lastname" class="form-control" placeholder="Last name">
      
        </div>
        <span class="error"><?php echo $genderErr;?></span><br>
        <select class="form-select" name="civility">
            <option selected>Civilité</option>
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
        <input type="text" name="email" class="form-control" placeholder="Email">
        </div>
        
        <div class="col-sm-4">
            <br>
        <input type="number" name="number" class="form-control" placeholder="Phone">
        </div>
    </div>
    <br>

    <p>Raison du contact:</p>
    <div class="form-check">

<input type="radio" name="MyRadio" value="emploi" checked>Pour un emploi<br> 
    <input type="radio" name="MyRadio" value="projet">Pour un projet
  
</div>


<div class="form-group col-sm-6">
<span class="error"><?php echo "*".$messErr;?></span>
  <label for="exampleFormControlTextarea2">Votre message :</label>
  <textarea class="form-control rounded-0" name="message" id="exampleFormControlTextarea2" rows="3"></textarea>
</div>






    

    <!-- Submit button -->
    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">MAMA</button>


    <?php

 
if(isset($_POST['submit'])){
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
?>

<?php include 'footer.php';
?>