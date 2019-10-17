# ecole
 Projet Web Architecture

INSTRUCTIONS: 
Pour faire fonctionner la databse, ouvrir l'invite de commande C:...\ecole
Entrez les commmandes suivantes : (il faut que php, composer soient déjà installées)
 Installer doctrine (passer si déjà fait):
           composer require symfony/orm-pack
           composer require --dev symfony/maker-bundle
   
 Une fois cela fait, créer la databse:
          php bin/console doctrine:database:create
 
 Ensuite migrer les entities:
          php bin/console make:migration
          php bin/console doctrine:migrations:migrate
 
 Et enfin load les fixtures:
         php bin/console doctrine:fixtures:load
