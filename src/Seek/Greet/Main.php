<?php

namespace Seek\Greet;

use pocketmine\command\Command;
use pocketmine\command\ComamndSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase;

public function onEnable(){
    }
public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $commandName = $command->getName();
    if($commandName === "greet"){
      $sender->sendMessage("Hi!");
      return true;
    }
    return false;
  }
