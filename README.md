# Introduction

Ce projet est le fruit de la vidéo : [[Projet Vuejs] Créer une interface de recherche dynamique avec Vue et Php/mySql](https://www.youtube.com/watch?v=VBLGKDl8crI).

# Intérets du projet

L'intéret du projet est de mettre en pratique VueJS autour d'un site de recherche de vins dans une base de données MySQL.

# Problèmes rencontrés

Le premier problème que j'ai rencontré était lors de la transformation des données de la base de tableau en json. A cause d'un problème d'encodage, les données ne se convertissaient pas correctement et retourner false. Après un paramètre ajouté à la connexion de la base de données, le problème est rentré dans l'ordre.

![Fix](/screenshots/fixe_database.png)

Mes différentes tentatives avaient laissées une trace dans le code qui faisait que les datas reçues n'étaient pas sous forme d'un tableau mais d'un objet, ce qui, bien entendu, provoquait des problèmes pour la suite lorsque j'avais besoin d'agir sur le tableau des vins.

# Ce que m'a apporté ce projet

Ce fut une bonne mise en pratique de ce que j'avais appris dans une vidéo ultérieure. Ca m'a aussi permis de voir comment interagir VueJs avec une base de donnée MySQL.

Ce projet utilise aussi des transitions en plus des transitions faites en css.

De plus, j'ai pu voir comment gérer l'affichage d'un contenu filtré via un champ de recherche, la valeur d'un menu select ou encore d'un bouton radio.

Ce projet m'a aussi permis d'utiliser des affichages conditionnels, qui est tout de même l'une des forces de vueJS.

Et enfin, j'ai pu découvrir Axios qui est bien plus léger que Jquery.

# Améliorations apportées au projet

Je n'ai pas apporté de réelles améliorations au projet. De simple amélioration de code par ci par là, rien de bien flagrant.

# Screenshots du résultat

![Home](/screenshots/home.png)
![Home](/screenshots/home_search_name.png)
![Home](/screenshots/home_search_country.png)
![Home](/screenshots/home_search_grapes.png)