<?php
/**
 * User: Sammy Lee
 * Date: 2016/9/6
 * Time: 11:43
 */
namespace Sammy\Response;

class Format {

    public static function success()
	{
		return json([
                'code' => 200,
                'msg' => '成功',
                'data' => []
            ]);
	}

	public static function paramError($msg)
	{
		return json([
                'code' => 418,
                'msg' => $msg,
                'data' => []
            ]);
	}

	public static function paramMiss($msg)
	{
		return json([
                'code' => 420,
                'msg' => $msg,
                'data' => []
            ]);
	}

	public static function authError($msg)
	{
		return json([
                'code' => 401,
                'msg' => $msg,
                'data' => []
            ]);
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

}