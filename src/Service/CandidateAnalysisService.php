<?php

namespace App\Service;

use App\Entity\Job;

class CandidateAnalysisService
{
    /**
     * Extrait les données du CV d'un candidat.
     * 
     * @param string $cvContent Contenu brut du CV (texte, JSON, etc.)
     * @return array
     */
    public function extractDataFromCv(string $cvContent): array
    {
        // Simulez l'extraction ici (par exemple, analyse de texte, NLP)
        // Retourner un tableau structuré avec les compétences et années d'expérience
        return [
            'competences' => ['PHP', 'Symfony', 'MySQL'], // Exemple
            'anneesExperience' => 5, // Exemple
        ];
    }

    /**
     * Calcule le score de correspondance entre un CV et une offre.
     * 
     * @param array $cvData Données extraites du CV.
     * @param Job $job L'offre à comparer.
     * @return float Score de correspondance (en pourcentage).
     */
    public function calculateCandidateScore(array $cvData, Job $job): float
    {
        $score = 0;

        // Récupération des compétences requises
        $competencesRequises = $job->getCompetencesRequises();
        if ($competencesRequises === null) {
            $competencesRequises = [];  // Remplacez par un tableau vide si null
        }

        // Récupération des compétences du candidat
        $competencesCandidat = $cvData['competences'] ?? [];
        $matchingCompetences = array_intersect($competencesRequises, $competencesCandidat);

        // Calcul basé sur les compétences
        if (!empty($competencesRequises)) {
            $score += (count($matchingCompetences) / count($competencesRequises)) * 70; // 70% du score
        }

        // Calcul basé sur les années d'expérience
        $experienceRequise = $job->getAnneesExperienceRequise();
        $experienceCandidat = $cvData['anneesExperience'] ?? 0;

        if ($experienceRequise !== null) {
            $experienceScore = min($experienceCandidat / $experienceRequise, 1) * 30; // 30% du score
            $score += $experienceScore;
        }

        return round($score, 2); // Score en pourcentage, arrondi à 2 décimales
    }
}
