<?php
/**
 * User: Sammy Lee
 * Date: 2016/9/6
 * Time: 11:43
 */
namespace Nickny\Response;

class Format {

    	public static function success($data=[])
	{
	    return [
                'code' => 200,
                'msg' => '成功',
                'data' => $data
            ];
	}

	public static function paramError($msg)
	{
	    return [
                'code' => 418,
                'msg' => $msg,
                'data' => []
            ];
	}

	public static function paramMiss($msg)
	{
	    return [
                'code' => 420,
                'msg' => $msg,
                'data' => []
            ];
	}

	public static function authError($msg)
	{
	    return [
                'code' => 401,
                'msg' => $msg,
                'data' => []
            ];
	}

	public static function invalidRequest($msg='')
	{
	    return [
		'code' => 400,
		'msg' => $msg,
		'data' => []
	    ];
	}

	public static function noData($msg='')
        {
            return [
                'code' => 204,
                'msg' => $msg,
                'data' => []
            ];
        }

	public static function dbError($msg='')
        {
	    return [
            	'code' => 508,
            	'msg' => $msg,
            	'data' => []
            ];
    	}

	public static function exceptions($msg='')
    	{
            return [
            	'code' => 511,
            	'msg' => $msg,
            	'data' => []
            ];
    	}

	public static function noAccount($msg='')
    	{
            return [
            	'code' => 419,
            	'msg' => $msg,
            	'data' => []
            ];
    	}

        public static function custom($code=200, $msg='成功', $data=[])
        {
            return [
                'code' => $code,
                'msg' => $msg,
                'data' => $data
            ];
        }

}
