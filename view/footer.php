


<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="?action=pageAbout">À propos</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="?action=pageAgents">Agents</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="?action=pageBlog">Blogue</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="?action=pageContact">Contact</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Soyez notifié(es) des dernières nouvelles et des dernières annonces</p>
                    <form class="form-inline" role="form">
                            <input type="text" placeholder="Entrez votre adresse courrielle" class="form-control">
                                <button class="btn btn-success" type="button">Me notifier!</button></form>
            </div>

            <div class="col-lg-3 col-sm-3">
                    <h4>Suivez-nous</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>

             <div class="col-lg-3 col-sm-3">
                    <h4>Contactez-nous</h4>
                    <!--<p><b>Bootstrap Realestate Inc.</b><br>-->
<span class="glyphicon glyphicon-map-marker"></span> 6400 16e Avenue, Montréal, QC H1X 2S9 Canada <br>
<span class="glyphicon glyphicon-envelope"></span> comptedetudiant@gmail.com<br>
<span class="glyphicon glyphicon-earphone"></span> (123) 456-7890</p>
            </div>
        </div>
<p class="copyright">Projet de session 2017 Dris Amarray & Gilberto Ramos & Yang Chen</p>


</div></div>

<!-- Modal -->
<div id="loginpop" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="row">
        <div class="col-sm-6 login">
        <h4>Connexion</h4>
          <form class="" role="form" action="" method = "post">
            <input name="action" value="connection" type="hidden" />
            <div class="form-group">
              <input name = "identifiant" required="required" class="form-control" id="exampleInputEmail2" placeholder="Entrer votre identifiant ou courriel">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="exampleInputPassword2" name = "motdpass" placeholder="Mot de passe" required="required">
            </div>
            <!--<div class="checkbox">
              <label>
                <input type="checkbox"> Se souvenir de moi
              </label>
            </div> TODO : remplacer par mot de passe oublié-->
            <button type="submit" name = "bConnexion" class="btn btn-success">Se connecter</button>
      </form>
        </div>
        <div class="col-sm-6">
          <h4>Nouveau membre?</h4>
          <p>Rejoindre notre plateforme pour rester à l'affût des nouveautés</p>
          <button type="submit" class="btn btn-info"  onclick="window.location.href='?action=formulaireCompte'">Créer un compte</button>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /.modal -->

</body>
</html>
