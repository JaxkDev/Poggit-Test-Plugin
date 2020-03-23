<?php

declare(strict_types=1);
namespace JaxkDev\TestPlugin;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	
	/** @var int */
	public $db = 0;
	
	public function onEnable(){
		$this->db = 1;
		$this->getLogger()->info("Enabled.", 2);
		echo "hi there.";
	}
	
	public function onDisable(){
		$this->getLogger()->info("Disabled.");
		echo $this->db["hi"];
	}
}

?>
