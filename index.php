<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license Modified MIT License
 * @link https://blueimp.net/ajax/
 */

// Suppress errors.
error_reporting(0);

// Path to the chat directory:
define('AJAX_CHAT_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');

// Custom configuration files
define('SPECTATOR_CONFIG_FILE_PREFIX', AJAX_CHAT_PATH.'lib/data/spectator_');
define('SCORE_FILE', AJAX_CHAT_PATH.'lib/data/scores.php');
define('NAME_CHANGE_FILE', AJAX_CHAT_PATH.'lib/data/change_name.php');
define('GAME_LOG_DIR', AJAX_CHAT_PATH.'gamelogs/');
define('ISOLATED_LIST', AJAX_CHAT_PATH.'lib/data/isolated.php');

// Include custom libraries and initialization code:
require(AJAX_CHAT_PATH.'lib/custom.php');

// Include Class libraries:
require(AJAX_CHAT_PATH.'lib/classes.php');

// Initialize the chat:
$ajaxChat = new CustomAJAXChat();
?>
