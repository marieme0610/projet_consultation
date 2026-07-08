
<?php


    // Chercher médecin disponible
    chercherMedecinDisponible();


    // Récupérer informations médecin
    getMedecin($idMedecin);


    // Modifier disponibilité
    changerDisponibilite($idMedecin,$statut);


    // Recevoir une demande
    recevoirDemande($idMedecin,$idConsultation);


    // Récupérer demandes
    getDemandes($idMedecin);


    // Calculer revenu médecin
    calculerRevenu($idMedecin);




?>