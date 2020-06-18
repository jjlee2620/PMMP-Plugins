<?php 

namespace SONIC14\SNKillMoney;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;

//원본(onebone)님의 EconomyAPI가 필요합니다!
use onebone\economyapi\EconomyAPI;

class Main extends PluginBase implements Listener {
	
	public function onEnable() {
		$this->getLogger()->info("SNKillReward Plugin Enabled");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onDisable() {
		$this->getLogger()->info("SNKillReward Plugin Disabled");
	}
	
	public function onKill(PlayerDeathEvent $event) {
		$player = $event->getPlayer();
		$ang = $event->getEntity()->getLastDamageCause()->getDamager();
		EconomyAPI::getInstance()->addMoney($ang, 200);
		$player->sendMessage("§l§b[ §f시스템 §b]§r§7 킬 보상으로 §e200원§7을 지급받았습니다!");
	}
}//클래스괄호
