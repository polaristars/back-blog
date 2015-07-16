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
class CommentsController extends AppController
{
    public $helpers = array('Html', 'Form');
    public $components = array('Paginator');
    public $paginate = array(
        'limit' => 25);
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @param null $id comment
    * @return bool la connection
    **/
    function comments($id = null)
    {

        if (empty($id)) {//Quoi ?! pas d'id ?!
             $this->Session->setFlash('Qui êtes vous brigand ?!');//Oust !
        }

        $comment = $this->Comment->find('all', array('conditions' => array('Comment.post_id' => $id)));//obtenir les données à partir de plusieurs types de stockage
        if (empty($comment)) {//Ohw si ya pas de commentaires
             $this->Session->setFlash('Personne n\'est venu commentez.');//ca affiche ce petit message
        }
        if ($this->request->is('post')) {//si la requete est un post
            $this->request->data['Comment']['post_id'] = $this->Auth->user('id'); //Si les données du formulaire peuvent être validées et sauvegardées
            if ($this->Comment->save($this->request->data)) {//gogogo BDD !
                $this->Session->setFlash('Votre commentaire a été sauvegardé.');//message
                return $this->redirect(array('controller' => 'Posts', 'action' => 'index'));//redirection
            }
        }
        $this->set('comments', $comment);//et tu set !

    }
}