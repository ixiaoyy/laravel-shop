<?php

/**
  * Desc: 将请求的路由名称转换为 CSS 类名称
  * User: YuY
  * Date: 2020/5/8
  */
function route_class()
{
    return str_replace('.','-',Route::currentRouteName());
}
