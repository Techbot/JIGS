<?php
defined('_JEXEC') or die;
jimport('joomla.plugin.plugin');


	//		$user_id= $user['id'];
	//		$user_username= $user['username'];
			$db = JFactory::getDBO();
			$query = "INSERT INTO jos_jigs_players2 (iduser) VALUES (1)";
		$db->setQuery($query);
		$result = $db->query();
	

  
