<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * MicroPHP
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		MicroPHP
 * @author		狂奔的蜗牛
 * @email		672308444@163.com
 * @copyright	        Copyright (c) 2008 - 2013, 狂奔的蜗牛, Inc.
 * @link		https://bitbucket.org/snail/microphp/
 * @since		Version 1.0
 * @filesource
 */
class Woniu {
    function say(){
        $Woniu=&Controller::getInstance();
        echo 'application folder is:'.$Woniu->config('system','application_folder').'<br/>';
        echo 'Hello,MicroPHP!';
    }
}

/* End of file Woniu.php */
