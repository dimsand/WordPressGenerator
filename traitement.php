<?php
function debug($debug){
  echo "<pre>";
  var_dump($debug);
  echo "</pre>";
}

$site_cree = false;

// GESTION DU FORMULAIRE EN ENTIER
if(!empty($_POST['createWp'])){
  //debug($_POST);

  $site_path = "";
  if(!empty($_POST['site_path'])){
    $site_path = 'generated_sites/'.$_POST['site_path'];
    exec('mkdir '.$site_path);
    chdir($site_path);
  }else{
    $site_path = 'generated_sites/WPgenere-'.date('YmdHis');
    exec('mkdir '.$site_path);
    chdir($site_path);
  }
  exec('wp core download');
  exec('wp core config --dbname='.$_POST['db_name'].' --dbuser='.$_POST['db_user'].' --dbpass='.$_POST['db_pass'].' --dbprefix='.$_POST['db_prefix'].' --locale=en_EN');
  if(isset($_POST['db_create'])){
    exec('wp db create');
  }
  exec('wp core install --url='.$_POST['site_url'].' --title="'.$_POST['site_name'].'" --admin_user='.$_POST['site_user'].' --admin_password='.$_POST['site_pass'].' --admin_email='.$_POST['site_email'].' '.((isset($_POST['site_skip_email']))?'--skip-email':''));

  // Si on a coché le fait de vouloir modifier le vhost
  // On ouvre le 000-default.conf et on le modifie avec le nouveau chemin
  if(isset($_POST['edit_vhost'])){
    // On vérifie si le fichier peut être ouvert, sinon on met un chmod 777
    $file = fopen("/etc/apache2/sites-available/000-default.conf", 'w' );
    if(!$file){
      // TODO: Changer le 777 !
      exec("sudo chmod 777 /etc/apache2/sites-available/000-default.conf");
    }
    $remplacement = '
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/html/TP1/'.$site_path.'
    <Directory /var/www/html/TP1/'.$site_path.'>
      Options Indexes FollowSymlinks
      AllowOverride All
      Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
    ';
    file_put_contents("/etc/apache2/sites-available/000-default.conf", $remplacement);
    //$vhost = file_get_contents("/etc/apache2/sites-available/000-default.conf");
    exec("sudo service apache2 reload");
  }
  /*if(isset($_POST['redirect_url'])){
    exec("wp rewrite structure '/%postname%/'");
    exec('sudo a2enmod rewrite');
    exec("sudo service apache2 reload");
  }*/

  // Suppression des anciens plugins de base
  if(isset($_POST['rmv_old_plugins'])){
    exec("wp plugin uninstall akismet");  // Suppression du plugin 'akismet'
    exec("wp plugin uninstall hello");  // Suppression du plugin 'hello-dolly'
  }

  // Installation des plugins sélectionnés
  if(!empty($_POST['plugins_to_install'])){
    $plugins_to_install = explode(',',$_POST['plugins_to_install']);
    foreach($plugins_to_install as $p){
      exec('wp plugin install '.$p.' --activate');
    }
  }

  $site_cree = true;

  }

// GESTION DU GETJSON EN AJAX POUR LA RECHERCHE DES PLUGINS
else if(isset($_GET['search']) && $_GET['search'] == 'plugins'){
    chdir('./generated_sites/wp-admin');  // Je me mets dans un dossier Wordpress
    $plugins_search = exec('wp plugin search '.$_GET['label'].' --per-page=20 --format=json');
    echo $plugins_search;
}

?>

<?php if(!empty($_POST['createWp'])): ?>
  <?php if($site_cree): ?>
    <div>Votre site a bien été créé.</div>
    <!--<div>Pensez à redemarrer Apache2</div>-->
    <div>
      <button type="button" name="site_front"><a target="_blank" href="/">Voir mon site</a></button>
      <button type="button" name="site_back"><a target="_blank" href="/wp-admin/">Aller côté administration</a></button>
    </div>
  <?php else: ?>
    <div>Votre site n'a pas pu être créé !</div>
    <div><a href="./index.php">Revenir</a></div>
  <?php endif; ?>
<?php endif; ?>
