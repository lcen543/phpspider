<?php
namespace app\index\controller;

use QL\QueryList;
class Index
{
    public function index()
    {
        return 'index';
    }

    public function hello()
    {
    	$url = "https://www.kancloud.cn/manual/thinkphp5_1/353955";
    	$html = file_get_contents($url);

		$rules = array(
		    //采集class为two下面的超链接的链接
		    'a' => array('.catalog>ul>li>a','href'),
		);
		// 过程:设置HTML=>设置采集规则=>执行采集=>获取采集结果数据
		$data = QueryList::html($html)->rules($rules)->query()->getData();
		//打印结果
		dump($data->all());

    }
}
