<?php
/**
* 基本配置
* @package conf
* @author axing
* @version 0.1
*/

if (!defined('AXAPI_ROOT_PATH'))
{
    define('AXAPI_ROOT_PATH', __dir__ );
}

if (!isset($_SERVER['HTTP_HOST']) || $_SERVER['HTTP_HOST'] == 'api-haoframe.example.com')
{//1是开发模式  2是正式环境
    define('AXAPI_DEPLOY_STATUS', 1 );
}
else
{
    define('AXAPI_DEPLOY_STATUS', 2 );
}

//加载类 并注册自动加载事件。
require_once(AXAPI_ROOT_PATH.'/components/autoload.php');
require_once(AXAPI_ROOT_PATH.'/mhc/models/HaoResult.php');


/** API项目名（最好全网唯一）   */  define('AXAPI_PROJECT_NAME', 'project-haoframe' );

/** 混淆方案- 头信息混淆方案   */  define("SECRET_HAX_BROWSER"    , 'secret=apites894987la9sij');
/** 混淆方案- 头信息混淆方案   */  define("SECRET_HAX_PC"         , 'secret=apites848712ihjwe6');
/** 混淆方案- 头信息混淆方案   */  define("SECRET_HAX_ANDROID"    , 'secret=apites3539989fij3j');
/** 混淆方案- 头信息混淆方案   */  define("SECRET_HAX_IOS"        , 'secret=apites465671yoditc');
/** 混淆方案- 头信息混淆方案   */  define("SECRET_HAX_WINDOWS"    , 'secret=apites2921889iaf94');
/** 混淆方案- 用户信息加密混淆 */  define("USER_COOKIE_RANDCODE"  , 'f9823r2ioeoiwaeefadsafeww');
/** 混淆方案- 密码加密存储混淆 */  define("PASSWORD_RANDCODE"     , 'f983r2ewioeoiwaeefadsafew');

// 数据库配置
if (!defined('DB_HOST'))
{
    define('DB_HOST'    , '127.0.0.1');
    define('DB_DATABASE', 'dbhaoye');
    define('DB_USER'    , 'apihaoye');
    define('DB_PASSWORD', 'weiohaoyeI738');
    // define('DB_PORT', '3306');
    // define('DB_CHARSET', 'utf8mb4');
}

define('W2LOG_PATH' , AXAPI_ROOT_PATH . '/logs/');         /** 日志存储目录 */
// define('W2LOG_FILENAME' , 'w2log.log');         * 日志存储文件名

//请酌情配置以下信息
/** xg推送 */
// define('W2PUSH_API_KEY_ANDROID'   , '2100023326834');
// define('W2PUSH_SECRET_KEY_ANDROID', 'cacd0597db93508d874c49c');
// define('W2PUSH_API_KEY_IOS'       , '2100023226814');
// define('W2PUSH_SECRET_KEY_IOS'    , 'b632046c0cewfwe985eabe00');

/** 七牛配置 */
// define('W2QINIU_QINIU_BUCKET'   , 'test');
// define('W2QINIU_QINIU_DOMAIN'   , '7u2sdg.test.z0.glb.clouddn.com');
// define('W2QINIU_QINIU_ACCESSKEY', '_AFIydsfaRbmMRP8aO38y3C9');
// define('W2QINIU_QINIU_SECRETKEY', 'Uv9yBLUeqsdfafmVgAybHBRbT07Jj');

/** SMS用户密码 */
// define('W2SMS_USER'  , 'USERNAME');
// define('W2SMS_PASSWD', '123456');

/** 云之讯相关密钥 */
// defin('UCPASS_ACCOUNTSID', '');
// defin('UCPASS_TOKEN'     , '');
// defin('UCPASS_APPID'     , '');
// defin('UCPASS_TEMPLATEID', '');


/** redis 缓存服务器 */
// define('W2CACHE_HOST'  ,'127.0.0.1');
// define('W2CACHE_PORT'  ,'6379');
// define('W2CACHE_INDEX' ,4);
// define('W2CACHE_AUTH'  ,'thIsIsteStseRverForhAOxitech1305bywYxin151006');



/** 微信公众号与用户互动接口的基本配置 */
// define('W2WEIXIN_APPID',        'wxb8998842c013');
// define('W2WEIXIN_SECRET',       '839400f099923bba4081e2');

/** 支付宝支付相关配置 */
// define('W2PAYALI_PARTNER',             '2088021001234567');             // PID 在 https://b.alipay.com/order/pidAndKey.htm
// define('W2PAYALI_SELLER_ID',           'test@example.com');            // 支付宝账号
// define('W2PAYALI_PRIVATE_KEY_PATH',    realpath(AXAPI_ROOT_PATH.'/lib/alipay/key/rsa_private_key.pem'));
// define('W2PAYALI_ALI_PUBLIC_KEY_PATH', realpath(AXAPI_ROOT_PATH.'/lib/alipay/key/alipay_public_key.pem'));
// define('W2PAYALI_NOTIFY_URL',          'http://'.$_SERVER['HTTP_HOST'].'/pay/pay_notify_of_ali.php');



/** 微信支付或微信公众号支付的相关配置 */
// define('W2PAYWX_APPID',            'wxb7988976c013');
// define('W2PAYWX_MCH_ID',           '1280568339301');
// define('W2PAYWX_SIGN_KEY',         'so4il9l6787945Xjsri2r3xsfkk');
// define('W2PAYWX_NOTIFY_URL',       'http://'.$_SERVER['HTTP_HOST'].'/pay/pay_notify_of_wx.php');

/** 微信高级支付互动的配置（如退款） */
// define('W2PAYWX_APICLIENT_CERT',      AXAPI_ROOT_PATH.'/lib/wxpay/cert/apiclient_cert.pem');
// define('W2PAYWX_APICLIENT_KEY',       AXAPI_ROOT_PATH.'/lib/wxpay/cert/apiclient_key.pem');




//================= 系统运行代码 =================
/** Success */
define('RUNTIME_CODE_OK',        0);
/** Unkown error */
define('RUNTIME_CODE_ERROR_UNKNOWN',        1);
/** Database error */
define('RUNTIME_CODE_ERROR_DB',        2);
/** Param error */
define('RUNTIME_CODE_ERROR_PARAM',        3);
/** No data return */
define('RUNTIME_CODE_ERROR_DATA_EMPTY',        4);
/** 没有权限 */
define('RUNTIME_CODE_ERROR_NO_AUTH',        5);
/** 用户验证失败，非当前用户或密码已修改，需重新登录 */
define('RUNTIME_CODE_ERROR_NOT_USER',        6);
/** 错误的模型对象 */
define('RUNTIME_CODE_ERROR_NOT_MODEL',        7);
/** 无文件上传 */
define('NO_FILE_UPLOAD',        8);
/** 非法的userid */
define('INVALID_USER_ID',        9);
/** Param error */
define('RUNTIME_CODE_ERROR_NO_CHANGE',        10);


/** 状态  - 不存在 */
define('STATUS_DISABLED',         0);
/** 状态  - 正常 */
define('STATUS_NORMAL',           1);
/** 状态  - 草稿 */
define('STATUS_DRAFT',            2);
/** 状态  - 待审 */
define('STATUS_PENDING',          3);

/*
 *  1：浏览器设备
 *  2：pc设备
 *  3：Android设备
 *  4：ios设备
 *  5：windows phone设备
*/
class DEVICE_TYPE
{
    const BROWSER  = 1;
    const PC       = 2;
    const LINUX    = 2;
    const ANDROID  = 3;
    const IOS      = 4;
    const WINDOWS  = 5;
}



// 默认分页数据量
define("DEFAULT_PAGE_SIZE", 10);

/**
 * UserHandler的类名
 * 用户User表 推荐必须以下字段
 *   `id` int(11) NOT NULL AUTO_INCREMENT,
 *   `level` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0: 未激活用户 1：普通用户 5：普通管理员  9：超级管理员',
 *   `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '0: 不存在  1: 正常 2: 封号  3：禁言',
 *   `lastLoginTime` datetime DEFAULT NULL COMMENT '最后一次登录时间',
 */
define("USERHANDLER_NAME", 'UserHandler');

/** 常量类，提供了遍历类中所有常量的方法 */
class CONST_CLASS
{
    public static function getAllConstants()
    {
        $oClass = new ReflectionClass(get_called_class());
        $constants = $oClass->getConstants();
        return array_values($constants);
    }
}


/** 专用的ERROR_CODE类，同时提供了描述文本 */
class ERROR_CODE
{
    public static $OK                   = array(0,  '',            '');
    public static $UNKNOWN_ERROR        = array(1,  '未知错误',            'unknow error');
    public static $DB_ERROR             = array(2,  '数据库错误',          'database error');
    public static $PARAM_ERROR          = array(3,  '请求参数错误',        'param error');
    public static $DATA_EMPTY           = array(4,  '数据不存在',          'nothing here');
    public static $NO_AUTH              = array(5,  '没有权限操作',        'no promise here');
    public static $NOT_USER             = array(6,  '没有登录，不可操作。',  'no login no promise');
    public static $NOT_MODEL            = array(7,  '错误的模型对象',       'model error');
    public static $NO_FILE_UPLOAD       = array(8,  '没有发现上传文件',     'no file found');
    public static $INVALID_USER_ID      = array(9,  '错误的用户信息',       'user info unkonw');
    public static $NO_CHANGE_FOUND      = array(10, '未发现数据更新',       'no change found');

    public static $ONLY_GET_ALLOW       = array(11, '错误，此处只接受GET数据。',       'only get allow here');
    public static $ONLY_POST_ALLOW      = array(12, '错误，此处只接受POST数据。',       'only post allow here');
    public static $ONLY_USER_ALLOW      = array(13, '您需要登录后才可以执行该操作。',       'only post allow here');
    public static $REQUEST_TIME_OUT     = array(14, '请求失败了，请检查你的网络状态和系统时间是否准确哦。',       'request is out of time');
    public static $SIGNATURE_WRONG      = array(15, '校验失败',       'SIGNATURE_WRONG');
    public static $ORDER_VALUE_ERROR    = array(16, '请使用正确的排序方案。',       'ORDER_VALUE_ERROR');
    public static $NO_TBALE_FOUND       = array(17, '没有对应的表存在',       'NO_TBALE_FOUND');
    public static $ONLY_ADMIN_ALLOW     = array(18, '仅限管理员使用此功能。',       'ONLY_ADMIN_ALLOW');


    //实际开发过程中，可以继续自定义更多的错误类型
    public static $LOGLIST_TYPE_WRONG   = array(101, '错误的日志类型',       'LOGLIST_TYPE_WRONG');
    public static $LOGLIST_NO_LOG_FOUND = array(102, '暂无相关日志',       'LOGLIST_NO_LOG_FOUND');

    public static $USER_PLS_OLD_PWD     = array(111, '请输入当前密码，您才可以继续执行操作。',       'USER_PLS_NEW_PWD');
    public static $USER_WRONG_OLD_PWD   = array(112, '当前密码错误，您不可以执行此操作。',       'USER_WRONG_OLD_PWD');
    public static $USER_PLS_NEW_PWD     = array(113, '您必须指定一个新的密码。',       'USER_PLS_NEW_PWD');
    public static $USER_DUP_USERNAME    = array(114, '该用户名已存在。',       'USER_DUP_USERNAME');
    public static $USER_DUP_TELEPHONE   = array(114, '该手机号已存在。',       'USER_DUP_TELEPHONE');
    public static $USER_DUP_EMAIL       = array(114, '该邮箱已存在。',       'USER_DUP_EMAIL');
    public static $USER_LOGIN_FAIL      = array(115, '登录失败，账号或密码错误。',       'USER_LOGIN_FAIL');
    public static $USER_BEEN_DISABLED   = array(116, '该账号已被禁用。',       'USER_BEEN_DISABLED');
    public static $USER_PLS_ACCOUNT     = array(117, '请输入登录账号',       'USER_PLS_ACCOUNT');
    public static $USER_PLS_PWD         = array(118, '请输入密码',       'USER_PLS_PWD');
    public static $USER_USED_UNION      = array(119, '该联合登录已被绑定',       'USER_USED_UNION');
    public static $USER_UNAME_NO_PHONE      = array(120, '不可以使用手机号作为用户名。',       'USER_UNAME_NO_PHONE');
    public static $USER_UNAME_NO_EMAIL      = array(121, '不可以使用邮箱作为用户名。',       'USER_UNAME_NO_EMAIL');
    public static $SMS_TOO_OFEN      = array(122, '验证码发送太频繁，请稍后再试。',       'SMS_TOO_OFEN');
    public static $SMS_PHONE_EXISTS      = array(123, '该手机号已存在，不可用于注册。',       'SMS_PHONE_EXISTS');
    public static $SMS_PHONE_INVAILD      = array(124, '该手机号并未注册过，无法找回密码哦。',       'SMS_PHONE_INVAILD');
    public static $SMS_PLS_USEFOR      = array(125, '发送验证码必须要有用途说明哦',       'SMS_PLS_USEFOR');
    public static $SMS_VERIFYCODE_WRONG      = array(126, '验证码错误',       'SMS_VERIFYCODE_WRONG');
    public static $SMS_NO_PHONE_FOUND      = array(127, '该手机号并未注册过，无法用于登录哦。',       'SMS_NO_PHONE_FOUND');




    //如需更多错误码，请在以下延生，建议使用四位数以上数字作为您的错误码。
    //...
}



class SMS_USEFOR extends CONST_CLASS
{
    const REGISTER    = 1;//注册用验证码
    const LOGIN       = 2;//登陆用验证码
    const RESTPWD     = 3;//找回密码用验证码
}
