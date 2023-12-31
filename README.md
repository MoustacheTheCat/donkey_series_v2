# donkey_series_v2

création du projet 

        symfony new donkey_serie_v2 --webapp

lien avec le repo gitHub

        echo "# donkey_series_v2" >> README.md
        git init
        git add README.md
        git commit -m "first commit"
        git branch -M main
        git remote add origin git@github.com:MoustacheTheCat/donkey_series_v2.git
        git push -u origin main

créeation de la DB

        symfony console d:d:c

--------------------------------------installation des dependance---------------------


The VarDumper Component

            composer require --dev symfony/var-dumper

Faker

            composer require fakerphp/faker
        
Doctrine Fixtures bundle

            composer req orm-fixtures --dev

Twig Components


            composer require symfony/ux-twig-component

voir les  Twig Component


            php bin/console debug:twig-component

Live Components


            composer require symfony/ux-live-component


            // config/routes/ux_live_component.yaml

            live_component:
                resource: '@LiveComponentBundle/config/routes.php'
            -     prefix: /_components
            +     prefix: /{_locale}/_components

Sass For Symfony!

            composer require symfonycasts/sass-bundle

            {# templates/base.html.twig #}
            {% block stylesheets %}
                <link rel="stylesheet" href="{{ asset('styles/app.scss') }}">
            {% endblock %}

Using Bootstrap Sass

            composer require twbs/bootstrap

@import '../../vendor/twbs/bootstrap/scss/bootstrap'; in style.scss


Then run the command:

            php bin/console sass:build --watch

            php bin/console sass:build

            php bin/console asset-map:compile

Cocur/slugify

            composer require cocur/slugify

lancer le serveur 

        symfony server:start -d