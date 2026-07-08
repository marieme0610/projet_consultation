
<?php


    // Créer une consultation
    creerConsultation($idPatient,$idMedecin);


    // Enregistrer les symptômes
    enregistrerSymptomes($idConsultation,$symptomes);


    // Estimer le prix
    estimerPrix($idMedecin);


    // Modifier le statut
    changerStatut($idConsultation,$statut);


    // Trouver consultation
    trouverConsultation($idConsultation);


    // Générer le lien vidéo
    genererLienVideo($idConsultation);


    // Terminer consultation
    terminerConsultation($idConsultation);


    // Fixer le prix final
    fixerPrix($idConsultation,$montant);


?>