<?php

namespace MangoTheDev\test;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Main extends PluginBase{

	public function onEnable(){
		$this->getLogger()->info("coda has been enabled");
	}

	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "coda":
				$sender->sendMessage("§bcoda is a cola");
				return true;
			default:
				return false;
		}
	}

	public function onDisable(){
		$this->getLogger()->info("coda has been disabled");
		
	}
}
