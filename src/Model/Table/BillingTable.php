<?php
/**
 * Created by PhpStorm.
 * User: jlroberts
 * Date: 8/18/17
 * Time: 11:43 AM
 */

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Utility\Hash;
use Cake\Validation\Validator;

/**
 * Chats Model
 */
class BillingTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->belongsTo('Users', array())->setForeignKey('user_id')->setProperty('user');
        $this->hasMany('users_subscriptions_history', ['className' => 'BillingHistory'])->setForeignKey('subscription_id')->setProperty('subscription');

        $this->setTable('users_subscriptions');
        $this->setDisplayField('messages');
        $this->setPrimaryKey('id');
    }
}