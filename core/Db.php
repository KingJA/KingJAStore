<?php

/**
 * Created by PhpStorm.
 * User: Shinelon
 * Date: 2016/5/15
 * Time: 20:02
 */
header("Content-type:text/html; charset=utf-8");

class Db
{
    private static $Db;
    private static $conn;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$Db) {
            self::$Db = new Db();
            return self::$Db;
        }
        return self::$Db;
    }

    public static function connect()
    {
        self::$conn = new mysqli('127.0.0.1', 'root', 'root', 'kingja');
        self::$conn->set_charset("utf8");
        if (!self::$conn) {
            die("connect_error:" . self::$conn . mysqli_connect_error());
        }
        return self::$conn;
    }


    /*======================================================================================*/

    public static function insert($table, $array)
    {
        $keys = join(",", array_keys($array));
        $vals = "'" . join("','", array_values($array)) . "'";
        $sql = "insert {$table}($keys) values({$vals})";
        $result = self::$conn->query($sql);
        return $result;

    }


    public static function selectAll($table)
    {
        $result = self::$conn->query("select * from " . $table);

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;

    }

    public static function limit($table, $position, $size)

    {
        $from = $position * $size;
        $sql = "select * from " . $table . " limit " . $from . "," . $size;
        $result = self::$conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    }


}


