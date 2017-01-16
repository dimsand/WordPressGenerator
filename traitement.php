<?php
function debug($debug){
  echo "<pre>";
  var_dump($debug);
  echo "</pre>";
}

$site_cree = false;

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
    DocumentRoot /var/www/html/'.$site_path.'
    <Directory /var/www/html/'.$site_path.'>
      Options Indexes FollowSymlinks
      AllowOverride All
      Require all granted
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
    ';
    file_put_contents("/etc/apache2/sites-available/000-default.conf", $remplacement);
    $vhost = file_get_contents("/etc/apache2/sites-available/000-default.conf");
  }
  $site_cree = true;

}
?>

<?php if($site_cree): ?>
  <div>Votre site a bien été créé.</div>
  <div>
    <button type="button" name="site_front"><a target="_blank" href="./generated_sites/<?=$site_path?>">Voir mon site</a></button>
    <button type="button" name="site_back"><a target="_blank" href="./generated_sites/<?=$site_path?>/wp-admin/">Aller côté administration</a></button>
  </div>
<?php else: ?>
  <div>Votre site n'a pas pu être créé !</div>
  <div><a href="./index.php">Revenir</a></div>
<?php endif; ?>
