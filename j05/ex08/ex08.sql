SELECT nom, prenom, DATE_FORMAT(date_naissance, '%Y-%m-%d') AS 'date de naissance' 
  FROM fiche_personne 
  WHERE EXTRACT(YEAR FROM date_naissance) = 1989 
  ORDER BY nom ASC;
