<?php
    require_once "./templates/header.php";
?>
<link rel="stylesheet" href="./assets/css/style.css">
<Main>
    <h1 class="display-1 text-center">Désir de Sérénité</h1>
    <h2 class="display-2 text-center">Contactez-nous</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="get">
                    <div class="form-row col-sm-12 col-md-9 col-lg-6 col-xl-6">
                        <div class="col">
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label text-white">Nom</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prénom NOM">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlInput1" class="form-label text-white">Courriel</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com">
                            </div>
            
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label text-white">Votre message :</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-3">Envoyer</button>
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
    </div>
    <form action="" method="GET">
        
    </form>
</Main>
<?php
    require_once "./templates/footer.php";
?>