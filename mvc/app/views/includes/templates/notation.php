  <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Attribuer une note</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color: red">&times;</span>
        </button>
  </div>
      <div class="modal-body">
        <ul class="nav nav-tabs md-tabs" id="myTabEx" role="tablist">
  <li style="width:50%" class="nav-item">
    <a class="nav-link active show" id="home-tab-ex" data-toggle="tab" href="#home-ex" role="tab" aria-controls="home-ex"
      aria-selected="true">Au fichier</a>
  </li>
  <li style="width:50%" class="nav-item">
    <a class="nav-link" id="profile-tab-ex" data-toggle="tab" href="#profile-ex" role="tab" aria-controls="profile-ex"
      aria-selected="false">Au site</a>
  </li>
</ul>
<div class="tab-content pt-5" id="myTabContentEx">
  <div  class="tab-pane fade active show" id="home-ex" role="tabpanel" aria-labelledby="home-tab-ex">
    <form>
      <p>Que pensez-vous de ce fichier?</p>
      <input type="hidden" name="fnote" value="" id="fnote"/>
      <div class="form-group">
        <textarea rows="4" class="form-control" name="commentairefichier">C'est un bon fichier</textarea>
      </div>
      <div class="form-group">
        <div class="rating rating2 text-center" style="font-size: 80px"><!--
      --><a href="#5" title="J'adore" id="fstar5">★</a><!--
     --><a href="#4" title="Très intéressant" id="fstar4">★</a><!--
      --><a href="#3" title="Pas mal" id="fstar3">★</a><!--
      --><a href="#2" title="Ennuyant" id="fstar2">★</a><!--
      --><a href="#1" title="Bêtise" id="fstar1">★</a>
      </div>
      </div>
      <div class="form-group text-center">
        <input type="submit" value="Noter" class="btn btn-success"/>
      </div>
    </form>
    
  </div>
  <div class="tab-pane fade" id="profile-ex" role="tabpanel" aria-labelledby="profile-tab-ex">
     <form>
      <p>Que pensez-vous de ce site?</p>
      <input type="hidden" name="snote" value="" id="snote"/>
      <div class="form-group">
        <textarea rows='4' class="form-control" name="commentairesite">J'adore ce site, grâce à lui je trouve des documents de qualité qui m'aident à bien bosser et surtout valider mon année!!</textarea>
      </div>
       <div class="form-group">
        <div class="rating rating2 text-center" style="font-size: 80px"><!--
      --><a href="#5" title="J'adore" id="sstar5">★</a><!--
     --><a href="#4" title="Très bon" id="sstar4">★</a><!--
      --><a href="#3" title="Pas mal" id="sstar3">★</a><!--
      --><a href="#2" title="Ennuyant" id="sstar2">★</a><!--
      --><a href="#1" title="Bêtise" id="sstar1">★</a>
      </div>
      </div>
      <div class="form-group text-center">
        <input type="submit" value="Noter" class="btn btn-success"/>
      </div>
    </form>
  </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ANNULER</button>
      </div>
    </div>
