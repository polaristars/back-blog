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
App::uses('AppController', 'Controller');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

/**
 * Class connextion
 * extends de Adm
 * @category   Vue
 * @package    Affichage
 * @author     Original Marie <author@example.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link       http://pear.php.net/package/PackageName
**/
class UsersController extends AppController
{
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @return bool la connection
    **/
    function inscription()//inscription
    {
        if ($this->request->is('post')) {//Est-ce que des données de formulaires ont été postées ?
            $donne = $this->request->data; //on definis la variable
            $donne['User']['id'] = null;
            if (!empty($donne['User']['password'])) {
                //$donne['User']['password'] = Security::hash($donne['User']['password'], null, true);
            }
            if ($this->User->save($donne, true, array('username', 'name', 'lastname', 'birthdate', 'email', 'password'))) {
                $this->Session->setFlash('L\'inscription c\'est bien déroulée');//petit message
                return $this->redirect(array('action' => 'login'));//redirection
            } else {
                $this->Session->setFlash('Une erreur est survenue ...');
            }
        }
    }
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @return bool la connection
    **/
    function login()//connection
    {
        if ($this->request->is('post')) {//Est-ce que des données de formulaires ont été postées ?
            if ($this->Auth->login()) {//si tout est ok, login
                return $this->redirect(array('controller' => 'Posts', 'action' => 'index'));//redirection..encore
            } else {
                $this->Session->setFlash('Login ou mot de passe faux...');
            }
        }
    }
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @param null $id la connection
    * @return yen a pas
    **/
    function view($id = null)
    {
        $this->User->id = $id;
        if (!$this->User->exists()) {//si tu existe pas, bah c'est nope
            $this->Session->setFlash('Erreur !!');
        }
        $this->set('user', $this->User->read(null, $id));
    }
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @return bool la connection
    **/
    function beforeFilter()
    {
        parent::beforeFilter();
        $this->Auth->allow('inscription', 'logout');
    }
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @return bool la connection
    **/
    function logout()//deconnection
    {
        return $this->redirect($this->Auth->logout()); // hop déconnection !
    }
}