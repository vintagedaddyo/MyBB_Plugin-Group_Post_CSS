<?php
/***************************************************************************
 *
 *  Group Post CSS plugin (/inc/plugins/gpcss.php)
 *  Authors: Jammerx2, Vintagedaddyo
 *  Copyright: © 2010
 *  Website:
 *
 *  Vintagedaddyo: http://community.mybb.com/user-6029.html
 *  
 *  License: license.txt
 *
 *  Allows you to add custom CSS for each groups posts.
 *
 *  MyBB Version: 1.8
 *
 *  Plugin Version: 2.3
 *
 ***************************************************************************/

if(!defined("IN_MYBB"))
	die("This file cannot be accessed directly.");

//Add Hooks

$plugins->add_hook('admin_user_groups_edit', 'gpcss');
$plugins->add_hook('admin_user_groups_edit_commit', 'gpcss_do');
$plugins->add_hook("postbit_prev", "gpcss_post_prev");
$plugins->add_hook("postbit_pm", "gpcss_post_pm");
$plugins->add_hook("postbit_announcement", "gpcss_post_announcement");
$plugins->add_hook("postbit", "gpcss_post");


function gpcss_info()
{

//Plugin Description

    global $lang;

    $lang->load("gpcss");
    
    $lang->gpcss_Desc = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" style="float:right;">' .
        '<input type="hidden" name="cmd" value="_s-xclick">' . 
        '<input type="hidden" name="hosted_button_id" value="AZE6ZNZPBPVUL">' .
        '<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">' .
        '<img alt="" border="0" src="https://www.paypalobjects.com/pl_PL/i/scr/pixel.gif" width="1" height="1">' .
        '</form>' . $lang->gpcss_Desc;

    return Array(
        'name' => $lang->gpcss_Name,
        'description' => $lang->gpcss_Desc,
        'website' => $lang->gpcss_Web,
        'author' => $lang->gpcss_Auth,
        'authorsite' => $lang->gpcss_AuthSite,
        'version' => $lang->gpcss_Ver,
        'compatibility' => $lang->gpcss_Compat
    );
}

function gpcss_activate()
{

//Create Tables

global $mybb, $db;

	$db->query("ALTER TABLE `".TABLE_PREFIX."usergroups` ADD `gpcss1` VARCHAR(1500) NOT NULL");
	$db->query("ALTER TABLE `".TABLE_PREFIX."usergroups` ADD `gpcss2` VARCHAR(1500) NOT NULL");
	$db->query("ALTER TABLE `".TABLE_PREFIX."usergroups` ADD `gpcss3` VARCHAR(1500) NOT NULL");
	$db->query("ALTER TABLE `".TABLE_PREFIX."usergroups` ADD `gpcss4` VARCHAR(1500) NOT NULL");
	$db->query("ALTER TABLE `".TABLE_PREFIX."usergroups` ADD `gpcss5` VARCHAR(1500) NOT NULL");
	$db->query("ALTER TABLE `".TABLE_PREFIX."usergroups` ADD `gpcss6` VARCHAR(1500) NOT NULL");
	$db->query("ALTER TABLE `".TABLE_PREFIX."usergroups` ADD `gpcss7` VARCHAR(1500) NOT NULL");

	include MYBB_ROOT."/inc/adminfunctions_templates.php";


// Postbit Activate

    find_replace_templatesets("postbit", "#".preg_quote("class=\"post {\$unapproved_shade}\" style=\"{\$post_visibility}\"")."#i", "class=\"post {\$unapproved_shade}\" style=\"{\$post_visibility}{\$post['gpcss6']}\"");	
	
	find_replace_templatesets("postbit", "#".preg_quote("class=\"post_author\">")."#i", "class=\"post_author\"style=\"{\$post['gpcss1']}\">");

	find_replace_templatesets("postbit", "#".preg_quote("class=\"post_content\">")."#i", "class=\"post_content\"style=\"{\$post['gpcss2']}\">");

	find_replace_templatesets("postbit", "#".preg_quote("class=\"post_controls\">")."#i", "class=\"post_controls\"style=\"{\$post['gpcss3']}\">");


// Postbit Classic Activate

	find_replace_templatesets("postbit_classic", "#".preg_quote("class=\"post classic {\$unapproved_shade}\" style=\"{\$post_visibility}\"")."#i", "class=\"post classic {\$unapproved_shade}\" style=\"{\$post_visibility}{\$post['gpcss7']}{\$post['gpcss2']}\"");

	find_replace_templatesets("postbit_classic", "#".preg_quote("class=\"post_author scaleimages\">")."#i", "class=\"post_author scaleimages\"style=\"{\$post['gpcss1']}\">");

//	find_replace_templatesets("postbit_classic", "#".preg_quote("style=\"{\$post_visibility}\"")."#i", "style=\"{\$post['gpcss2']}{\$post_visibility}\"");	

	find_replace_templatesets("postbit_classic", "#".preg_quote("class=\"post_controls\">")."#i", "class=\"post_controls\"style=\"{\$post['gpcss4']}\">");

	find_replace_templatesets("postbit_classic", "#".preg_quote("class=\"post_content\">")."#i", "class=\"post_content\"style=\"{\$post['gpcss5']}\">");

}

function gpcss_deactivate()
{

//Drop Tables

global $mybb, $db;

	$db->query("ALTER TABLE ".TABLE_PREFIX."usergroups DROP `gpcss1`");
	$db->query("ALTER TABLE ".TABLE_PREFIX."usergroups DROP `gpcss2`");
	$db->query("ALTER TABLE ".TABLE_PREFIX."usergroups DROP `gpcss3`");
	$db->query("ALTER TABLE ".TABLE_PREFIX."usergroups DROP `gpcss4`");
	$db->query("ALTER TABLE ".TABLE_PREFIX."usergroups DROP `gpcss5`");
	$db->query("ALTER TABLE ".TABLE_PREFIX."usergroups DROP `gpcss6`");
	$db->query("ALTER TABLE ".TABLE_PREFIX."usergroups DROP `gpcss7`");

	include MYBB_ROOT."/inc/adminfunctions_templates.php";


// Postbit Deactivate

	find_replace_templatesets("postbit", "#".preg_quote("style=\"{\$post_visibility}{\$post['gpcss6']}\"")."#i", "style=\"{\$post_visibility}\"", 0);


	find_replace_templatesets("postbit", "#".preg_quote("style=\"{\$post['gpcss1']}\">")."#i", ">", 0);

	find_replace_templatesets("postbit", "#".preg_quote("style=\"{\$post['gpcss2']}\">")."#i", ">", 0);

	find_replace_templatesets("postbit", "#".preg_quote("style=\"{\$post['gpcss3']}\">")."#i", ">", 0);


// Postbit Classic Deactivate

	find_replace_templatesets("postbit_classic", "#".preg_quote("style=\"{\$post_visibility}{\$post['gpcss7']}{\$post['gpcss2']}\"")."#i", "style=\"{\$post_visibility}\"", 0);

	find_replace_templatesets("postbit_classic", "#".preg_quote("style=\"{\$post['gpcss1']}\">")."#i", ">", 0);

//	find_replace_templatesets("postbit_classic", "#".preg_quote("{\$post['gpcss2']}")."#i", "", 0);

	find_replace_templatesets("postbit_classic", "#".preg_quote("style=\"{\$post['gpcss4']}\">")."#i", ">", 0);

	find_replace_templatesets("postbit_classic", "#".preg_quote("style=\"{\$post['gpcss5']}\">")."#i", ">", 0);

}

function gpcss()
{

//Add Hook

global $plugins;

$plugins->add_hook("admin_formcontainer_output_row", "gpcss_row");

}

function gpcss_do()
{
global $db, $mybb, $usergroup;
	
	$update_array = array(
		"gpcss1" => $db->escape_string($mybb->input['gpcss1']),
		"gpcss2" => $db->escape_string($mybb->input['gpcss2']),
		"gpcss3" => $db->escape_string($mybb->input['gpcss3']),
		"gpcss4" => $db->escape_string($mybb->input['gpcss4']),
		"gpcss5" => $db->escape_string($mybb->input['gpcss5']),
		"gpcss6" => $db->escape_string($mybb->input['gpcss6']),
		"gpcss7" => $db->escape_string($mybb->input['gpcss7']),				
	);

	$db->update_query("usergroups", $update_array, "gid='".intval($usergroup['gid'])."'");

}

function gpcss_row(&$pluginargs)
{

//Add Row

global $db, $mybb, $lang, $user, $form, $form_container, $usergroup;

    $lang->load("gpcss");


if($pluginargs['title'] == $lang->misc)
{
	//Setting 1

		$gpcss1 = array(
			$form->generate_text_area('gpcss1', $usergroup['gpcss1'], array()),
			);
		$form_container->output_row("{$lang->gpcss_1_Title}", "{$lang->gpcss_1_Description}", "<div class=\"group_settings_bit\">".implode("</div><div class=\"group_settings_bit\">", $gpcss1)."</div>");

	//Setting 2

		$gpcss2 = array(
			$form->generate_text_area('gpcss2', $usergroup['gpcss2'], array()),
			);
		$form_container->output_row("{$lang->gpcss_2_Title}", "{$lang->gpcss_2_Description}", "<div class=\"group_settings_bit\">".implode("</div><div class=\"group_settings_bit\">", $gpcss2)."</div>");

	//Setting 3

		$gpcss3 = array(
			$form->generate_text_area('gpcss3', $usergroup['gpcss3'], array()),
			);
		$form_container->output_row("{$lang->gpcss_3_Title}", "{$lang->gpcss_3_Description}", "<div class=\"group_settings_bit\">".implode("</div><div class=\"group_settings_bit\">", $gpcss3)."</div>");

	//Setting 4

		$gpcss4 = array(
			$form->generate_text_area('gpcss4', $usergroup['gpcss4'], array()),
			);
		$form_container->output_row("{$lang->gpcss_4_Title}", "{$lang->gpcss_4_Description}", "<div class=\"group_settings_bit\">".implode("</div><div class=\"group_settings_bit\">", $gpcss4)."</div>");

	//Setting 5
		
		$gpcss5 = array(
			$form->generate_text_area('gpcss5', $usergroup['gpcss5'], array()),
			);
		$form_container->output_row("{$lang->gpcss_5_Title}", "{$lang->gpcss_5_Description}", "<div class=\"group_settings_bit\">".implode("</div><div class=\"group_settings_bit\">", $gpcss5)."</div>");

	//Setting 6
		
		$gpcss6 = array(
			$form->generate_text_area('gpcss6', $usergroup['gpcss6'], array()),
			);
		$form_container->output_row("{$lang->gpcss_6_Title}", "{$lang->gpcss_6_Description}", "<div class=\"group_settings_bit\">".implode("</div><div class=\"group_settings_bit\">", $gpcss6)."</div>");

	//Setting 7
		
		$gpcss7 = array(
			$form->generate_text_area('gpcss7', $usergroup['gpcss7'], array()),
			);
		$form_container->output_row("{$lang->gpcss_7_Title}", "{$lang->gpcss_7_Description}", "<div class=\"group_settings_bit\">".implode("</div><div class=\"group_settings_bit\">", $gpcss7)."</div>");				
}
}

function gpcss_post_prev(&$post)
{
	global $db, $mybb, $postbit, $templates;
	
	$group = usergroup_permissions($post['usergroup']);
	
	$post['gpcss1'] = $group['gpcss1'];
	$post['gpcss2'] = $group['gpcss2'];
	$post['gpcss3'] = $group['gpcss3'];
	$post['gpcss4'] = $group['gpcss4'];
	$post['gpcss5'] = $group['gpcss5'];
	$post['gpcss6'] = $group['gpcss6'];
	$post['gpcss7'] = $group['gpcss7'];		
	
	eval("\$postbit = \"".$templates->get("postbit")."\";");
	
}

function gpcss_post_pm(&$post)
{
	global $db, $mybb, $postbit, $templates;
	
	$group = usergroup_permissions($post['usergroup']);
	
	$post['gpcss1'] = $group['gpcss1'];
	$post['gpcss2'] = $group['gpcss2'];
	$post['gpcss3'] = $group['gpcss3'];
	$post['gpcss4'] = $group['gpcss4'];
	$post['gpcss5'] = $group['gpcss5'];
	$post['gpcss6'] = $group['gpcss6'];
	$post['gpcss7'] = $group['gpcss7'];		
	
	eval("\$postbit = \"".$templates->get("postbit")."\";");
	
}

function gpcss_post_announcement(&$post)
{
	global $db, $mybb, $postbit, $templates;
	
	$group = usergroup_permissions($post['usergroup']);
	
	$post['gpcss1'] = $group['gpcss1'];
	$post['gpcss2'] = $group['gpcss2'];
	$post['gpcss3'] = $group['gpcss3'];
	$post['gpcss4'] = $group['gpcss4'];
	$post['gpcss5'] = $group['gpcss5'];
	$post['gpcss6'] = $group['gpcss6'];
	$post['gpcss7'] = $group['gpcss7'];		
	
	eval("\$postbit = \"".$templates->get("postbit")."\";");
	
}

function gpcss_post(&$post)
{
	global $db, $mybb, $postbit, $templates;
	
	$group = usergroup_permissions($post['usergroup']);
	
	$post['gpcss1'] = $group['gpcss1'];
	$post['gpcss2'] = $group['gpcss2'];
	$post['gpcss3'] = $group['gpcss3'];
	$post['gpcss4'] = $group['gpcss4'];
	$post['gpcss5'] = $group['gpcss5'];
	$post['gpcss6'] = $group['gpcss6'];
	$post['gpcss7'] = $group['gpcss7'];	

	eval("\$postbit = \"".$templates->get("postbit")."\";");
	
}
?>