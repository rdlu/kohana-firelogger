# FireLogger for PHP

FireLogger is a sexy PHP logger console integrated into Firebug (an alternative to FirePHP).

<a href="http://firelogger.binaryage.com/php"><img src="http://firelogger.binaryage.com/shared/img/firelogger4php-mainshot.png"></a>

## Visit [firelogger.binaryage.com](http://firelogger.binaryage.com)

Kohana Module Usage:

Add to your bootstrap:
'firelogger'  => MODPATH.'firelogger',

On your models/controllers/views you can use:
Flog($level,$message);
Flog("info","Info Message");
Flog("debug",$object);

You've got the idea...


Peace,
rodrigodk@github
rodrigo.dk@facebook
