<?php
/**
 * Created by PhpStorm.
 * User: lpf
 * Date: 2017/9/15
 * Time: 17:26
 */
namespace Services;
use Psr\Log\InvalidArgumentException;

class View{
    const VIEW_BASE_PATH = '/app/views/';

    public $view;
    public $data;

    public function __construct($view)
    {
        $this->view = $view;
    }

    public static function make($viewName = null)
    {
        if( !$viewName ){
            throw new \InvalidArgumentException("视图名称不能为空!");
        }else{
            $viewFilePath = self::getFilePath($viewName);
            if(is_file($viewFilePath)){
                return new View($viewFilePath);
            }else{
                throw new \UnexpectedValueException("视图文件不存在！");
            }
        }
    }

    public function with($key, $value=null)
    {
        $this->data[$key] = $value;
        return $this;
    }

    private static function getFilePath($viewName)
    {

    }

}