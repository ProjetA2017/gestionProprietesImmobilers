<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container">
    <span class="pull-right"><a href="?action=pageAccueil">Accueil</a> / Contact</span>
    <h2>Contactez nous</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row contact">
  <div class="col-lg-6 col-sm-6 ">
    <div class="enquiry">
      <h6><span class="glyphicon glyphicon-envelope"></span> Contacter l'annonceur</h6>
      <form role="form" method = "post">
                    <input name="action" value="envoyerMessage" type="hidden" />
                    <input name="identifiant" value="admin" type="hidden" />
                    <input type="text" class="form-control" name="nomcomplet" placeholder="Nom complet"/ required="required">
                    <input type="email" class="form-control" name="courriel" placeholder="Votre courriel" required="required"/>
                    <input type="text" class="form-control" name="tel" placeholder="Votre numéro de téléphone"/>
                    <textarea rows="6" class="form-control" name = "message" placeholder="Message"></textarea>
          <button type="submit" class="btn btn-primary" name="bEnvoyerMessageAdmin">Envoyer un message</button>
      </form><br />
     </div>
       <?php if (ISSET($_SESSION["messagesSucces"])) { ?>
             <div class="alert alert-success alert-dismissable">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                   <p class="panel-body"><?=$_SESSION["messagesSucces"]?></p>
             </div>
       <?php UNSET($_SESSION["messagesSucces"]); } ?>
  </div>
  <div class="col-lg-6 col-sm-6 ">
  <div class="well"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2793.648991743844!2d-73.58342241872558!3d45.55738617981516!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91eace22b9bcf%3A0x18799aed17aa23d9!2sColl%C3%A8ge+de+Rosemont!5e0!3m2!1sfr!2sca!4v1511913111211"></iframe></div>
  </div>
</div>
</div>
</div>

<?php include'footer.php';?>
