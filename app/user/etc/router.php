<?php
/**
* iCMS - i Content Management System
* Copyright (c) 2007-2019 iCMSdev.com. All rights reserved.
*
* @author icmsdev <master@icmsdev.com>
* @site https://www.icmsdev.com
* @licence https://www.icmsdev.com/LICENSE.html
*
* '路由标识' => array (
*    0 => '伪静态链接',
*    1 => '动态链接',
*  )
*/
defined('iPHP') OR exit('What are you doing?');

return '{
    "user":[
        "/user",
        "api.php?app=user"
    ],
    "user:home":[
        "/user/home",
        "api.php?app=user&do=home"
    ],
    "user:publish":[
        "/user/publish",
        "api.php?app=user&do=manage&pg=publish"
    ],
    "user:article":[
        "/user/article",
        "api.php?app=user&do=manage&pg=article"
    ],
    "user:category":[
        "/user/category",
        "api.php?app=user&do=manage&pg=category"
    ],
    "user:comment":[
        "/user/comment",
        "api.php?app=user&do=manage&pg=comment"
    ],
    "user:inbox":[
        "/user/inbox",
        "api.php?app=user&do=manage&pg=inbox"
    ],
    "user:inbox:uid":[
        "/user/inbox/{uid}",
        "api.php?app=user&do=manage&pg=inbox&user={uid}"
    ],
    "user:manage":[
        "/user/manage",
        "api.php?app=user&do=manage"
    ],
    "user:manage:favorite":[
        "/user/manage/favorite",
        "api.php?app=user&do=manage&pg=favorite"
    ],
    "user:manage:fans":[
        "/user/manage/fans",
        "api.php?app=user&do=manage&pg=fans"
    ],
    "user:manage:follow":[
        "/user/manage/follow",
        "api.php?app=user&do=manage&pg=follow"
    ],
    "user:profile":[
        "/user/profile",
        "api.php?app=user&do=profile"
    ],
    "user:profile:base":[
        "/user/profile/base",
        "api.php?app=user&do=profile&pg=base"
    ],
    "user:profile:avatar":[
        "/user/profile/avatar",
        "api.php?app=user&do=profile&pg=avatar"
    ],
    "user:profile:setpassword":[
        "/user/profile/setpassword",
        "api.php?app=user&do=profile&pg=setpassword"
    ],
    "user:profile:bind":[
        "/user/profile/bind",
        "api.php?app=user&do=profile&pg=bind"
    ],
    "user:profile:custom":[
        "/user/profile/custom",
        "api.php?app=user&do=profile&pg=custom"
    ],
    "user:register":[
        "/user/register",
        "api.php?app=user&do=register"
    ],
    "user:logout":[
        "/user/logout",
        "api.php?app=user&do=logout"
    ],
    "user:login":[
        "/user/login",
        "api.php?app=user&do=login"
    ],
    "user:login:qq":[
        "/user/login/qq",
        "api.php?app=user&do=login&sign=qq"
    ],
    "user:login:wb":[
        "/user/login/wb",
        "api.php?app=user&do=login&sign=wb"
    ],
    "user:login:wx":[
        "/user/login/wx",
        "api.php?app=user&do=login&sign=wx"
    ],
    "user:findpwd":[
        "/user/findpwd",
        "api.php?app=user&do=findpwd"
    ],
    "uid:home":[
        "/{uid}/",
        "api.php?app=user&do=home&uid={uid}"
    ],
    "uid:comment":[
        "/{uid}/comment/",
        "api.php?app=user&do=comment&uid={uid}"
    ],
    "uid:share":[
        "/{uid}/share/",
        "api.php?app=user&do=share&uid={uid}"
    ],
    "uid:favorite":[
        "/{uid}/favorite/",
        "api.php?app=user&do=favorite&uid={uid}"
    ],
    "uid:fans":[
        "/{uid}/fans/",
        "api.php?app=user&do=fans&uid={uid}"
    ],
    "uid:follower":[
        "/{uid}/follower/",
        "api.php?app=user&do=follower&uid={uid}"
    ],
    "uid:cid":[
        "/{uid}/{cid}/",
        "api.php?app=user&do=home&uid={uid}&cid={cid}"
    ],
    "uid:favorite:id":[
        "/{uid}/favorite/{id}/",
        "api.php?app=user&do=favorite&uid={uid}&id={id}"
    ]
}';