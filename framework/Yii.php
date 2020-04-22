<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

require __DIR__ . '/BaseYii.php';
//相比yii1简单粗暴直接require
/**
 * Yii is a helper class serving common framework functionalities.
 *
 * It extends from [[\yii\BaseYii]] which provides the actual implementation.
 * By writing your own Yii class, you can customize some functionalities of [[\yii\BaseYii]].
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class Yii extends \yii\BaseYii
{
}
//加载自动注册类yii::autoload ,第二参数:注册失败抛出异常，三个参数：队列头部追加
spl_autoload_register(['Yii', 'autoload'], true, true);
//赋值命名空间类和对应的文件
Yii::$classMap = require __DIR__ . '/classes.php';
//赋值容器
Yii::$container = new yii\di\Container();
