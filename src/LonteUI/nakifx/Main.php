<?php

namespace LonteUI\nakifx;

use pocketmine\Player;
use pocketmine\Server;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\TextFormat;
use jojoe77777\FormAPI;

class Main extends PluginBase implements Listener
{
    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		switch($cmd->getName()){
			case "lonte":
                $this->iLoveYou($sender);
            break;
        }
        return true;
    }
    public function iLoveYou($sender){
        $api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
        $form = $api->createSimpleForm(function (Player $sender, int $data = null){
            $result = $data;
            if($result === null){
                return true;
                switch($result){
                    case 0:
                    break;
                }
            }
        });
        $form->setTitle("§l§8Daftar Bokep §7§o((ft. 3 author sange))§r");
        $form->setContent("");
        $form->addButton("§5Mia khalifa\n§7Pemain bokep nomor 1", 1, "https://www.newsx.com/wp-content/uploads/2018/01/Mia-Khalifa-Photos-12.jpg");
        $form->addButton("§5:v TeteX\n§7Ah Tetex UwU", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcToF4iFru7FBpeQwiY3-dPQdTVLSJW4Zyk-5g&usqp=CAU.jpg");
        $form->addButton("§4WOI\n§7NGAJAK TAWURAN?", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR3avpnnuIPe6F3YfkkuUk4R15e5m4AmOVSWw&usqp=CAU.jpg");
        $form->addButton("§1Stonk Sange\n§7Ea Culi culi", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSWjRCE0sGjXqVVLbE8OIJp3Hq0443cTftH9g&usqp=CAU.jpg");
        $form->addButton("§cHAYOOOO\n§7PENTIL KUDA", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRY3oPx8d0-LopJd6GaQAOwexcYjyrQE410xQ&usqp=CAU.jpg");
        $form->addButton("§6YES YES AH\n§7masukin lagi say yes", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT4igfCK5oEqhPJ9TrgmY37qSazO43UZFR-IQ&usqp=CAU.jpg");
        $form->addButton("§c§lT H I C C\n§7woah memek gede :u", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRLuQ3XIt8TmOXtxsuwbFJBc_YNfli8UrwnBQ&usqp=CAU.jpg");
        $form->addButton("§gYES YES CROT\n§6GOOD YES HONEY AH", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR0KulHrnEu0E0rgOe-sPvv93RL45TMsOX39g&usqp=CAU.jpg");
        $form->addButton("§9TE TEKX\n§6NSFW listyChan :U", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTilxuADcau5ScJE2wxhjxeVacnasiX8jhVoA&usqp=CAU.jpg");
        $form->addButton("§2CPROT\n§bYah kecolok :U", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTTcnMpB4w5-MU2cawANtS3QuT5x5UwOUuoMQ&usqp=CAU.jpg");
        $form->addButton("§3Ahh Basah\n§8Memek ku basah :)", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRw4G9NOt6EC6nwQgioljELbw8PDLQIe2LzsA&usqp=CAU.jpg");
        $form->addButton("§cIKEH IKEH\n§6Ahh Oni-Chan", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRtitcrHgT4f9NfnrASbuMvHgjhRe30jeV9hw&usqp=CAU.jpg");
        $form->addButton("§aoniii-chann Ahh\n§dYesss Guud", 1, "https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQ_AevifEFoin-3FkcwQsEMn4CHV9ljK4dl7Q&usqp=CAU.jpg");
        $form->sendToPlayer($sender);
        return $form;

    }
}
