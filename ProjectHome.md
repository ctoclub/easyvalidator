本插件的宗旨是：用户无需写一行JS验证代码，只需在要验证的表单中加入相应的验证属性即可，让验证功能易维护，可扩展，更容易上手。

DEMO中已经包含了常用的正则表达式，可以直接复用，为了考虑扩展性，所以针对不同用户特殊需求，自行写正则吧。

## 效果图： ##
![http://easyvalidator.googlecode.com/svn/trunk/demo.jpg](http://easyvalidator.googlecode.com/svn/trunk/demo.jpg)

EasyValidator实现的功能：

## 1. 提示功能（在表单或者其他标签中加入tip="想提示的文字"） ##
> 如：
> > 

&lt;input name="name" tip="请输入你的名字哟~"&gt;



## 2. 普通表单验证（在表单中加入reg="正则表达式"） ##


> 

&lt;input name="username" reg="正则" &gt;



> 普通表单验证DEMO：http://easyvalidator.googlecode.com/svn/trunk/index.html

## 3. AJAX表单验证（在表单中加入url="验证系统地址"） ##

> 

&lt;input name="username" url="地址" &gt;



> AJAX验证DEMO：没有在线演示，请在本地运行ajax\_demo.html，请求远程的PHP文件，当然可以为JSP或者ASP，我这里在程序里预设了一些已存在的数据，用户可以自行参考。

## 4. 普通表单验证 +  AJAX表单验证 （普通验证通过以后，再进行AJAX验证） ##

> 

&lt;input name="username" reg="正则" url="地址" &gt;



## 5. 扩展函数表单验证（某些业务特殊需求）： ##

> 这些特殊需求都是根据业务来的，这里列举一下这样的情况：

  1. checkbox选择框数量验证，如限制别人至少选择1个，最多选择5个checkbox。

> 2.多个表单之间进行比较，如【开始时间表单】一定小于等于【结束时间表单】或者两个密码表单要相等，用于注册的时候，等等。



由于这种情况的特殊性，所以用户得自己写业务逻辑代码，官方已经提供了extendsValidate扩展函数，在里面写自己的逻辑代码即可。

扩展函数表单验证DEMO：http://easyvalidator.googlecode.com/svn/trunk/extends_demo.html