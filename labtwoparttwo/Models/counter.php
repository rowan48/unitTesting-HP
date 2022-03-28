<?php
namespace App;
require_once ("vendor/autoload.php");

class counter
{
    public static $count=0;

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }
    private $fp=array();

    static function counts(){
        $fp = fopen("mydata.txt","a+");//read the data from the file
        if(filesize("mydata.txt")){
            //$fr=fread($fp,filesize("mydata.txt"));
            //fclose($fp);
            //$words=explode(PHP_EOL, $fr);//from string to array
            //$words2=array_pop($words);
            //var_dump($words);
        }
        if (isset($_SESSION["isvisited"])){}
            $_SESSION["isvisited"]=true;
            $line=self::$count++;




        $fw=fwrite($fp,$line.PHP_EOL);
        if($fw) {
            return true;
        }
        else{
            return false;
        }
    }
}


