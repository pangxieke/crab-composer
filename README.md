# crab框架
 使用composer建立自己的框架

## 功能
### 1. 路由
路由使用composer包 `NoahBuscher\Macaw\Macaw`
配置文件 `config/routes.php`

###2. CRM
使用Larvael的`Illuminate\Database\Capsule\Manager`
配置文件`config/databases.php`

启动 
`bootstrap.php`
<pre>
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;
$capsule->addConnection(require '../config/database.php');
$capsule->bootEloquent();
</pre>

###3.视图
`services/View.php`

###4. 错误提示
使用`\Whoops\Run`
启动 
`bootstrap.php`
<pre>
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
</pre>

###5.redis
使用`predis/predis`
不需要开启redis扩展
配置文件 `config/redis.php`

###6.email
使用`nette/mail`
使用
<pre>
$this->mail = Mail::to(['pangxieke@126.com'])

            ->from('MotherFucker <pangxieke@126.com>')

            ->title('Hello world!')

            ->content('Hello~~');
</pre>

###7.单一入口
`public/index.php`
<pre>
//启动器
require '../../bootstrap.php';

// 路由配置
require '../config/routes.php';
</pre>

### 测试数据
<pre>
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `articles` (`id`, `title`, `content`) VALUES
	(1, '我是标题1', '我是内容呀~~我真的是内容1'),
	(2, '我是标题2', '我是内容呀~~我是内容2');
</pre>
