

<?php 
function index($sujet,$ANS,$accueil,$accueil1,$Contents,$TIBA,$logo,$dsp) 
{
echo '<div class="item itemsml">'.$sujet.'</div>';echo '<div class="item itemsmr">'.$ANS.'</div>';
echo '<div class="item itemct">'.$accueil.'</div>';echo '<div class="item itemctl">'.$accueil1.'</div>';

echo '<div class="item itemcl">'.$Contents.'</div>';
echo '<div class="item itemcr">';HTML::Image(URL."public/images/accueil.jpg", $width = 400, $height = 440, $border = -1, $title = -1, $map = -1, $name = -1, $class = 'image',$id='image');echo '</div>';
echo '<div class="item itemcfa">Nous n’avons pas la prétention d’être exhaustifs, une mise à jour régulière sera indispensable </div>';
echo '<div class="item itemcfb">et nous comptons sur vous, pour nous transmettre vos suggestions.</div>';
echo '<div class="item itemcfc">'.$TIBA.'</div>';
echo '<div class="item itemsb">';HTML::Image(URL."public/images/".$logo, $width = 400, $height = 440, $border = -1, $title = -1, $map = -1, $name = -1, $class = 'image',$id='image');echo '</div>';
echo '<div class="item itemfsb">'.$dsp.'</div>';
}

$pageContents = <<< EOPAGE
Concrètement l’Agence Nationale du Sang est devenu un acteur  incontournable </br>de la santé publique, elle s’est efforcée de renforcer le lien entre la générosité </br> des donneurs et les besoins des malades.
EOPAGE;
	
index(sujet,'ANS','accueil','***********',$pageContents,'Dr R.TIBA',logo,dsp);

?>

