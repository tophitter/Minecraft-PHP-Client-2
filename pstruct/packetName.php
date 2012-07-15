<?php

/*


           -
         /   \
      /         \
   /   MINECRAFT   \
/         PHP         \
|\       CLIENT      /|
|.   \     2     /   .|
| ..     \   /     .. |
|    ..    |    ..    |
|       .. | ..       |
\          |          /
   \       |       /
      \    |    /
         \ | /
         
         
	by @shoghicp

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Lesser General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.


*/

$packetName = array(
	"00" => "Keep Alive",
	"01" => "Login",
	"02" => "Handshake",
	"03" => "Chat Message",
	"04" => "Time Update",
	"05" => "Entity Equipment",
	"06" => "Spawn Position",
	"07" => "Use Entity",
	"08" => "Update Health",
	"09" => "Respawn",
	"0a" => "Player",
	"0b" => "Player Position",
	"0c" => "Player Look",
	"0d" => "Player Position & Look",
	"0e" => "Player Digging",
	"0f" => "Player Block Placement",
	"10" => "Slot Change",
	"11" => "Use Bed",
	"12" => "Animation",
	"13" => "Entity Action",
	"14" => "Spawn Named Entity",
	"15" => "Spawn Dropped Item",
	"16" => "Collect Item",
	"17" => "Spawn Object/Vehicle",
	"18" => "Spawn Mob",
	"19" => "Spawn Painting",
	"1a" => "Spawn Experience Orb",
	"1c" => "Entity Velocity",
	"1d" => "Destroy Entity",
	"1e" => "Entity",
	"1f" => "Entity Relative Move",
	"20" => "Entity Look",
	"21" => "Entity Look & Relative Move",
	"22" => "Entity Teleport",
	"23" => "Entity Head Look",
	
	"26" => "Entity Status",
	"27" => "Attach Entity",
	"28" => "Entity Metadata",
	"29" => "Entity Effect",
	"2a" => "Remove Entity Effect",
	"2b" => "Set Experience",
	
	"32" => "Chunk Allocation",
	"33" => "Chunk Data",
	"34" => "Multi Block Change",
	"35" => "Block Change",
	"36" => "Block Action",
	"37" => "Block Break Animation",
	"38" => "Map Chunk Bulk",	
	
	"3c" => "Explosion",
	"3d" => "Sound/Particle Effect",
	"3e" => "Named Sound Effect",
	
	"46" => "Change Game State",
	"47" => "Thunderbolt",
	
	"64" => "Open Window",
	"65" => "Close Window",
	"66" => "Click Window",
	"67" => "Set Slot",
	"68" => "Set Window Items",
	"69" => "Update Window Property",
	"6a" => "Confirm Transaction",
	"6b" => "Creative Inventory Action",
	"6c" => "Enchant Item",
	
	"82" => "Update Sign",
	"83" => "Item Data",
	"84" => "Update Tile Entity",
	
	"c8" => "Increment Statistic",
	"c9" => "Player List Item",	
	"ca" => "Player Abilities",
	"cb" => "Tab-complete",
	"cc" => "Locale and View Distance",
	"cd" => "Client Statuses",
	
	"fa" => "Plugin Message",
	
	"fc" => "Encryption Key Response",
	"fd" => "Encryption Key Request",
	"fe" => "Server List Ping",
	"ff" => "Kick",
	
);