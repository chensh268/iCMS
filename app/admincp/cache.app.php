﻿<?php
/**
* iCMS - i Content Management System
* Copyright (c) 2007-2012 idreamsoft.com iiimon Inc. All rights reserved.
*
* @author coolmoo <idreamsoft@qq.com>
* @site http://www.idreamsoft.com
* @licence http://www.idreamsoft.com/license.php
* @version 6.0.0
* @$Id: cache.app.php 2365 2014-02-23 16:26:27Z coolmoo $
*/
class cacheApp{
    function __construct() {
    }
    function do_iCMS(){
		if (in_array($_GET['acp'], array('setting','prop','filter','keywords'))) {
	    	$acp	= iACP::app($_GET['acp']);
	    	$acp->cache();
	    	iPHP::success('更新完成');
		}
    }
    function do_menu(){
    	iACP::$menu->cache();
    	iPHP::success('更新完成','js:1');
    }
    function do_category(){
    	$category	= iPHP::appClass('category');
    	$category->cache(true,isset($_GET['type'])?$_GET['type']:null);
    	iPHP::success('更新完成');
    }
    function do_tpl(){
    	iCMS::clear_compiled_tpl();
    	iPHP::success('清理完成');
    }
    function do_artCount(){
        $app = iACP::app('category');
    	$app->recount();
    	iPHP::success('更新完成');
    }
}