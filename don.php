<?php
    require_once "./templates/header.php";
?>
<link rel="stylesheet" href="./assets/css/style.css">

<main>
    <h1 class="display-1 text-center">Désir de Sérénité</h1>
    <h2 class="display-2 text-white text-center">Appel à cotisations</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="POST" role="form">
                    <div class="form-row col-sm-12 col-md-9 col-lg-6 col-xl-6">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label text-white">Courriel</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com">
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Civilité</option>
                            <option value="1">Madame</option>
                            <option value="2">Monsieur</option>
                            <option value="3">Non-Binaire</option>
                        </select>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label text-white">Prénom </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prénom">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label text-white">Nom</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="NOM">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label text-white">Adresse </label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="numéro rue">
                        </div>
                    </div>
                    <div class="form-row col-md-6">
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label text-white">Montant en euros </label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="XX">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label text-white">Numéro carte </label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="XXXX-XXXX-XXXX-XXXX">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label text-white">Expire à fin </label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="MM/AA">
                        </div>
                        <div class="col">
                            <label for="exampleFormControlInput1" class="form-label text-white">CVC </label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="123"><br>
                        </div>
                    </div>
                    <div id="button">
                        <button type="submit" class="btn btn-primary btn-lg" value="submit">Validez</button>
                    </div>
                </form>
            </div>
        </div>
    </div>       
</main>

<footer>

<?php
    require_once "./templates/footer.php";
?>
</footer>
