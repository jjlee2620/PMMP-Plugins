<?php

namespace SONIC14;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

//플레이어접속
use pocketmine\event\player\PlayerJoinEvent;

class WelcomeTitle extends PluginBase implements Listener {
	
	public function onEnable() {
		$this->getLogger()->info("SNWelcomeTitle Plugin Enabled");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onDisable() {
		$this->getLogger()->info("SNWelcomeTitle Plugin Disabled");
	}
		
	public function onJoin(PlayerJoinEvent $event) {
		$player = $event->getPlayer();
		$name = $player->getName();
		$player->addTitle("§b[§f SERVER §b]", "§e $name §f님\n서버에 오신 것을 환영합니다!");
	}
}//클래스괄호
