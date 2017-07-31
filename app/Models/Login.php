<?php

namespace App\Models;

use Carbon\Carbon;
use duanyong\Component\Core\StringUtils;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'login';

    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'staff_id',
        'staff_no',
        'email',
        'mobile',
        'password',
        'remember_token',
        'last_login_time',
        'last_login_city',
        'last_login_ip',
    ];

    protected $hidden = [
        'password', 'remember',
    ];


    public function findByUsername($username) {
        if (StringUtils::isMobileNumber($username)) {
            //手机号登录
            return $this->where('mobile', $username);
        } else if (StringUtils::isNumber($username)) {
            //工号登录
            return $this->where('staff_no', $username);
        } else {
            //邮箱前缀登录
            return $this->where('email', $username);
        }
    }


    public function isLogin($username, $password) {
        if (false === ( $login = $this->findByUsername($username) )) {
            return false;
        }

        if ($login->password !== md5($password . $this->salt)) {
            return false;
        }

        return true;
    }

    public function saveLastLogin(Request $request) {
        $this->lastLoginTime = Carbon::now();
        $this->LastLoginIp   = $request->getClientIp();

        $this->save();
    }

    public function setSalt($salt) {
        $this->salt = $salt;
    }

    public function setStaffId($staffId) {
        $this->staffId = $staffId;
    }

    public function setStaffNo($staffNo) {
        $this->staffNo = $staffNo;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}
