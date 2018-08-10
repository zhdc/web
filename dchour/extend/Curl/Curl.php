<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/10 0010
 * Time: 11:52
 */
namespace Curl;
class Curl{
    private  $curl;
    public function __construct()
    {
        $this->curl = curl_init();
    }

    /**
     * @param $url 请求地址
     * @param bool $https 开启https请求
     * @return mixed
     */
    public function get($url,$https=false)
    {
        curl_setopt($this->curl,CURLOPT_URL,$url);
        curl_setopt($this->curl,CURLOPT_RETURNTRANSFER,1);
        if($https){
            curl_setopt($this->curl,CURLOPT_SSL_VERIFYPEER,false);
        }
        $body = curl_exec($this->curl);
        curl_close($this->curl);
        return $body;
    }

    /**
     * @param $url 请求地址
     * @param array $post_data 请求参数
     * @param bool $https 开启https请求
     * @return mixed
     */
    public function post($url,$post_data=array(),$https=false)
    {
        //初始化
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL,$url);
        //设置头文件的信息作为数据流输出
        // curl_setopt($curl, CURLOPT_HEADER, 1);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        if($https){
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        }
        //设置post方式提交
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
        //执行命令
        $body = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        //显示获得的数据
        return $body;
    }
}