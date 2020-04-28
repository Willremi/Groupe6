<div class="container-fluid">
        <h1>Formulaire de contact</h1>
        <form action="<?php echo $router->generate('mail') ?>" method="POST" class="offset-md-1 col-md-10">
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="email">E-Mail</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="emailPrepend">@</span>
                  </div>
                  <input type="text" class="form-control" id="email" aria-describedby="emailPrepend" name="email" required>
                  
                </div>
              </div>
            </div>
            <div class="form-group">
                <label for="sujet">Sujet</label>
                <input type="text" class="form-control" id="sujet" name="sujet">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea type="text" class="form-control" id="message" name="message"></textarea>
                
              </div>
            <button class="btn btn-primary" type="submit">Envoyer</button>
          </form>


          
      </div> <!-- fin container -->