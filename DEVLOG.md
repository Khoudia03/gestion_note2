### Les Tables
J'ai identifie 7 tables qui sont:
  - annescolaire
  - etablissement
  - classe_etablissement
  - responsable
  - eleve
  - inscription
  - transfert

### Pourquoi ces tables ?
  Ces tables nous permettrons d'avoir la liste des eleves et leurs information correspondante comme L'etablissement et la classe ou il est affecter son responsable l'etat de son affectation de l'annee scolaire courante
  
### Les concepts appliqu dans les entites
  J'ai mis la visibilite des attributs a public et ca me permet de pourvoir faire des operation de lecture ou de modifcation de sont quand j'utilise l'objet.

### Erreur de typage sur l'attribut nom

- l'une se trouvait dans l'entite Etablissement 
le type de nom etait  en int alors que  dans la base de donnee le type etait du string 
- l'autre se trouvait dans l'entite Utilisateur 
nomUtilisateur est en camel case  et la base de donnee le convertit en lowerCase 
