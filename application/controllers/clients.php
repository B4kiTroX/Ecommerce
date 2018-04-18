 <?php
 class clients extends CI_Controller
{
    public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->helper('assets'); // helper 'assets' ajouté a Application
      $this->load->library("pagination");
      $this->load->model('ListeArticle'); // chargement modèle, obligatoire
   } // __construct

   public function listerLesArticles() // lister tous les articles
   {
      $DonneesInjectees['lesArticles'] = $this->ListeArticle->retournerArticles();
      $DonneesInjectees['TitreDeLaPage'] = 'Tous les articles';
 
      $this->load->view('templates/Entete');
      $this->load->view('vue', $DonneesInjectees);
      $this->load->view('templates/PiedDePage');
   } // listerLesArticles
}  // clients