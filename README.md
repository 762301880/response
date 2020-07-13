# json格式接口返回器
个人封装的laravel-json格式返回器（作者：姚留洋,个人博客[地址](https://www.cnblogs.com/yaoliuyang/)）

## 使用方法
>在控制器中引用类
```
use Response\ResponseLayout;
```
>调用方法

```
# 参数1,`bool`类型就是说返回的是正确的还是错误的。参数2,`msg`返回成功或者错误的信息,参数3,`data`,为数组的形式['data'=>$data]
return ResponseLayout::apply(true,'成功',['data'=>$data]);
```
