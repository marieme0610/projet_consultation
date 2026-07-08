
<?php


    // Afficher le formulaire de demande
    afficherFormulaireConsultation();


    // Envoyer les symptômes
    demanderConsultation($symptomes);


    // Rechercher un médecin et calculer le prix
    preparerDemandeConsultation();


    // Valider la demande
    confirmerDemande($idConsultation);


    // Consulter l'historique
    consulterHistorique($idPatient);


    // Noter un médecin
    noterMedecin($idMedecin, $note, $commentaire);


    // Effectuer le paiement
    payerConsultation($idConsultation);

?>