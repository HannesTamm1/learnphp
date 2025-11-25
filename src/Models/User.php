<?php

namespace App\Models;

use App\DB;

class User extends Model
{
    public static $table = 'users';
    public $id;
    public $email;
    public $password;

    public static function all()
    {
        return (new DB())->all('users', self::class);
    }

    public static function find($id)
    {
        return (new DB())->find('users', self::class, $id);
    }

    public function delete()
    {
        return (new DB())->delete('users', $this->id);
    }

    public static function where($field, $value)
    {
        return (new DB())->where('users', self::class, $field, $value);
    }

    public function save()
    {
        $db = new DB();

        $db->insert('users', [
            'email' => $this->email,
            'password' => $this->password,
        ]);
    }

    public static function update($fields, $id)
    {
        return (new DB())->update('users', $fields, $id);
    }

}
