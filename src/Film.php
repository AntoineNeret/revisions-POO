<?php
class Film {
    //Attributs
    private string $titre;
    private string $realisateur;
    private DateTime $dateSortie;

    //Assciation avec Acteur
    private array $acteurs = [];

    //Méthodes
    //Constructeur permettant de créer des instances d'une classe
    //Instanciation
    public function __construct(string $titre, string $realisateur, DateTime $dateSortie){
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;
    }

    // Accesseurs

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getRealisateur(): string
    {
        return $this->realisateur;
    }

    public function getDateSortie(): DateTime
    {
        return $this->dateSortie;
    }

    //Mutateurs

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function setRealisateur(string $realisateur): void
    {
        $this->realisateur = $realisateur;
    }

    public function setDateSortie(DateTime $dateSortie): void
    {
        $this->dateSortie = $dateSortie;
    }

    public function getAnciennete(): int {
        $dateCourante = new DateTime();
        $intervalle = $dateCourante->diff($this->getDateSortie());
        return $intervalle->y;
    }

    public function addActeur(Acteur $acteur) : void{
        $this->acteurs[] = $acteur;
    }

    /**
     * @return Acteur[]
     */
    public function getActeurs() : array{
        return $this->acteurs;
    }

}