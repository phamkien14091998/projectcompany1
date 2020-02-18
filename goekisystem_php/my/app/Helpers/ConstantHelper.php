<?php
namespace App\Helpers;


class ConstantHelper
{
    const LIMIT_PAGE = 50;
    const LIMIT_PAGE_RANK = 20;
    public static $DOMAIN_MY = 'http://pdo.eki-go.com/my/';
    public static $LOGIN = 'login.php';
    public static $USER_DETAIL = 'userdetail.php?user_cd=';
    public static $USER_LIST = 'userlist.php?type=USER_LIST';
    public static $USER_INSERT = 'userlist.php?type=INSERT';
    public static $USER_DELETE = 'userlist.php?type=DELETE';
    public static $USER_UPDATE_RANK = 'userlist.php?type=UPDATE_RANK';
    public static $USER_UPDATE_USER_INFO = 'userlist.php?type=UPDATE_USER_INFO';

    public static $MESSAGE_SELECT = 'user_message.php?type=SELECT';
    public static $MESSAGE_UPDATE = 'user_message.php?type=UPDATE';
    public static $MESSAGE_DELETE = 'user_message.php?type=DELETE';

    public static $RECOMMEND_SELECT = 'recommend_girl.php?type=select';
    public static $RECOMMEND_INSERT = 'recommend_girl.php?type=insert';
    public static $RECOMMEND_DELETE = 'recommend_girl.php?type=delete';
    public static $RECOMMEND_UPDATE = 'recommend_girl.php?type=update';

    public static $NAMEGIRL_SELECT = 'name_girl.php?type=select';

    public static $OPERATOR_SELECT = 'operator.php?type=GET';
    public static $OPERATOR_LIST = 'operator.php?type=USER_OPERATER';
}