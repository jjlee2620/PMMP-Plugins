<?php

namespace SONIC14;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\block\Block;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\player\PlayerInteractEvent;

class ItemCode extends PluginBase implements Listener {
	
	public function onEnable() {
		$this->getLogger()->info("SNItemCode Plugin Enabled");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onDisable() {
		$this->getLogger()->info("SNItemCode Plugin Disabled");
	}
	
	public function PlayerInteract(PlayerInteractEvent $event) {
		$compass = $event->getPlayer()->getInventory()->getItemInHand()->getId();
		
		if($compass == 345){
			$event->getPlayer()->sendMessage("§b[ §f아이템코드 §b]§l§e ".$event->getBlock()->getId().":".$event->getBlock()->getDamage());
			
			return true;
		}
	}
}//클래스괄호