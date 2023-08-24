<?php
declare(strict_types=1);
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
private function registerwarp(){
$wname = onCommand::warpName();
       $x = onCommand::$sender->getPosition()->getX();
        $y = onCommand::$sender->getPosition()->getY();
        $z = onCommand::$sender->getPosition()->getZ();
$wcoords = $x . $y . $z
$warpfolder = file_get_contents('./warps.yml', true);
  $data = '$wname . $wcoords'
  file_put_contents($data);
  

}


}
