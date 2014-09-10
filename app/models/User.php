<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

    /*obrigatorio criacao do campo remember_token*/

    protected $primaryKey = 'id_user';
    protected  $fillable = array('email', 'username', 'password', 'name', 'surname', 'cpf', 'county', 'city', 'user_status', 'is_certified', 'phone', 'activation_code', 'active', 'remember_token' );

    /**
     * active = -2 = account suspended
     * active = -1 =  profile denied, porfolio denied
     * active = 0 = recently created, not activated
     * active = 1 = recently confirmed, activated
     * active = 2 = portfolio and company info filled, activated (on evaluation)
     * active = 3 = portfolio approved, training waiting
     * active = 4 = awaiting for team selection
     * active = 5 = available
     * active = 6 = unavailable
     */

    use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');


    public function getAuthPassword(){
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
            parent::setAttribute($key, $value);
        }
     }
}
