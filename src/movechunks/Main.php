<?php

/**
 * 
 * 8888888b.                   888               888    8888888888                                    888    d8b          888 
 * 888   Y88b                  888               888    888                                           888    Y8P          888 
 * 888    888                  888               888    888                                           888                 888 
 * 888   d88P .d88b.   .d8888b 888  888  .d88b.  888888 8888888   .d8888b  .d8888b   .d88b.  88888b.  888888 888  8888b.  888 
 * 8888888P" d88""88b d88P"    888 .88P d8P  Y8b 888    888       88K      88K      d8P  Y8b 888 "88b 888    888     "88b 888 
 * 888       888  888 888      888888K  88888888 888    888       "Y8888b. "Y8888b. 88888888 888  888 888    888 .d888888 888 
 * 888       Y88..88P Y88b.    888 "88b Y8b.     Y88b.  888            X88      X88 Y8b.     888  888 Y88b.  888 888  888 888 
 * 888        "Y88P"   "Y8888P 888  888  "Y8888   "Y888 8888888888 88888P'  88888P'  "Y8888  888  888  "Y888 888 "Y888888 888 
 *
 * Copyright (C) 2016 PocketEssential
 *
 * This is a public software, you cannot redistribute it a and/or modify any way
 * unless otherwise given permission to do so.
 *
 * @author PocketEssential
 * @link https://github.com/PocketEssential/
 *
 */

namespace movechunks;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerMoveEvent;

class Main extends PluginBase implements Listener {
	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	public function onMove(PlayerMoveEvent $event) {
		$event->getPlayer()->getLevel()->loadChunk($event->getPlayer()->getX(), $event->getPlayer()->getZ());
	}
}
