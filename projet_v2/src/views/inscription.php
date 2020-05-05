<div class="container-fluid">
        <div class="card text-center">
            <div class="card-header">
            <h1>Créer un compte</h1>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <form action="<?= $router->generate("addUser") ?>" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputName">Nom</label>
                        <input type="text" class="form-control" id="inputName" name="inputName">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputFirstname">Prénom</label>
                        <input type="text" class="form-control" id="inputFirstname" name="inputFirstname">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPseudo">Pseudo</label>
                        <input type="text" class="form-control" id="inputPseudo" name="inputPseudo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group offset-md-3 col-md-6">
                        <label for="inputMdp">Mot de passe</label>
                        <input type="password" class="form-control" id="inputMdp" name="inputMdp">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputNumAdress">N° de la rue</label>
                            <input type="text" class="form-control" id="inputNumAdress" name="inputNumAdress">
                        </div>
                        <div class="form-group col-md-10">
                            <label for="inputAdress">Adresse</label>
                            <input type="text" class="form-control" id="inputAdress" name="inputAdress">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAdress2">Complément d'adresse</label>
                        <input type="text" class="form-control" id="inputAdress2" name="inputAdress2">
                    </div>
                    <div class="form-row">
                        <div class="form-group offset-md-2 col-md-2">
                            <label for="inputCp">Code postal</label>
                            <input type="text" class="form-control" id="inputCp" name="inputCp">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Ville</label>
                            <input type="text" class="form-control" id="inputCity" name="inputCity">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Valider</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </form>
                </blockquote>
            </div>
        </div>

          
</div> <!-- fin container -->