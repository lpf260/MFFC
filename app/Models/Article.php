<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/14
 * Time: 22:12
 */
namespace App\Models;
use PDO;
class Article{
    private static $dbhost;
    private static $dbpassword;
    private static $dbname;
    private static $dbuser;

    public function __construct()
    {

    }

    public static function first()
    {

        try{
            self::$dbhost = 'localhost';
            self::$dbname = 'mfcc';
            self::$dbpassword = '';
            self::$dbuser = 'root';
            $dsn = "mysql:host=".self::$dbhost.";dbname=".self::$dbname;
            $db = new PDO($dsn, self::$dbuser,self::$dbpassword);
            $db->query("set charset utf8");
            $sql="SELECT * FROM articles limit 0,1";
            $query = $db->query($sql);

            $row = $query->fetch(PDO::FETCH_ASSOC);
            return $row;


        }catch(\PDOException $e){
            print "Error: ".$e->getMessage()."<br/>";
            die;
        }
    }


}