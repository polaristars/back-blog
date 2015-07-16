<?php
/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @category  Ah
 * @package   AppModel
 * @author    Original Marie <username@example.com>
 * @copyright 2015 Copyright (c) Cake Software Foundation, In
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     CakePHP(tm) v 0.2.9
 */
/**
 * Class connextion
 * extends de Adm
 * @category   Vue
 * @package    Affichage
 * @author     Original Marie <author@example.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link       http://pear.php.net/package/PackageName
**/
class PostsController extends AppController
{
       public $helpers = array('Html', 'Form');
       public $components = array('Paginator');
       public $paginate = array(
        'limit' => 25);
       /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @return bool la connection
    **/
    function index()
    {
        $this->Paginator->settings = $this->paginate;
        $yolo = $this->Paginator->paginate('Post');//on definis la variable
        $this->set('posts', $yolo);//on set la pagination
    }
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @param null $id comment
    * @return bool $id la connection
    **/
    function view($id = null)
    {
        if (!$id) {
             $this->Session->setFlash('Qui êtes vous brigand ?!');//si tu as pas de id, c'est nope
        }
        $post = $this->Post->findById($id);//obtenir les données à partir de plusieurs types de stockage par id
        if (!$post) {
             $this->Session->setFlash('Post non valide.');//si pas post, c'est nope aussi
        }
        $this->set('post', $post); // Hop gogo on set !
    }
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @return bool la connection
    **/
    function add()
    {
        if ($this->request->is('post')) {//Est-ce que des données de formulaires ont été postées ?
            $this->request->data['Post']['user_id'] = $this->Auth->user('id');
            if ($this->Post->save($this->request->data)) { //Si les données du formulaire peuvent être validées et sauvegardées
                $this->Session->setFlash('Votre post a été sauvegardé.');//
                $this->redirect(array('action' => 'index'));// redirection vers la page index
            }
        }
    }
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @param null $id comment
    * @return bool la connection
    **/
    function edit($id = null)
    {
        if (!$id) {
             $this->Session->setFlash('Merci de vous connecter.');//si pas d'id c'est nope
        }
        $post = $this->Post->findById($id);//obtenir les données à partir de plusieurs types de stockage par id
        if (!$post) {//si ya pas post
             $this->Session->setFlash('Veuillez écrire quelque chose.');//si pas post c'est nope aussi
        }
        if ($this->request->is(array('post', 'put'))) {//si la requete est un tableau de post a inséré
            if ($this->Post->save($this->request->data)) { //Si les données du formulaire peuvent être validées et sauvegardées
                $this->Session->setFlash('Ajout confirmé !');
                return $this->redirect(array('action' => 'index'));//redirection page index
            } else {
                $this->Session->setFlash('Une erreur est survenue ...');
            }
        }
    }
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @param bool $id comment
    * @return bool la connection
    **/
    function delete($id)
    {
        if ($this->request->is('get')) {//Est-ce que des données de formulaires ont été getée ?
            $this->Session->setFlash("AAAAAAAAAAAAAH non !");
        }
        if ($this->Post->delete($id)) {
            $this->Session->setFlash("Le billet à été correctement supprimé.");
        } else {
            $this->Session->setFlash("Le billet n'a malheureusement pas put être supprimé.");
        }
        return $this->redirect(array('action' => 'index')); // redirection vers la page index
    }
}
