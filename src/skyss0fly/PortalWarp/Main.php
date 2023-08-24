<?php

namespace skyss0fly\PortalWarp;

use pocketmine\{plugin\PluginBase, command\CommandSender, command\Command,  player\Player, block\NetherPortal};


class Main extends PluginBase {

private $warps = [];

  
public function onEnable():void {
$this->saveDefaultConfig();

}

public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch ($command->getName()) {
            case "pw":


  }


}
