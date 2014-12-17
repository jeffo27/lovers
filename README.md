# 模擬情侶；驚呆了

## UPDATE 2:

* 在 People 表中执行：

	ALTER TABLE `People` ADD `mail` VARCHAR( 30 ) NOT NULL ;

* 增加邮箱验证。

* 增加了 `col-xs-*` 类来挽救手机上的排版。

***

## UPDATE 1:

* 在 People 表中执行：

    ALTER TABLE `People` ADD `phone` VARCHAR( 11 ) NOT NULL ;

* 表单中增加手机号，并用简单正则匹配

    只有13/15/18开头的11位数字被视为手机号。

* 防止重复的验证规则从原来的 **名字-寝室地址**对应
  变为 **名字-手机号**对应；

* 增加了手机号验证规则：一个手机号只能注册一次。

* 验证码仍然没搞好 = = 我去

* 电脑没电了……嘤嘤嘤

***

## 数据库配置：

	'application/config/database.php'中修改数据库用户名和密码。

## 数据库定义

	在MySQL中执行以下语句创建数据库。


	CREATE DATABASE Lovers;

	CREATE TABLE People
	(
		person_id int(11) AUTO_INCREMENT,
		name varchar(20) NOT NULL,
		gender varchar(1) NOT NULL,
		major varchar(30) NOT NULL,
		grade int(11) NOT NULL,
		hobby varchar(30) NOT NULL,
		room_loc varchar(30) NOT NULL,
		has_team tinyint(1) NOT NULL,
		team_name varchar(30) DEFAULT NULL,
		PRIMARY KEY (person_id)
	)



## 表单定义

* `'is_single'`，决定单人/双人注册。

* 单人注册：

	* 'name_1'

	* 'gender_1'

	* 'grade_1'

	* 'major_1'

	* 'hobby_1'

	* 'academy'，学园

	* 'build_num'，楼号

	* 'room_num',寝室号

* 双人注册：

	* 包含双份单人注册项目

	* 需要队伍名

## 控制器：controller/lovers.php

* 更换错误消息分界符为``，使错误消息在placeholder显示。

* 使用`$ready`为指示器，决定是否将表单插入数据库。

* `is_double`代表注册模式：单人/双人。

	使用`input->post('formname')`直接从表单中获取。

	初始方案：在验证规则中添加一个组`'check_is_double'`，先验证
	注册模式，再根据验证结果，采取验证规则中的`'single_register'`组
	或者`'double_register'`组验证余下数据。

	失败。原因是表单验证函数
	`form_validation->run('groupname')`函数只能验证一次，
	对整个表单进行验证。第二第三次调用无法返回正确结果。

	------

	因此采取直接检验`is_double`的值来决定采取哪种验证模式。
	
	如果验证结果为 `TRUE`，插入数据库；
	否则重载`views/lovers/register.php`页面。

	PS：经过尝试发现，即使第一次使用`GET`访问`register.php`，
	也会造成表单提交，此时表单全部域均为空值。

	实验方法：在表单验证函数内加一行`echo 'blahblah';`语句，
	第一次访问页面时页面会显示`echo`的文本。

	因此，插入数据库的操作必须在表单验证为 `TRUE` 的代码块中执行。
	否则会插入很多空值到数据库中。

## 表单验证规则

* 规则定义保存在`config/form_validation.php`文件中。

* 定义了两个组，`'single_register', 'double_register'`。

* 使用自动重填函数

	所有表单域都加上`'required'`，目的是使用表单重填函数
	`set_value(), set_select()`等，框架要求只有设定了
	验证规则的表单域才能够被自动重填。

* `'single_register'`组：

	验证单人注册项目，即名字，性别，年级，专业，爱好，寝室号。

	* 名字的验证(callback_check_name函数)

	`$count = preg_match_all("/[\x{4e00}-\x{9fa5}]{2,}/u",$str);`

	只匹配大于等于2个中文字符。

	* 寝室号
	
	要求是整数即可。

* `'double_register'`组：

	验证队伍名是否重复，两人性别是否一样，同一个人是否重复报名。

	* 验证队伍名

	使用自带规则`is_unique[People.team_name]`。

	* 验证两人性别(callback_check_gender函数)
	
	使用`input->post('gender_1')`从表单中获取第一个人性别。
	如果两人性别相同验证失败。

	* 验证同一个人是否重复报名(callback_check_duplicate函数)

	在数据库中查找相同名字的记录，取出他的寝室号码。

	如果没有相同名字记录，返回`TRUE`；
	如果有，且数据库中的寝室号码与表单中相同，说明重复报名，返回`FALSE`。


	
		
	




















	
