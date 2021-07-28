<?php

namespace EasyGM;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use pocketmine\Player;

class Main extends Pluginbase{

public function onEnable() {
$this->getLogger()->info(TextFormat:: RED."EasyGM was activated. Check out my other plugins at github.com/debugkokichi");
}

public function onDisable() {
$this->getLogger()->info(TextFormat::RED."EasyGm was deactivated! Check out my other plugins at github.com/debugkokichi");
}

public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool{

switch($cmd->getName()){

case "gm1":
if($sender instanceof Player){
if($sender->hasPermission("gm1.cmd")){
$sender->setGamemode(1);
$sender->sendMessage("You are now in §bGamemode 1.");
}else{
$sender->sendMessage("§cOop. Seems like you don't have permission to do that.");
}
}
break;

case "gm0":
if($sender instanceof Player){
if($sender->hasPermission("gm0.cmd")){
$sender->setGamemode(0);
$sender->sendMessage("You are now in §bGamemode 0.");
}else{
$sender->sendMessage("§cOop. Seems like you don't have permission to do that.");
}
}
break;

case "gm2":
if($sender instanceof Player){
if($sender->hasPermission("gm2.cmd")){
$sender->setGamemode(2);
$sender->sendMessage("You are now in §bGamemode 2.");
}else{
$sender->sendMessage("§cOop. Seems like you don't have permission to do that.");
}
}
break;

case "gm3":
if($sender instanceof Player){
if($sender->hasPermission("gm3.cmd")){
$sender->setGamemode(3);
$sender->sendMessage("You are now in §bGamemode 3.");
}else{
$sender->sendMessage("§cOop. Seems like you don't have permission to do that.");
}
}
break;
}
return true;
}
}