<?php

namespace ClearChat\ClearChat;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\level\particle\FlameParticle;
use pocketmine\level\sound\LaunchSound;
use pocketmine\math\Vector3;
use pocketmine\utils\TextFormat as Color;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerMoveEvent;

class Main extends PluginBase implements Listener{
	
		public function onEnable(){
			$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		if(strtolower($command->getName()) == "cc"){
			$senderName = $sender->getName();
			$this->getServer()->broadcastMessage("§aChat Being cleared");
			$this->getServer()->broadcastMessage("§athis can lead to many things");
			$this->getServer()->broadcastMessage("§aSuch as:");
			$this->getServer()->broadcastMessage("§bAdvertising");
			$this->getServer()->broadcastMessage("§bSpamming");
			$this->getServer()->broadcastMessage("§bSwearing");
			$this->getServer()->broadcastMessage("§bAnd more.");
			$this->getServer()->broadcastMessage("§cChat being cleared by §b$senderName ..");
			$this->getServer()->broadcastMessage("§cPlease wait...");
			$this->getServer()->broadcastMessage("§cChat being removed by §b$senderName ...");
			$this->getServer()->broadcastMessage("§cThis should work pretty quickly now.");
			$this->getServer()->broadcastMessage("§dWelcome to VoidfactionsPE! :) We're just fixing the chat.");
			$this->getServer()->broadcastMessage("§dChat removed. Adding messages.");
			$this->getServer()->broadcastMessage("§dClearChat plugin, updated by Zeao. ;)");
			$this->getServer()->broadcastMessage("§dChatClear is a wonderful system. :D");
			$this->getServer()->broadcastMessage("§eDid you know, Minecraft was created in 2009?");
			$this->getServer()->broadcastMessage("§eDid you know, §6Void§bFactions§cPE §dwas created just 1 year ago in March?");
			$this->getServer()->broadcastMessage("§eWelcome to Season 2! Built by our amazing staff team");
			$this->getServer()->broadcastMessage("§eChat Clear is now being produced.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§6Clearing Chat.");
			$this->getServer()->broadcastMessage("§aClear Chat has been cleared by §b$senderName");
			return true;
		}
	}
}
