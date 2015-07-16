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
App::uses('AppModel', 'Model');

/**
 * Class connextion
 * extends de Adm
 * @category   Vue
 * @package    Affichage
 * @author     Original Marie <author@example.com>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @link       http://pear.php.net/package/PackageName
**/
class User extends AppModel
{
    public $name = 'User';
    public $hasMany = array('Post', 'Comment');
    public $validate = array(
        'username' => array(
            array(
                'rule' => 'alphanumeric',
                'rule' => 'isUnique',
                'allowEmpty' => false,
                'required' => true,
                'message' => "Un login est requis")
                ),
        'password' => array(
            array(
                'rule' => 'notEmpty',
                'message' => "Un mot de passe est requis")
                ),
        'name' => array(
            array(
                'rule' => 'alphanumeric',
                'allowEmpty' => false,
                'required' => true,
                'message' => "Votre nom de famille est requis")
                ),
        'lastname' => array(
            array(
                'rule' => 'alphanumeric',
                'allowEmpty' => false,
                'required' => true,
                'message' => "Votre prénom est requis")
                ),
        'email' => array(
            array(
                'rule' => 'email',
                'rule' => 'isUnique',
                'allowEmpty' => false,
                'required' => true,
                'message' => "Une adresse mail valide est requise")
                ),
        );
    /**
    * Fonction qui verifie que l'utilisateur existe bien et que son mdp coincide
    * @param  array $options bluuu
    * @return bool la connection
    **/
    function beforeSave($options = array())
    {
        if (isset($this->data[$this->alias]['password'])) {
            $donne = new SimplePasswordHasher();
            $this->data[$this->alias]['password'] = $donne->hash($this->data[$this->alias]['password']);
        }
        return true;
    }
}
