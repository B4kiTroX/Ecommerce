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
      $DonneesInjectees['TypeDeLaPage'] = 'Liste des véhicules';
 
      $this->load->view('templates/Entete');
      $this->load->view('Clients/vueToutLesArticles', $DonneesInjectees);
      $this->load->view('templates/PiedDePage');
   } // listerLesArticles

   public function voirUnArticle($noArticle = NULL) // valeur par défaut de noArticle = NULL
   {
      $DonneesInjectees['unArticle'] = $this->ListeArticle->retournerArticles($noArticle);
 
      if (empty($DonneesInjectees['unArticle']))
      {   // pas d'article correspondant au n°
         show_404();
      }
 
      $DonneesInjectees['TitreDeArticle'] = $DonneesInjectees['unArticle']['LIBELLE'];
      $DonneesInjectees['DescriptionDeArticle'] = $DonneesInjectees['unArticle']['DETAIL'];
      // ci-dessus, entrée ['cTitre'] de l'entrée ['unArticle'] de $DonneesInjectees
 
      $this->load->view('templates/Entete');
      $this->load->view('Clients/vueUnArticle', $DonneesInjectees);
      $this->load->view('templates/PiedDePage');
    } // voirUnArticle
}  // clients