<?php
/*
 * @package AJAX_Chat
 * @author Sebastian Tschan
 * @copyright (c) Sebastian Tschan
 * @license Modified MIT License
 * @link https://blueimp.net/ajax/
 */

$lang = array();
$lang['title'] = 'AJAX Chat';
$lang['userName'] = 'Username';
$lang['password'] = 'Password';
$lang['login'] = 'Login';
$lang['logout'] = 'Logout';
$lang['channel'] = 'Channel';
$lang['style'] = 'Style';
$lang['language'] = 'Language';
$lang['inputLineBreak'] = 'Press SHIFT+ENTER to input a line break';
$lang['messageSubmit'] = 'Submit';
$lang['registeredUsers'] = 'Registered Users';
$lang['onlineUsers'] = 'Online users';
$lang['toggleAutoScroll'] = 'Autoscroll on/off';
$lang['toggleAudio'] = 'Sound on/off';
$lang['toggleHelp'] = 'Show/hide help';
$lang['toggleSettings'] = 'Show/hide settings';
$lang['toggleOnlineList'] = 'Show/hide online list';
$lang['bbCodeLabelBold'] = 'b';
$lang['bbCodeLabelItalic'] = 'i';
$lang['bbCodeLabelUnderline'] = 'u';
$lang['bbCodeLabelQuote'] = 'Quote';
$lang['bbCodeLabelCode'] = 'Code';
$lang['bbCodeLabelURL'] = 'URL';
$lang['bbCodeLabelImg'] = 'Image';
$lang['bbCodeLabelColor'] = 'Font Color';
$lang['bbCodeTitleBold'] = 'Bold text: [b]text[/b]';
$lang['bbCodeTitleItalic'] = 'Italic text: [i]text[/i]';
$lang['bbCodeTitleUnderline'] = 'Underline text: [u]text[/u]';
$lang['bbCodeTitleQuote'] = 'Quote text: [quote]text[/quote] or [quote=author]text[/quote]';
$lang['bbCodeTitleCode'] = 'Code display: [code]code[/code]';
$lang['bbCodeTitleURL'] = 'Insert URL: [url]http://example.org[/url] or [url=http://example.org]text[/url]';
$lang['bbCodeTitleImg'] = 'Insert image: [img]http://example.org/image.jpg[/img]';
$lang['bbCodeTitleColor'] = 'Font Color: [color=red]text[/color]';
$lang['help'] = 'Help';
$lang['helpItemDescJoin'] = 'Join a channel:';
$lang['helpItemCodeJoin'] = '/join Channelname';
$lang['helpItemDescJoinCreate'] = 'Create a private room (Registered users only):';
$lang['helpItemCodeJoinCreate'] = '/join';
$lang['helpItemDescInvite'] = 'Invite someone (e.g. to a private room):';
$lang['helpItemCodeInvite'] = '/invite Username';
$lang['helpItemDescUninvite'] = 'Revoke invitation:';
$lang['helpItemCodeUninvite'] = '/uninvite Username';
$lang['helpItemDescLogout'] = 'Logout from Chat:';
$lang['helpItemCodeLogout'] = '/quit';
$lang['helpItemDescPrivateMessage'] = 'Private message:';
$lang['helpItemCodePrivateMessage'] = '/msg Username Text';
$lang['helpItemDescQueryOpen'] = 'Open a private channel:';
$lang['helpItemCodeQueryOpen'] = '/query Username';
$lang['helpItemDescQueryClose'] = 'Close a private channel:';
$lang['helpItemCodeQueryClose'] = '/query';
$lang['helpItemDescAction'] = 'Describe action:';
$lang['helpItemCodeAction'] = '/action Text';
$lang['helpItemDescDescribe'] = 'Describe action in private message:';
$lang['helpItemCodeDescribe'] = '/describe Username Text';
$lang['helpItemDescIgnore'] = 'Ignore/accept messages from user:';
$lang['helpItemCodeIgnore'] = '/ignore Username';
$lang['helpItemDescIgnoreList'] = 'List ignored users:';
$lang['helpItemCodeIgnoreList'] = '/ignore';
$lang['helpItemDescWhereis'] = 'Display user channel:';
$lang['helpItemCodeWhereis'] = '/whereis Username';
$lang['helpItemDescKick'] = 'Kick a user (Moderators only):';
$lang['helpItemCodeKick'] = '/kick Username [Minutes banned]';
$lang['helpItemDescUnban'] = 'Unban a user (Moderators only):';
$lang['helpItemCodeUnban'] = '/unban Username';
$lang['helpItemDescBans'] = 'List banned users (Moderators only):';
$lang['helpItemCodeBans'] = '/bans';
$lang['helpItemDescWhois'] = 'Display user IP (Moderators only):';
$lang['helpItemCodeWhois'] = '/whois Username';
$lang['helpItemDescWho'] = 'List online users:';
$lang['helpItemCodeWho'] = '/who [Channelname]';
$lang['helpItemDescList'] = 'List available channels:';
$lang['helpItemCodeList'] = '/list';
$lang['helpItemDescRoll'] = 'Roll dice:';
$lang['helpItemCodeRoll'] = '/roll [number]d[sides]';
$lang['helpItemDescNick'] = 'Change username:';
$lang['helpItemCodeNick'] = '/nick Username';
$lang['settings'] = 'Settings';
$lang['settingsBBCode'] = 'Enable BBCode:';
$lang['settingsBBCodeImages'] = 'Enable image BBCode:';
$lang['settingsBBCodeColors'] = 'Enable font color BBCode:';
$lang['settingsHyperLinks'] = 'Enable hyperlinks:';
$lang['settingsLineBreaks'] = 'Enable line breaks:';
$lang['settingsEmoticons'] = 'Enable emoticons:';
$lang['settingsAutoFocus'] = 'Automatically set the focus on the input field:';
$lang['settingsMaxMessages'] = 'Maximum number of messages in the chatlist:';
$lang['settingsWordWrap'] = 'Enable wrapping of long words:';
$lang['settingsMaxWordLength'] = 'Maximum length of a word before it gets wrapped:';
$lang['settingsDateFormat'] = 'Format of date and time display:';
$lang['settingsPersistFontColor'] = 'Persist font color:';
$lang['settingsAudioVolume'] = 'Sound Volume:';
$lang['settingsSoundReceive'] = 'Sound for incoming messages:';
$lang['settingsSoundSend'] = 'Sound for outgoing messages:';
$lang['settingsSoundEnter'] = 'Sound for login and channel enter messages:';
$lang['settingsSoundLeave'] = 'Sound for logout and channel leave messages:';
$lang['settingsSoundChatBot'] = 'Sound for chatbot messages:';
$lang['settingsSoundError'] = 'Sound for error messages:';
$lang['settingsBlink'] = 'Blink window title on new messages:';
$lang['settingsBlinkInterval'] = 'Blink interval in milliseconds:';
$lang['settingsBlinkIntervalNumber'] = 'Number of blink intervals:';
$lang['playSelectedSound'] = 'Play selected sound';
$lang['requiresJavaScript'] = 'JavaScript is required for this Chat.';
$lang['errorInvalidUser'] = 'Invalid username.';
$lang['errorUserInUse'] = 'Username in use.';
$lang['errorBanned'] = 'User or IP is banned.';
$lang['errorMaxUsersLoggedIn'] = 'The chat has reached the maximum number of logged-in users.';
$lang['errorChatClosed'] = 'The chat is closed at the moment.';
$lang['logsTitle'] = 'AJAX Chat - Logs';
$lang['logsDate'] = 'Date';
$lang['logsTime'] = 'Time';
$lang['logsSearch'] = 'Search';
$lang['logsPrivateChannels'] = 'Private Channels';
$lang['logsPrivateMessages'] = 'Private Messages';

/* Customize for arena.olympiavn.org */
$lang['scoreBoard'] = 'Score';
$lang['spOn'] = 'Spectators are now allowed to chat in public';
$lang['spOff'] = 'Spectators are now NOT allowed to chat in public';
$lang['ncOn'] = 'Players are now allowed to change display name';
$lang['ncOff'] = 'Players are now NOT allowed to change display name';
$lang['clearedAll'] = 'All messages have been removed from database';
?>