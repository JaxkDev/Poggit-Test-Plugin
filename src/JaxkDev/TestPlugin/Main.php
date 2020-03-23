<?php

declare(strict_types=1);
namespace JaxkDev\TestPlugin;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	public function onEnable(){
		$this->getLogger()->info("Enabled.", 2);
		echo "hi there.";
	}
	
	public function onDisable(){
		$this->getLogger()->info("Disabled.");
	}
}

?>
