<?php

namespace CProducts;

require_once "Db.php";

use Db\Db;

class CProducts
{
    public static function getAllWithLimit($limit = 50) : array
    {
        return self::getDbConnection()->query('select * from products limit ' . $limit)->fetchAll();
    }

    public static function hide($id) : void
    {
        self::getDbConnection()->query("UPDATE products SET hided=true WHERE id=" . $id . ";");
    }

    public static function increaseQuantity($id) : void
    {
        self::getDbConnection()->query("UPDATE products SET product_quantity = product_quantity + 1 WHERE id=" . $id . ";");
    }

    public static function reduceQuantity($id) : void
    {
        self::getDbConnection()->query("UPDATE products SET product_quantity =  product_quantity - 1 WHERE id=" . $id . ";");
    }

    private static function getDbConnection() : Db
    {
        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = 'secret';
        $dbName = "vedita_test_project";

        return new Db($dbHost,$dbUser, $dbPass, $dbName);
    }
}