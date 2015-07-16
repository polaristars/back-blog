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
class Post extends AppModel
{
    public $belongsTo = 'User';
    public $hasMany = 'Comment';
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
            ),
        'body' => array(
            'rule' => 'notEmpty')
        );
}
