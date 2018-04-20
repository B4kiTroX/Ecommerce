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
      $DonneesInjectees['TitreDeLaPage'] = 'HamonAutomobile';
 
      $this->load->view('templates/Entete');
      $this->load->view('Clients/vue', $DonneesInjectees);
      $this->load->view('templates/PiedDePage');
   } // listerLesArticles
   public function voirUnArticle($noArticle = NULL) // valeur par défaut de noArticle = NULL
{
  $DonneesInjectees['unArticle'] = $this->ModeleArticle->retournerArticles($noArticle);
 
  if (empty($DonneesInjectees['unArticle']))
  {   // pas d'article correspondant au n°
      show_404();
  }
 
  $DonneesInjectees['TitreDeLaPage'] = $DonneesInjectees['unArticle']['LIBELLE'];
  // ci-dessus, entrée ['cTitre'] de l'entrée ['unArticle'] de $DonneesInjectees
 
  $this->load->view('templates/Entete');
  $this->load->view('Clients/vue', $DonneesInjectees);
  $this->load->view('templates/PiedDePage');
} // voirUnArticle
}  // clients