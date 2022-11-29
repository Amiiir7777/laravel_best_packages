<?php

namespace App\Models;

class Permission extends \Spatie\Permission\Models\Permission
{
    public const PERMISSION_USERS = 'Add Post';
    public const PERMISSION_PRODUCTS = 'Add Product';
    public const PERMISSION_MARKET = 'Add Market';

    static $permissions = [
        self::PERMISSION_USERS,
        self::PERMISSION_PRODUCTS,
        self::PERMISSION_MARKET
    ];
}
