<?php

namespace SONIC14;

use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;

class Torch extends PluginBase implements Listener {
	
	public const MAX_DURATION = 2147483647;
	
	public function onEnable() {
		$this->getLogger()->info("SNTorch Plugin Enabled");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onDisable() {
		$this->getLogger()->info("SNTorch Plugin Disabled");
	}
	
	public function onHeld(PlayerItemHeldEvent $event) {
		$player = $event->getPlayer();
		$item = $event->getItem();
		
		if($item->getId() == Item::TORCH) {
			$effect = new EffectInstance(Effect::getEffect(Effect::NIGHT_VISION), self::MAX_DURATION, 0);
			$player->addEffect($effect);
		} else {
			$player->removeEffect(Effect::NIGHT_VISION);
		}
	}
}//클래스괄호
