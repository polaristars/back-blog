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

App::uses('Controller', 'Controller');

/**
 * Class connextion
 * extends de Adm
 * @category   Vue
 * @package    Affichage
 * @author     Original Marie <author@example.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link       http://pear.php.net/package/PackageName
**/

class AppController extends Controller
{
    public $components = array(
    'DebugKit.Toolbar',
    'Session',
    'Auth' => array(
        'loginRedirect' => array('controller' => 'posts', 'action' => 'login'),
        'logoutRedirect' => array('controller' => 'pages', 'action' => 'display', 'home')
        )
    );
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @return bool la connection
    **/
    function beforeFilter()
    {
        $this->Auth->allow('login', 'view');//l'objet de Auth permet d'utiliser la fonction login
    }
}