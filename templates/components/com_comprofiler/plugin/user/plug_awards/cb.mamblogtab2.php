<?php
/**
* Blog Tab Class for handling the CB tab api
* @version $Id: cb.mamblogtab.php 1812 2012-06-20 07:50:34Z beat $
* @package Community Builder
* @subpackage cb.mamblog.php
* @author JoomlaJoe - Thanks to Jeffrey Hill for pagination and search additions
* @copyright (C) JoomlaJoe and Beat, www.joomlapolis.com
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU/GPL version 2
*/

// ensure this file is being included by a parent file
if ( ! ( defined( '_VALID_CB' ) || defined( '_JEXEC' ) || defined( '_VALID_MOS' ) ) ) { die( 'Direct Access to this location is not allowed.' ); }


class getBlogTab2 extends cbTabHandler {
	
	function getBlogTab2() {
		$this->cbTabHandler();
	}

	function getDisplayTab($tab,$user,$ui) {
		$return		= "";

		//global $_CB_database, $_CB_framework, $mainframe;

		$total_crop	= 0;
		$db		= JFactory::getDBO();
	//	$user		= JFactory::getUser();
		$query		= "SELECT * FROM #__jigs_buildings WHERE #__jigs_buildings.owner = $user->id ORDER BY type;";
		$db->setQuery($query);
		$result		= $db->loadObjectList(); 
	
	//print_r($user->_frontendNonComprofilerVars);
		//print_r($user->id);
		//exit();

$return .=  '<div style= "width:250px ; float:left;" >';
$return .=  '<table class="shade-table">';

//print_r ($this->skills);
//$return .=  '<tr><td>' . $this->skills->name_1 . '</td><td>Level : 1</td></tr>';
//$return .=  '<tr><td>' . $this->skills->name_2 . '</td><td>Level : 1</td></tr>';
///$return .= ' <tr><td>' . $this->skills->name_3 . '</td><td>Level : 1</td></tr>';
//$return .=  '<tr><td>' . $this->skills->name_4 . '</td><td>Level : 1</td></tr>';	
//$return .=  '<tr><td>' . $this->skills->name_5 . '</td><td>Level : 1</td></tr>';
//$return .=  '<tr><td>' . $this->skills->name_6 . '</td><td>Level : 1</td></tr>';
//$return .=  '<tr><td>' . $this->skills->name_7 . '</td><td>Level : 1</td></tr>';
//$return .=  '<tr><td>' . $this->skills->name_8 . '</td><td>Level : 1</td></tr>';	
		
$return .= '	</table></div>	';


		
 foreach ($result as $row){
		//	$return .=  $row->id . " " . $row->type . "<br>";
		}
		
		


		return $return; 
    } 
}	
?>
