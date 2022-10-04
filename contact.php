
 <?php $title = "contact"; ?>
<?php include 'header.php';
?>
<h1>PAGE DE CONTACT </h1>


<form class="infos">

    <div class="row">
        <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="First name">
        </div>
        
        <div class="col-sm-4">
        <input type="text" class="form-control" placeholder="Last name">
        </div>
        <select class="form-select">
            <option selected>Civilité</option>
            <option value="1">Madame</option>
            <option value="2">Mademoiselle</option>
            <option value="3">Monsieur</option>
            <option value="4">Autre</option>
        </select>
    </div>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-4">
        <input type="email" class="form-control" placeholder="Email">
        </div>
        
        <div class="col-sm-4">
        <input type="number" class="form-control" placeholder="Phone">
        </div>
    </div>
    <br>

    <p>Raison du contact:</p>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Proposition emploi
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Proposition projet
  </label>
</div>


<div class="form-group col-sm-6">
  <label for="exampleFormControlTextarea2">Votre message :</label>
  <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
</div>




    

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">MAMA</button>
</form>
<?php include 'footer.php';
?>