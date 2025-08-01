<?php

namespace Pipu\Application\Repository;

use Pipu\Shared\Repository;

class User extends Repository
{

    public string $table = 'users';
    public array $fields = [
        'id',
        'name',
        'email',
        'avatar',
        'super_user',
        'created_at',
        'updated_at'
    ];

    public function active(string $email)
    {
        return $this->db->connect()->update($this->table, [
            "active" => true
        ], [
            "email" => $email
        ]);
    }
}
