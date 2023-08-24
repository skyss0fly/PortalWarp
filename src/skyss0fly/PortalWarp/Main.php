<?php
declare(strict_types=1);
namespace skyss0fly\PortalWarp;

use pocketmine\{plugin\PluginBase, command\CommandSender, utils\TextFormat command\Command,  player\Player, block\NetherPortal};


class Main extends PluginBase {

private $warps = [];

  
public function onEnable():void {
$this->saveDefaultConfig();

}

public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch ($command->getName()) {
            case "pw":
  if (!$sender instanceof Player){
$sender->sendMessage(TEXTFORMAT::RED . "ERROR: Not In Game");
  }
          if ($args = 0){
$sender->sendMessage(TEXTFOMAT::YELLOW . "Usage: /pw <command>  \n>> Do /pw help for a list of commands");

          }
          if ($args = 1) {
$sender->sendMessage(TEXTFORMAT::YELLOW . "Commands: \n>> /pw setwarp <warpname> \n>> /pw delwarp <warpname> \n>> /pw creatportal <warpname>");
            
          }
             if ($args = 2) {
               if (!$sender->hasPermission("PortalWarp.setwarp")){
$sender->sendMessage(TEXTFORMAT::RED . "ERROR: You Dont have permission to use this command!");
             }
               else {
$this->registerWarp($args);
               }
          }
}
}

private function registerWarp(){
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
