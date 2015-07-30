<?php

namespace easymessages\task;

use easymessages\EasyMessagesAPI;
use pocketmine\scheduler\PluginTask;

class InfinitePopupTask extends PluginTask{
    public function __construct(EasyMessagesAPI $plugin){
        parent::__construct($plugin);
        $this->plugin = $plugin;
    }
    public function getPlugin(){
        return $this->plugin;
    }
    public function onRun($currentTick){
        $this->getPlugin()->broadcastPopup($this->getConfig()->getNested("popup.infiniteMessage"));
    }
}
