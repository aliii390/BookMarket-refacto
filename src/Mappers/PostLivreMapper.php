<?php
 

 class PostLivreMapper {

    public static function MapToObject(array $livreData) :PostLivre{
        
      return new PostLivre(
        
         $livreData['id_user_pro'],
         $livreData['url_livre'],
         $livreData['titre'],
         $livreData['img_path'],
         $livreData['description'],
         $livreData['prix'],
         $livreData['etat_livre'],
         $livreData['auteur']

      );
   
    }
 }