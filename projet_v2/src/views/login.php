<div class="container-fluid">
        <div class="card text-center">
            <div class="card-header">
            <h1>Se connecter</h1>
            </div>
            <div class="mt-2 offset-md-4 col-md-4 rounded" id="error"><span><?= $error ?></span></div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <form method="POST" action="">
                    <div class="form-group">
                        <div class="form-group offset-md-3 col-md-6">
                        <label for="inputPseudo">Pseudo</label>
                        <input type="text" class="form-control" id="inputPseudo" name="inputPseudo">
                        </div>
                    <div class="form-group">
                        <div class="form-group offset-md-3 col-md-6">
                            <label for="inputMdp">Mot de passe</label>
                            <input type="password" class="form-control" id="inputMdp" name="inputMdp">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Valider</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </form>
                </blockquote>
            </div>
        </div>

          
      </div> <!-- fin container -->