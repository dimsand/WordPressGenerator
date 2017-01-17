<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Création WordPress</title>
  </head>
  <body>
    <main>
      <?php if(exec('php wp-cli.phar --info') == "Could not open input file: wp-cli.phar" && exec('wp --info') == "Could not open input file: wp-cli.phar"): ?>
        WP-CLI doit être installé.
        <button>Installer WP-CLI</button>
      <?php else: ?>
        <h1>Création d'un site WordPress</h1>
        <form class="" action="traitement.php" method="post">
          <fieldset>
            <legend>Base de données</legend>
            <label for="db_name">Nom de la BDD</label>
            <input type="text" name="db_name" id="db_name" value="wp"></br></br>
            <label for="db_user">Utilisateur</label>
            <input type="text" name="db_user" id="db_user" value="root"></br></br>
            <label for="db_pass">Mot de passe</label>
            <input type="password" name="db_pass" id="db_pass" value=""></br></br>
            <label for="db_host">Host</label>
            <input type="text" name="db_host" id="db_host" value="localhost"></br></br>
            <label for="db_prefix">Prefix</label>
            <input type="text" name="db_prefix" id="db_prefix" value="wp_"></br></br>
            <label for="db_create">Créer la table ? (Si elle n'existe pas déjà)</label>
            <input type="checkbox" name="db_create" id="db_create" value="1" checked="checked">
          </fieldset>
          <fieldset>
            <legend>Infos du site</legend>
            <label for="site_name">Titre du site</label>
            <input type="text" name="site_name" id="site_name" value=""></br></br>
            <label for="site_user">Utilisateur</label>
            <input type="text" name="site_user" id="site_user" value="admin"></br></br>
            <label for="site_pass">Mot de passe</label>
            <input type="password" name="site_pass" id="site_pass" value=""></br></br>
            <label for="site_email">Email utilisateur</label>
            <input type="email" name="site_email" id="site_email" value=""></br></br>
            <label for="site_skip_email">Ne pas notifier la création d'un site</label>
            <input type="checkbox" name="site_skip_email" id="site_skip_email" value="1" checked="checked"></br></br>
            <label for="site_url">URL du site</label>
            <input type="text" name="site_url" id="site_url" value=""></br></br>
            <label for="site_visibility">Search engine visibility</label>
            <input type="checkbox" name="site_visibility" id="site_visibility" value="0">
          </fieldset>
          <fieldset>
            <legend>Options supplémentaires</legend>
            <label for="site_path">Nom du dossier du site</label>
            <input type="text" name="site_path" id="site_path" value=""></br></br>
            <label for="edit_vhost">Modification du Vhost</label>
            <input type="checkbox" name="edit_vhost" id="edit_vhost" value="1" checked="checked"></br></br>
            <label for="redirect_url">Activer la redirection d'URL (pour les liens en http://192.168.33.10/sample-post/)</label>
            <input type="checkbox" name="redirect_url" id="redirect_url" value="1" checked="checked">
          </fieldset>
          <input type="submit" name="createWp" value="Créer">
        </form>
      <?php endif; ?>
    </main>
  </body>
</html>
