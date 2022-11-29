<?php

namespace App\Models;

class Role extends \Spatie\Permission\Models\Role
{
    public const ROLE_USERS = 'writer';
    public const ROLE_USERS1 = 'System Operator';

    static $roles = [
        self::ROLE_USERS => [
            Permission::PERMISSION_USERS
        ],
        self::ROLE_USERS1 => [
            Permission::PERMISSION_USERS
        ]
    ];
}
