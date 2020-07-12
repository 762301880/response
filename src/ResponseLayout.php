<?php

namespace Response;

class ResponseLayout
{
    public static function apply($bool = true, $msg = '', $data = array())
    {
        try {
            $result = [];
            $result['status'] = $bool ? 1 : 0;
            if (empty($msg)) {
                $result['msg'] = $bool ? '成功!' : '失败';
            } else {
                $result['msg'] = $msg;
            }
            $result['data']=!empty($data)?$data:'';
            return response()->json($result);
        } catch (\Exception $exception) {
            throw new \Exception('System Error');
        }

    }
}
