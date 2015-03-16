自动创建前端Demo骨架
====================

@author [Elf-mousE](http://elf-mouse.me/)

配置
----

需要**PHP**环境

**host**

	127.0.0.1 demo.com

**apache**

	<VirtualHost 127.0.0.1>
		DocumentRoot "path-to-your-project"
		ServerName demo.com
	</VirtualHost>

使用
----

- 浏览器访问`demo.com`
- 浏览器访问`demo.com?q={action}`（`{action}`默认为`index`，可以是`list`或`detail`等）
