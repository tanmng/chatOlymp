<?php

/*

 * @package AJAX_Chat

 * @author Sebastian Tschan

 * @copyright (c) Sebastian Tschan

 * @license Modified MIT License

 * @link https://blueimp.net/ajax/

 */



// List containing the registered chat users:
$users = array();

// Default guest user (don't delete this one):
$users[0] = array();
$users[0]['userRole'] = AJAX_CHAT_GUEST;
$users[0]['userName'] = null;
$users[0]['password'] = null;
$users[0]['channels'] = array(0);

// Sample admin user:
$users[1] = array();
$users[1]['userRole'] = AJAX_CHAT_ADMIN;
$users[1]['userName'] = 'mltd';
$users[1]['password'] = 'admin321';
$users[1]['displayName'] = 'Minh_Lâm';
$users[1]['channels'] = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

// Sample admin user:
$users[2] = array();
$users[2]['userRole'] = AJAX_CHAT_ADMIN;
$users[2]['userName'] = 'admin';
$users[2]['password'] = 'admin123';
$users[2]['displayName'] = 'Mạnh Tấn';
$users[2]['channels'] = array(0,1,2,3,4,5,6,7,8,9,10,11,13,14,15);

// Sample admin user:
$users[3] = array();
$users[3]['userRole'] = AJAX_CHAT_ADMIN;
$users[3]['userName'] = 'admin2';
$users[3]['password'] = 'admin321';
$users[3]['displayName'] = 'Thanh Tâm';
$users[3]['channels'] = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

// Sample moderator user:
$users[4] = array();
$users[4]['userRole'] = AJAX_CHAT_MODERATOR;
$users[4]['userName'] = 'gm01';
$users[4]['password'] = 'abc123';
$users[4]['displayName'] = 'Mạnh Tấn';
$users[4]['channels'] = array(0,1,2,3,4,5,6,7,8,9,10,11);

// Sample moderator user:
$users[5] = array();
$users[5]['userRole'] = AJAX_CHAT_MODERATOR;
$users[5]['userName'] = 'gm02';
$users[5]['password'] = 'def321';
$users[5]['channels'] = array(0,1);

// Sample moderator user:
$users[6] = array();
$users[6]['userRole'] = AJAX_CHAT_MODERATOR;
$users[6]['userName'] = 'gm03';
$users[6]['password'] = 'bcd123';
$users[6]['channels'] = array(0,1);

// Sample moderator user:
$users[7] = array();
$users[7]['userRole'] = AJAX_CHAT_MODERATOR;
$users[7]['userName'] = 'gm04';
$users[7]['password'] = 'xyz321';
$users[7]['displayName'] = 'Đan Phương';
$users[7]['channels'] = array(0,1);

// Sample moderator user:
$users[8] = array();
$users[8]['userRole'] = AJAX_CHAT_MODERATOR;
$users[8]['userName'] = 'gm05';
$users[8]['password'] = 'xyz456';
$users[8]['displayName'] = 'Thùy Dung';
$users[8]['channels'] = array(0,1);

// Sample moderator user:
$users[9] = array();
$users[9]['userRole'] = AJAX_CHAT_MODERATOR;
$users[9]['userName'] = 'gm06';
$users[9]['password'] = 'xyz789';
$users[9]['channels'] = array(0,1);

// Sample moderator user:
$users[10] = array();
$users[10]['userRole'] = AJAX_CHAT_MODERATOR;
$users[10]['userName'] = 'gm07';
$users[10]['password'] = 'xyz654';
$users[10]['channels'] = array(0,1);

// Sample registered user:
$users[11] = array();
$users[11]['userRole'] = AJAX_CHAT_USER;
$users[11]['userName'] = 'thisinh01';
$users[11]['password'] = '882733';
$users[11]['displayName'] = 'NKTPO_Trung Hiếu';
$users[11]['channels'] = array(0,1,6);

// Sample registered user:
$users[12] = array();
$users[12]['userRole'] = AJAX_CHAT_USER;
$users[12]['userName'] = 'thisinh02';
$users[12]['password'] = 'gala12345';
$users[12]['displayName'] = 'GALA6_RECORDER';
$users[12]['channels'] = array(0,1);

// Sample registered user:
$users[13] = array();
$users[13]['userRole'] = AJAX_CHAT_USER;
$users[13]['userName'] = 'thisinh03';
$users[13]['password'] = '193895';
$users[13]['displayName'] = 'QHH_Ngọc Hân';
$users[13]['channels'] = array(0,1,11);

// Sample registered user:
$users[14] = array();
$users[14]['userRole'] = AJAX_CHAT_USER;
$users[14]['userName'] = 'thisinh04';
$users[14]['password'] = '165826';
$users[14]['displayName'] = 'NKTPO_CĐV 01';
$users[14]['channels'] = array(0,1,6);

// Sample registered user:
$users[15] = array();
$users[15]['userRole'] = AJAX_CHAT_USER;
$users[15]['userName'] = 'thisinh05';
$users[15]['password'] = '144749';
$users[15]['displayName'] = 'NKTPO_CĐV 02';
$users[15]['channels'] = array(0,1,6);

// Sample registered user:
$users[16] = array();
$users[16]['userRole'] = AJAX_CHAT_USER;
$users[16]['userName'] = 'thisinh06';
$users[16]['password'] = '952175';
$users[16]['displayName'] = 'NKTPO_CĐV 03';
$users[16]['channels'] = array(0,1,6);

// Sample registered user:
$users[17] = array();
$users[17]['userRole'] = AJAX_CHAT_USER;
$users[17]['userName'] = 'thisinh07';
$users[17]['password'] = '632668';
$users[17]['displayName'] = 'NKTPO_CĐV 04';
$users[17]['channels'] = array(0,1,6);

// Sample registered user:
$users[18] = array();
$users[18]['userRole'] = AJAX_CHAT_USER;
$users[18]['userName'] = 'thisinh08';
$users[18]['password'] = '988574';
$users[18]['displayName'] = 'Gala6_Trọng Tín';
$users[18]['channels'] = array(0,1);

// Sample registered user:
$users[19] = array();
$users[19]['userRole'] = AJAX_CHAT_USER;
$users[19]['userName'] = 'thisinh09';
$users[19]['password'] = '800153';
$users[19]['displayName'] = 'Gala6_Hồng Ân';
$users[19]['channels'] = array(0,1);

// Sample registered user:
$users[20] = array();
$users[20]['userRole'] = AJAX_CHAT_USER;
$users[20]['userName'] = 'thisinh10';
$users[20]['password'] = '123451';
$users[20]['displayName'] = 'Gala6_Thùy Linh';
$users[20]['channels'] = array(0,1);

// Sample registered user:
$users[21] = array();
$users[21]['userRole'] = AJAX_CHAT_USER;
$users[21]['userName'] = 'thisinh11';
$users[21]['password'] = '738923';
$users[21]['displayName'] = 'Gala6_Từ Bội Hoàn';
$users[21]['channels'] = array(0,1);

// Sample registered user:
$users[22] = array();
$users[22]['userRole'] = AJAX_CHAT_USER;
$users[22]['userName'] = 'thisinh12';
$users[22]['password'] = '227102';
$users[22]['displayName'] = 'Gala6_Anh Vũ';
$users[22]['channels'] = array(0,1);

// Sample registered user:
$users[23] = array();
$users[23]['userRole'] = AJAX_CHAT_USER;
$users[23]['userName'] = 'thisinh13';
$users[23]['password'] = '253564';
$users[23]['channels'] = array(0,1);

// Sample registered user:
$users[24] = array();
$users[24]['userRole'] = AJAX_CHAT_USER;
$users[24]['userName'] = 'thisinh14';
$users[24]['password'] = '125742';
$users[24]['channels'] = array(0,1);

// Sample registered user:
$users[25] = array();
$users[25]['userRole'] = AJAX_CHAT_USER;
$users[25]['userName'] = 'thisinh15';
$users[25]['password'] = '461678';
$users[25]['channels'] = array(0,1);

// Sample registered user:
$users[26] = array();
$users[26]['userRole'] = AJAX_CHAT_USER;
$users[26]['userName'] = 'thisinh16';
$users[26]['password'] = '158584';
$users[26]['channels'] = array(0,1);

// Sample registered user:
$users[27] = array();
$users[27]['userRole'] = AJAX_CHAT_USER;
$users[27]['userName'] = 'thisinh17';
$users[27]['password'] = '206499';
$users[27]['displayName'] = 'Gala6_Thanh Tùng';
$users[27]['channels'] = array(0,1);

// Sample registered user:
$users[28] = array();
$users[28]['userRole'] = AJAX_CHAT_USER;
$users[28]['userName'] = 'thisinh18';
$users[28]['password'] = '518711';
$users[28]['displayName'] = 'Gala6_Ngọc Sơn';
$users[28]['channels'] = array(0,1);

// Sample registered user:
$users[29] = array();
$users[29]['userRole'] = AJAX_CHAT_USER;
$users[29]['userName'] = 'thisinh19';
$users[29]['password'] = '600882';
$users[29]['displayName'] = 'Gala6_Quỳnh Như';
$users[29]['channels'] = array(0,1);

// Sample registered user:
$users[30] = array();
$users[30]['userRole'] = AJAX_CHAT_USER;
$users[30]['userName'] = 'thisinh20';
$users[30]['password'] = '982973';
$users[30]['displayName'] = 'Gala6_Thiên Thảo';
$users[30]['channels'] = array(0,1);

// Sample registered user:
$users[31] = array();
$users[31]['userRole'] = AJAX_CHAT_USER;
$users[31]['userName'] = 'thisinh21';
$users[31]['password'] = '642713';
$users[31]['displayName'] = 'Gala6_Hồng Duyên';
$users[31]['channels'] = array(0,1);

// Sample registered user:
$users[32] = array();
$users[32]['userRole'] = AJAX_CHAT_USER;
$users[32]['userName'] = 'thisinh22';
$users[32]['password'] = '577731';
$users[32]['displayName'] = 'Gala6_Công Thành';
$users[32]['channels'] = array(0,1);

// Sample registered user:
$users[33] = array();
$users[33]['userRole'] = AJAX_CHAT_USER;
$users[33]['userName'] = 'thisinh23';
$users[33]['password'] = '516136';
$users[33]['channels'] = array(0,1);

// Sample registered user:
$users[34] = array();
$users[34]['userRole'] = AJAX_CHAT_USER;
$users[34]['userName'] = 'thisinh24';
$users[34]['password'] = '735824';
$users[34]['channels'] = array(0,1);

// Sample registered user:
$users[35] = array();
$users[35]['userRole'] = AJAX_CHAT_USER;
$users[35]['userName'] = 'thisinh25';
$users[35]['password'] = '267537';
$users[35]['channels'] = array(0,1);
$users[36] = array(); $users[36]['userRole'] = AJAX_CHAT_USER; $users[36]['userName'] = 'nolvn_01'; $users[36]['password'] = '1502162'; $users[36]['displayName'] ='NOLVN_Trung Dũng'; $users[36]['channels'] = array(0,1,9);
$users[37] = array(); $users[37]['userRole'] = AJAX_CHAT_USER; $users[37]['userName'] = 'nolvn_02'; $users[37]['password'] = '2098982'; $users[37]['displayName'] ='NOLVN_Thùy Dương'; $users[37]['channels'] = array(0,1,9);
$users[38] = array(); $users[38]['userRole'] = AJAX_CHAT_USER; $users[38]['userName'] = 'nolvn_03'; $users[38]['password'] = '2628986'; $users[38]['displayName'] ='NOLVN_Đức Thuận'; $users[38]['channels'] = array(0,1,9);
$users[39] = array(); $users[39]['userRole'] = AJAX_CHAT_USER; $users[39]['userName'] = 'nolvn_04'; $users[39]['password'] = '5835485'; $users[39]['displayName'] ='NOLVN_Anh Dũng'; $users[39]['channels'] = array(0,1,9);
$users[40] = array(); $users[40]['userRole'] = AJAX_CHAT_USER; $users[40]['userName'] = 'nolvn_05'; $users[40]['password'] = '5798045'; $users[40]['displayName'] ='NOLVN_Huyền My'; $users[40]['channels'] = array(0,1,9);
$users[41] = array(); $users[41]['userRole'] = AJAX_CHAT_USER; $users[41]['userName'] = 'nolvn_06'; $users[41]['password'] = '1050683'; $users[41]['displayName'] ='NOLVN_Thiện Lượng'; $users[41]['channels'] = array(0,1,9);
$users[42] = array(); $users[42]['userRole'] = AJAX_CHAT_USER; $users[42]['userName'] = 'nolvn_07'; $users[42]['password'] = '3119205'; $users[42]['displayName'] ='NOLVN_Thanh Long'; $users[42]['channels'] = array(0,1,9);
$users[43] = array(); $users[43]['userRole'] = AJAX_CHAT_USER; $users[43]['userName'] = 'nolvn_08'; $users[43]['password'] = '4617407'; $users[43]['displayName'] ='NOLVN_Việt Dũng'; $users[43]['channels'] = array(0,1,9);
$users[44] = array(); $users[44]['userRole'] = AJAX_CHAT_USER; $users[44]['userName'] = 'nolvn_09'; $users[44]['password'] = '8543103'; $users[44]['displayName'] ='NOLVN_Quang Sơn'; $users[44]['channels'] = array(0,1,9);
$users[45] = array(); $users[45]['userRole'] = AJAX_CHAT_USER; $users[45]['userName'] = 'nolvn_10'; $users[45]['password'] = '8014004'; $users[45]['displayName'] ='NOLVN_Hữu Quân'; $users[45]['channels'] = array(0,1,9);
$users[46] = array(); $users[46]['userRole'] = AJAX_CHAT_USER; $users[46]['userName'] = 'nolvn_11'; $users[46]['password'] = '3985286'; $users[46]['channels'] = array(0,1,9);
$users[47] = array(); $users[47]['userRole'] = AJAX_CHAT_USER; $users[47]['userName'] = 'solvn_01'; $users[47]['password'] = '5037363'; $users[47]['displayName'] ='SOLVN_Hồng_Châu'; $users[47]['channels'] = array(0,1,2,9);
$users[48] = array(); $users[48]['userRole'] = AJAX_CHAT_USER; $users[48]['userName'] = 'solvn_02'; $users[48]['password'] = '4906917'; $users[48]['displayName'] ='SOLVN_Sĩ_Hiếu'; $users[48]['channels'] = array(0,1,2,9);
$users[49] = array(); $users[49]['userRole'] = AJAX_CHAT_USER; $users[49]['userName'] = 'solvn_03'; $users[49]['password'] = '128036'; $users[49]['displayName'] ='SOLVN_Thùy_Vân'; $users[49]['channels'] = array(0,1,2,9);
$users[50] = array(); $users[50]['userRole'] = AJAX_CHAT_USER; $users[50]['userName'] = 'solvn_04'; $users[50]['password'] = '8444435'; $users[50]['displayName'] ='SOLVN_Thu_Trang'; $users[50]['channels'] = array(0,1,2,9);
$users[51] = array(); $users[51]['userRole'] = AJAX_CHAT_USER; $users[51]['userName'] = 'solvn_05'; $users[51]['password'] = '549405'; $users[51]['displayName'] ='SOLVN_Quang_Dũng'; $users[51]['channels'] = array(0,1,2,9);
$users[52] = array(); $users[52]['userRole'] = AJAX_CHAT_USER; $users[52]['userName'] = 'solvn_06'; $users[52]['password'] = '1248967'; $users[52]['displayName'] ='SOLVN_Hữu_Nhân'; $users[52]['channels'] = array(0,1,2,9);
$users[53] = array(); $users[53]['userRole'] = AJAX_CHAT_USER; $users[53]['userName'] = 'solvn_07'; $users[53]['password'] = '6594213'; $users[53]['displayName'] ='SOLVN_Đông_Quân'; $users[53]['channels'] = array(0,1,2,9);
$users[54] = array(); $users[54]['userRole'] = AJAX_CHAT_USER; $users[54]['userName'] = 'solvn_08'; $users[54]['password'] = '3879724'; $users[54]['displayName'] ='SOLVN_Quế_Nhi'; $users[54]['channels'] = array(0,1,2,9);
$users[55] = array(); $users[55]['userRole'] = AJAX_CHAT_USER; $users[55]['userName'] = 'solvn_09'; $users[55]['password'] = '6071814'; $users[55]['displayName'] ='SOLVN_Trọng_Tài'; $users[55]['channels'] = array(0,1,2,9);
$users[56] = array(); $users[56]['userRole'] = AJAX_CHAT_USER; $users[56]['userName'] = 'solvn_10'; $users[56]['password'] = '2018775'; $users[56]['displayName'] ='SOLVN_Tất_Thắng'; $users[56]['channels'] = array(0,1,2,6,9);
$users[57] = array(); $users[57]['userRole'] = AJAX_CHAT_USER; $users[57]['userName'] = 'solvn_11'; $users[57]['password'] = 'iadf;kadsjfijkdf'; $users[57]['displayName'] ='Điều hành'; $users[57]['channels'] = array(2);
$users[58] = array(); $users[58]['userRole'] = AJAX_CHAT_USER; $users[58]['userName'] = 'nktpo_01'; $users[58]['password'] = '6817136'; $users[58]['displayName'] ='NKTPO_Hạnh An'; $users[58]['channels'] = array(0,1,6);
$users[59] = array(); $users[59]['userRole'] = AJAX_CHAT_USER; $users[59]['userName'] = 'nktpo_02'; $users[59]['password'] = '1840317'; $users[59]['displayName'] ='NKTPO_Huy Đức'; $users[59]['channels'] = array(0,1,6);
$users[60] = array(); $users[60]['userRole'] = AJAX_CHAT_USER; $users[60]['userName'] = 'nktpo_03'; $users[60]['password'] = '5735454'; $users[60]['displayName'] ='NKTPO_Minh Anh'; $users[60]['channels'] = array(0,1,6);
$users[61] = array(); $users[61]['userRole'] = AJAX_CHAT_USER; $users[61]['userName'] = 'nktpo_04'; $users[61]['password'] = '9251713'; $users[61]['displayName'] ='NKTPO_Thùy Dương'; $users[61]['channels'] = array(0,1,6);
$users[62] = array(); $users[62]['userRole'] = AJAX_CHAT_USER; $users[62]['userName'] = 'nktpo_05'; $users[62]['password'] = '4087088'; $users[62]['displayName'] ='NKTPO_Quốc Anh'; $users[62]['channels'] = array(0,1,6);
$users[63] = array(); $users[63]['userRole'] = AJAX_CHAT_USER; $users[63]['userName'] = 'nktpo_06'; $users[63]['password'] = '8420568'; $users[63]['displayName'] ='NKTPO_Thu Hà'; $users[63]['channels'] = array(0,1,6);
$users[64] = array(); $users[64]['userRole'] = AJAX_CHAT_USER; $users[64]['userName'] = 'nktpo_07'; $users[64]['password'] = '2260631'; $users[64]['displayName'] ='NKTPO_Phương Mai'; $users[64]['channels'] = array(0,1,6);
$users[65] = array(); $users[65]['userRole'] = AJAX_CHAT_USER; $users[65]['userName'] = 'nktpo_08'; $users[65]['password'] = '2588238'; $users[65]['displayName'] ='NKTPO_Hoàng Anh'; $users[65]['channels'] = array(0,1,6);
$users[66] = array(); $users[66]['userRole'] = AJAX_CHAT_USER; $users[66]['userName'] = 'nktpo_09'; $users[66]['password'] = '3984724'; $users[66]['displayName'] ='NKTPO_Tiến Thành'; $users[66]['channels'] = array(0,1,6);
$users[67] = array(); $users[67]['userRole'] = AJAX_CHAT_USER; $users[67]['userName'] = 'nktpo_10'; $users[67]['password'] = '5083713'; $users[67]['displayName'] ='NKTPO_Minh Hiếu'; $users[67]['channels'] = array(0,1,6);
$users[68] = array(); $users[68]['userRole'] = AJAX_CHAT_USER; $users[68]['userName'] = 'nktpo_11'; $users[68]['password'] = '8554485'; $users[68]['displayName'] ='NKTPO_Huy Hoàng'; $users[68]['channels'] = array(0,1,6);
$users[69] = array(); $users[69]['userRole'] = AJAX_CHAT_USER; $users[69]['userName'] = 'amser_01'; $users[69]['password'] = '2345678'; $users[69]['displayName'] ='AMSER_Vũ Lộc'; $users[69]['channels'] = array(0,1);
$users[70] = array(); $users[70]['userRole'] = AJAX_CHAT_USER; $users[70]['userName'] = 'amser_02'; $users[70]['password'] = '3900069'; $users[70]['displayName'] ='AMSER_Hoàng Hải'; $users[70]['channels'] = array(0,1);
$users[71] = array(); $users[71]['userRole'] = AJAX_CHAT_USER; $users[71]['userName'] = 'amser_03'; $users[71]['password'] = '7834152'; $users[71]['displayName'] ='AMSER_Minh Đức'; $users[71]['channels'] = array(0,1);
$users[72] = array(); $users[72]['userRole'] = AJAX_CHAT_USER; $users[72]['userName'] = 'amser_04'; $users[72]['password'] = '7344040'; $users[72]['displayName'] ='AMSER_Trung Kiên'; $users[72]['channels'] = array(0,1);
$users[73] = array(); $users[73]['userRole'] = AJAX_CHAT_USER; $users[73]['userName'] = 'amser_05'; $users[73]['password'] = '6484651'; $users[73]['displayName'] ='AMSER_Song Thương'; $users[73]['channels'] = array(0,1);
$users[74] = array(); $users[74]['userRole'] = AJAX_CHAT_USER; $users[74]['userName'] = 'amser_06'; $users[74]['password'] = '4291965'; $users[74]['displayName'] ='AMSER_Quang Nhật'; $users[74]['channels'] = array(0,1);
$users[75] = array(); $users[75]['userRole'] = AJAX_CHAT_USER; $users[75]['userName'] = 'amser_07'; $users[75]['password'] = '3949212'; $users[75]['displayName'] ='AMSER_Anh Đức'; $users[75]['channels'] = array(0,1);
$users[76] = array(); $users[76]['userRole'] = AJAX_CHAT_USER; $users[76]['userName'] = 'amser_08'; $users[76]['password'] = '2561227'; $users[76]['channels'] = array(0,1);
$users[77] = array(); $users[77]['userRole'] = AJAX_CHAT_USER; $users[77]['userName'] = 'amser_09'; $users[77]['password'] = '3557094'; $users[77]['channels'] = array(0,1);
$users[78] = array(); $users[78]['userRole'] = AJAX_CHAT_USER; $users[78]['userName'] = 'amser_10'; $users[78]['password'] = '1082407'; $users[78]['channels'] = array(0,1);
$users[79] = array(); $users[79]['userRole'] = AJAX_CHAT_USER; $users[79]['userName'] = 'amser_11'; $users[79]['password'] = '9515566'; $users[79]['channels'] = array(0,1);
$users[80] = array(); $users[80]['userRole'] = AJAX_CHAT_USER; $users[80]['userName'] = 'ptnk_01'; $users[80]['password'] = '4368661'; $users[80]['displayName'] ='PTNK_Đình Giang'; $users[80]['channels'] = array(0,1);
$users[81] = array(); $users[81]['userRole'] = AJAX_CHAT_USER; $users[81]['userName'] = 'ptnk_02'; $users[81]['password'] = '6034528'; $users[81]['displayName'] ='PTNK_Thái Hiệp'; $users[81]['channels'] = array(0,1);
$users[82] = array(); $users[82]['userRole'] = AJAX_CHAT_USER; $users[82]['userName'] = 'ptnk_03'; $users[82]['password'] = '7185994'; $users[82]['displayName'] ='PTNK_Hải Minh'; $users[82]['channels'] = array(0,1);
$users[83] = array(); $users[83]['userRole'] = AJAX_CHAT_USER; $users[83]['userName'] = 'ptnk_04'; $users[83]['password'] = '8297092'; $users[83]['displayName'] ='PTNK_Đức Anh'; $users[83]['channels'] = array(0,1);
$users[84] = array(); $users[84]['userRole'] = AJAX_CHAT_USER; $users[84]['userName'] = 'ptnk_05'; $users[84]['password'] = '9951958'; $users[84]['displayName'] ='PTNK_Hoàng Bách'; $users[84]['channels'] = array(0,1);
$users[85] = array(); $users[85]['userRole'] = AJAX_CHAT_USER; $users[85]['userName'] = 'ptnk_06'; $users[85]['password'] = '2064625'; $users[85]['displayName'] ='PTNK_Trung Nguyên'; $users[85]['channels'] = array(0,1);
$users[86] = array(); $users[86]['userRole'] = AJAX_CHAT_USER; $users[86]['userName'] = 'ptnk_07'; $users[86]['password'] = '8746510'; $users[86]['displayName'] ='PTNK_Thái Khang'; $users[86]['channels'] = array(0,1);
$users[87] = array(); $users[87]['userRole'] = AJAX_CHAT_USER; $users[87]['userName'] = 'ptnk_08'; $users[87]['password'] = '1119753'; $users[87]['channels'] = array(0,1);
$users[88] = array(); $users[88]['userRole'] = AJAX_CHAT_USER; $users[88]['userName'] = 'ptnk_09'; $users[88]['password'] = '5968046'; $users[88]['channels'] = array(0,1);
$users[89] = array(); $users[89]['userRole'] = AJAX_CHAT_USER; $users[89]['userName'] = 'ptnk_10'; $users[89]['password'] = '9913726'; $users[89]['channels'] = array(0,1);
$users[90] = array(); $users[90]['userRole'] = AJAX_CHAT_USER; $users[90]['userName'] = 'ptnk_11'; $users[90]['password'] = '4201695'; $users[90]['displayName'] ='PTNK_Tứ Quý'; $users[90]['channels'] = array(0,1);
$users[91] = array(); $users[91]['userRole'] = AJAX_CHAT_USER; $users[91]['userName'] = 'qhh_01'; $users[91]['password'] = '5104700'; $users[91]['displayName'] ='QHH_Việt Đức'; $users[91]['channels'] = array(0,1,11);
$users[92] = array(); $users[92]['userRole'] = AJAX_CHAT_USER; $users[92]['userName'] = 'qhh_02'; $users[92]['password'] = '8970465'; $users[92]['displayName'] ='QHH_Tú Nguyên'; $users[92]['channels'] = array(0,1,11);
$users[93] = array(); $users[93]['userRole'] = AJAX_CHAT_USER; $users[93]['userName'] = 'qhh_03'; $users[93]['password'] = '2414848'; $users[93]['displayName'] ='QHH_Tiến Dũng'; $users[93]['channels'] = array(0,1,11);
$users[94] = array(); $users[94]['userRole'] = AJAX_CHAT_USER; $users[94]['userName'] = 'qhh_04'; $users[94]['password'] = '6964252'; $users[94]['displayName'] ='QHH_Trương Ngọc Huy'; $users[94]['channels'] = array(0,1,11);
$users[95] = array(); $users[95]['userRole'] = AJAX_CHAT_USER; $users[95]['userName'] = 'qhh_05'; $users[95]['password'] = '9968620'; $users[95]['displayName'] ='QHH_Viết Long'; $users[95]['channels'] = array(0,1,11);
$users[96] = array(); $users[96]['userRole'] = AJAX_CHAT_USER; $users[96]['userName'] = 'qhh_06'; $users[96]['password'] = '4312117'; $users[96]['displayName'] ='QHH_Lê Thuận'; $users[96]['channels'] = array(0,1,11);
$users[97] = array(); $users[97]['userRole'] = AJAX_CHAT_USER; $users[97]['userName'] = 'qhh_07'; $users[97]['password'] = '8069496'; $users[97]['displayName'] ='QHH_Trung Hiếu'; $users[97]['channels'] = array(0,1,11);
$users[98] = array(); $users[98]['userRole'] = AJAX_CHAT_USER; $users[98]['userName'] = 'qhh_08'; $users[98]['password'] = '3808530'; $users[98]['displayName'] ='QHH_Hoàng Hùng'; $users[98]['channels'] = array(0,1,11);
$users[99] = array(); $users[99]['userRole'] = AJAX_CHAT_USER; $users[99]['userName'] = 'qhh_09'; $users[99]['password'] = '6863399'; $users[99]['displayName'] ='QHH_Trâm Anh'; $users[99]['channels'] = array(0,1,11);
$users[100] = array(); $users[100]['userRole'] = AJAX_CHAT_USER; $users[100]['userName'] = 'qhh_10'; $users[100]['password'] = '6363921'; $users[100]['displayName'] ='QHH_Thanh Chương'; $users[100]['channels'] = array(0,1,11);
$users[101] = array(); $users[101]['userRole'] = AJAX_CHAT_USER; $users[101]['userName'] = 'qhh_11'; $users[101]['password'] = '7672543'; $users[101]['displayName'] ='QHH_Thái Ngọc Huy'; $users[101]['channels'] = array(0,1,11);
$users[102] = array(); $users[102]['userRole'] = AJAX_CHAT_USER; $users[102]['userName'] = 'lqdnt_01'; $users[102]['password'] = '8983747'; $users[102]['displayName'] ='LQĐNT_Hồng Chiến'; $users[102]['channels'] = array(0,1,3);
$users[103] = array(); $users[103]['userRole'] = AJAX_CHAT_USER; $users[103]['userName'] = 'lqdnt_02'; $users[103]['password'] = '3970738'; $users[103]['displayName'] ='LQĐNT_Tuyết Ngân'; $users[103]['channels'] = array(0,1,3);
$users[104] = array(); $users[104]['userRole'] = AJAX_CHAT_USER; $users[104]['userName'] = 'lqdnt_03'; $users[104]['password'] = '2670278'; $users[104]['displayName'] ='LQĐNT_Việt Luân'; $users[104]['channels'] = array(0,1,3);
$users[105] = array(); $users[105]['userRole'] = AJAX_CHAT_USER; $users[105]['userName'] = 'lqdnt_04'; $users[105]['password'] = '3673273'; $users[105]['displayName'] ='LQĐNT_Minh Tiến'; $users[105]['channels'] = array(0,1,3);
$users[106] = array(); $users[106]['userRole'] = AJAX_CHAT_USER; $users[106]['userName'] = 'lqdnt_05'; $users[106]['password'] = '2222957'; $users[106]['displayName'] ='LQĐNT_Anh Quân'; $users[106]['channels'] = array(0,1,3);
$users[107] = array(); $users[107]['userRole'] = AJAX_CHAT_USER; $users[107]['userName'] = 'lqdnt_06'; $users[107]['password'] = '7787812'; $users[107]['displayName'] ='LQĐNT_Quang Tuệ'; $users[107]['channels'] = array(0,1,3);
$users[108] = array(); $users[108]['userRole'] = AJAX_CHAT_USER; $users[108]['userName'] = 'lqdnt_07'; $users[108]['password'] = '8693959'; $users[108]['displayName'] ='LQĐNT_Tuấn Vũ'; $users[108]['channels'] = array(0,1,3);
$users[109] = array(); $users[109]['userRole'] = AJAX_CHAT_USER; $users[109]['userName'] = 'lqdnt_08'; $users[109]['password'] = '6356020'; $users[109]['displayName'] ='LQĐNT_Hoàng Long'; $users[109]['channels'] = array(0,1,3);
$users[110] = array(); $users[110]['userRole'] = AJAX_CHAT_USER; $users[110]['userName'] = 'lqdnt_09'; $users[110]['password'] = '9626497'; $users[110]['displayName'] ='LQĐNT_Chí Đại'; $users[110]['channels'] = array(0,1,3);
$users[111] = array(); $users[111]['userRole'] = AJAX_CHAT_USER; $users[111]['userName'] = 'lqdnt_10'; $users[111]['password'] = '4414054'; $users[111]['displayName'] ='LQĐNT_Bảo Lộc'; $users[111]['channels'] = array(0,1,3);
$users[112] = array(); $users[112]['userRole'] = AJAX_CHAT_USER; $users[112]['userName'] = 'lqdnt_11'; $users[112]['password'] = '5571579'; $users[112]['channels'] = array(0,1);
$users[113] = array(); $users[113]['userRole'] = AJAX_CHAT_USER; $users[113]['userName'] = 'lqddn_01'; $users[113]['password'] = '3678021'; $users[113]['displayName'] ='LQĐĐN_Thanh Thúy'; $users[113]['channels'] = array(0,1,10);
$users[114] = array(); $users[114]['userRole'] = AJAX_CHAT_USER; $users[114]['userName'] = 'lqddn_02'; $users[114]['password'] = '9890918'; $users[114]['displayName'] ='LQĐĐN_Nhật Trinh'; $users[114]['channels'] = array(0,1,10);
$users[115] = array(); $users[115]['userRole'] = AJAX_CHAT_USER; $users[115]['userName'] = 'lqddn_03'; $users[115]['password'] = '1977196'; $users[115]['displayName'] ='LQĐĐN_Trần Thi'; $users[115]['channels'] = array(0,1,10);
$users[116] = array(); $users[116]['userRole'] = AJAX_CHAT_USER; $users[116]['userName'] = 'lqddn_04'; $users[116]['password'] = '4396454'; $users[116]['displayName'] ='LQĐĐN_Nguyệt Hằng'; $users[116]['channels'] = array(0,1,10);
$users[117] = array(); $users[117]['userRole'] = AJAX_CHAT_USER; $users[117]['userName'] = 'lqddn_05'; $users[117]['password'] = '9272001'; $users[117]['displayName'] ='LQĐĐN_Ngọc Lý'; $users[117]['channels'] = array(0,1,10);
$users[118] = array(); $users[118]['userRole'] = AJAX_CHAT_USER; $users[118]['userName'] = 'lqddn_06'; $users[118]['password'] = '2617671'; $users[118]['displayName'] ='LQĐĐN_Huỳnh Đức'; $users[118]['channels'] = array(0,1,10);
$users[119] = array(); $users[119]['userRole'] = AJAX_CHAT_USER; $users[119]['userName'] = 'lqddn_07'; $users[119]['password'] = '2164620'; $users[119]['displayName'] ='LQĐĐN_Thái Hải'; $users[119]['channels'] = array(0,1,10);
$users[120] = array(); $users[120]['userRole'] = AJAX_CHAT_USER; $users[120]['userName'] = 'lqddn_08'; $users[120]['password'] = '5511382'; $users[120]['displayName'] ='LQĐĐN_Quốc Thịnh'; $users[120]['channels'] = array(0,1,10);
$users[121] = array(); $users[121]['userRole'] = AJAX_CHAT_USER; $users[121]['userName'] = 'lqddn_09'; $users[121]['password'] = '4735767'; $users[121]['displayName'] ='LQĐĐN_Nguyên Bảo'; $users[121]['channels'] = array(0,1,10);
$users[122] = array(); $users[122]['userRole'] = AJAX_CHAT_USER; $users[122]['userName'] = 'lqddn_10'; $users[122]['password'] = '5392131'; $users[122]['displayName'] ='LQĐĐN_Hải Triều'; $users[122]['channels'] = array(0,1,10);
$users[123] = array(); $users[123]['userRole'] = AJAX_CHAT_MODERATOR; $users[123]['userName'] = 'lqddn_11'; $users[123]['password'] = '9809931'; $users[123]['channels'] = array(0,1,10);
$users[124] = array(); $users[124]['userRole'] = AJAX_CHAT_USER; $users[124]['userName'] = 'nbkqn_01'; $users[124]['password'] = '9993885'; $users[124]['displayName'] ='NBKQN_Đặng Sơn'; $users[124]['channels'] = array(0,1,5);
$users[125] = array(); $users[125]['userRole'] = AJAX_CHAT_USER; $users[125]['userName'] = 'nbkqn_02'; $users[125]['password'] = '7784033'; $users[125]['displayName'] ='NBKQN_Nhựt Trường'; $users[125]['channels'] = array(0,1,5);
$users[126] = array(); $users[126]['userRole'] = AJAX_CHAT_USER; $users[126]['userName'] = 'nbkqn_03'; $users[126]['password'] = '3842364'; $users[126]['displayName'] ='NBKQN_Lê Phương'; $users[126]['channels'] = array(0,1,5);
$users[127] = array(); $users[127]['userRole'] = AJAX_CHAT_USER; $users[127]['userName'] = 'nbkqn_04'; $users[127]['password'] = '6277023'; $users[127]['displayName'] ='NBKQN_Lê Pháp'; $users[127]['channels'] = array(0,1,5);
$users[128] = array(); $users[128]['userRole'] = AJAX_CHAT_USER; $users[128]['userName'] = 'nbkqn_05'; $users[128]['password'] = '4406457'; $users[128]['displayName'] ='NBKQN_Huỳnh Anh'; $users[128]['channels'] = array(0,1,5);
$users[129] = array(); $users[129]['userRole'] = AJAX_CHAT_USER; $users[129]['userName'] = 'nbkqn_06'; $users[129]['password'] = '4131345'; $users[129]['displayName'] ='NBKQN_Thu Sương'; $users[129]['channels'] = array(0,1,5);
$users[130] = array(); $users[130]['userRole'] = AJAX_CHAT_USER; $users[130]['userName'] = 'nbkqn_07'; $users[130]['password'] = '8658000'; $users[130]['displayName'] ='NBKQN_Thanh Đức'; $users[130]['channels'] = array(0,1,5);
$users[131] = array(); $users[131]['userRole'] = AJAX_CHAT_USER; $users[131]['userName'] = 'nbkqn_08'; $users[131]['password'] = '5815237'; $users[131]['displayName'] ='NBKQN_Thanh Tùng'; $users[131]['channels'] = array(0,1,5);
$users[132] = array(); $users[132]['userRole'] = AJAX_CHAT_USER; $users[132]['userName'] = 'nbkqn_09'; $users[132]['password'] = '5429548'; $users[132]['displayName'] ='NBKQN_Duy Phước'; $users[132]['channels'] = array(0,1,5);
$users[133] = array(); $users[133]['userRole'] = AJAX_CHAT_USER; $users[133]['userName'] = 'nbkqn_10'; $users[133]['password'] = '4461320'; $users[133]['channels'] = array(0,1);
$users[134] = array(); $users[134]['userRole'] = AJAX_CHAT_USER; $users[134]['userName'] = 'nbkqn_11'; $users[134]['password'] = '2175994'; $users[134]['channels'] = array(0,1);
$users[135] = array(); $users[135]['userRole'] = AJAX_CHAT_USER; $users[135]['userName'] = 'cbt_01'; $users[135]['password'] = '7654728'; $users[135]['displayName'] ='CBT_Hữu Nhân'; $users[135]['channels'] = array(0,1);
$users[136] = array(); $users[136]['userRole'] = AJAX_CHAT_USER; $users[136]['userName'] = 'cbt_02'; $users[136]['password'] = '3101214'; $users[136]['displayName'] ='CBT_Nguyên Khôi'; $users[136]['channels'] = array(0,1);
$users[137] = array(); $users[137]['userRole'] = AJAX_CHAT_USER; $users[137]['userName'] = 'cbt_03'; $users[137]['password'] = '6761292'; $users[137]['displayName'] ='CBT_Công Luận'; $users[137]['channels'] = array(0,1);
$users[138] = array(); $users[138]['userRole'] = AJAX_CHAT_USER; $users[138]['userName'] = 'cbt_04'; $users[138]['password'] = '4506130'; $users[138]['displayName'] ='CBT_Thảo Nhân'; $users[138]['channels'] = array(0,1);
$users[139] = array(); $users[139]['userRole'] = AJAX_CHAT_USER; $users[139]['userName'] = 'cbt_05'; $users[139]['password'] = '6009259'; $users[139]['displayName'] ='CBT_Thành Nhân'; $users[139]['channels'] = array(0,1);
$users[140] = array(); $users[140]['userRole'] = AJAX_CHAT_USER; $users[140]['userName'] = 'cbt_06'; $users[140]['password'] = '5534740'; $users[140]['displayName'] ='CBT_Hoàng Anh'; $users[140]['channels'] = array(0,1);
$users[141] = array(); $users[141]['userRole'] = AJAX_CHAT_USER; $users[141]['userName'] = 'cbt_07'; $users[141]['password'] = '8201089'; $users[141]['displayName'] ='CBT_Ngọc Trân'; $users[141]['channels'] = array(0,1);
$users[142] = array(); $users[142]['userRole'] = AJAX_CHAT_USER; $users[142]['userName'] = 'cbt_08'; $users[142]['password'] = '1002059'; $users[142]['displayName'] ='CBT_Phương Dung'; $users[142]['channels'] = array(0,1);
$users[143] = array(); $users[143]['userRole'] = AJAX_CHAT_USER; $users[143]['userName'] = 'cbt_09'; $users[143]['password'] = '6343789'; $users[143]['displayName'] ='CBT_Hoàng Huy'; $users[143]['channels'] = array(0,1);
$users[144] = array(); $users[144]['userRole'] = AJAX_CHAT_USER; $users[144]['userName'] = 'cbt_10'; $users[144]['password'] = '7821255'; $users[144]['displayName'] ='CBT_Duy Khang'; $users[144]['channels'] = array(0,1);
$users[145] = array(); $users[145]['userRole'] = AJAX_CHAT_USER; $users[145]['userName'] = 'cbt_11'; $users[145]['password'] = '7862042'; $users[145]['channels'] = array(0,1);
$users[146] = array(); $users[146]['userRole'] = AJAX_CHAT_USER; $users[146]['userName'] = 'thank_01'; $users[146]['password'] = '2596526'; $users[146]['displayName'] ='THANK_Ngọc Tĩnh'; $users[146]['channels'] = array(0,1);
$users[147] = array(); $users[147]['userRole'] = AJAX_CHAT_USER; $users[147]['userName'] = 'thank_02'; $users[147]['password'] = '6783366'; $users[147]['displayName'] ='THANK_Thái Hoàng'; $users[147]['channels'] = array(0,1);
$users[148] = array(); $users[148]['userRole'] = AJAX_CHAT_USER; $users[148]['userName'] = 'thank_03'; $users[148]['password'] = '6752034'; $users[148]['displayName'] ='THANK_Thế Anh'; $users[148]['channels'] = array(0,1);
$users[149] = array(); $users[149]['userRole'] = AJAX_CHAT_USER; $users[149]['userName'] = 'thank_04'; $users[149]['password'] = '3956805'; $users[149]['displayName'] ='THANK_Văn Nam'; $users[149]['channels'] = array(0,1);
$users[150] = array(); $users[150]['userRole'] = AJAX_CHAT_USER; $users[150]['userName'] = 'thank_05'; $users[150]['password'] = '9348686'; $users[150]['displayName'] ='THANK_Ngọc Khánh'; $users[150]['channels'] = array(0,1);
$users[151] = array(); $users[151]['userRole'] = AJAX_CHAT_USER; $users[151]['userName'] = 'thank_06'; $users[151]['password'] = '9499436'; $users[151]['displayName'] ='THANK_Trọng Nhân'; $users[151]['channels'] = array(0,1);
$users[152] = array(); $users[152]['userRole'] = AJAX_CHAT_USER; $users[152]['userName'] = 'thank_07'; $users[152]['password'] = '8511589'; $users[152]['channels'] = array(0,1);
$users[153] = array(); $users[153]['userRole'] = AJAX_CHAT_USER; $users[153]['userName'] = 'thank_08'; $users[153]['password'] = '9426369'; $users[153]['channels'] = array(0,1);
$users[154] = array(); $users[154]['userRole'] = AJAX_CHAT_USER; $users[154]['userName'] = 'thank_09'; $users[154]['password'] = '5319036'; $users[154]['channels'] = array(0,1);
$users[155] = array(); $users[155]['userRole'] = AJAX_CHAT_USER; $users[155]['userName'] = 'thank_10'; $users[155]['password'] = '9278766'; $users[155]['channels'] = array(0,1);
$users[156] = array(); $users[156]['userRole'] = AJAX_CHAT_USER; $users[156]['userName'] = 'thank_11'; $users[156]['password'] = '9211681'; $users[156]['channels'] = array(0,1);
$users[157] = array(); $users[157]['userRole'] = AJAX_CHAT_USER; $users[157]['userName'] = 'bpo_01'; $users[157]['password'] = '8975223'; $users[157]['displayName'] ='BPO_Anh Dũng'; $users[157]['channels'] = array(0,1,8);
$users[158] = array(); $users[158]['userRole'] = AJAX_CHAT_USER; $users[158]['userName'] = 'bpo_02'; $users[158]['password'] = 'inninguyen'; $users[158]['displayName'] ='BPO_Thanh Tùng'; $users[158]['channels'] = array(0,1,8);
$users[159] = array(); $users[159]['userRole'] = AJAX_CHAT_USER; $users[159]['userName'] = 'bpo_03'; $users[159]['password'] = '3741776'; $users[159]['displayName'] ='BPO_DuyBách'; $users[159]['channels'] = array(0,1,8);
$users[160] = array(); $users[160]['userRole'] = AJAX_CHAT_USER; $users[160]['userName'] = 'bpo_04'; $users[160]['password'] = '9283644'; $users[160]['displayName'] ='BPO_Thảo Tiên'; $users[160]['channels'] = array(0,1,8);
$users[161] = array(); $users[161]['userRole'] = AJAX_CHAT_USER; $users[161]['userName'] = 'bpo_05'; $users[161]['password'] = '8088317'; $users[161]['displayName'] ='BPO_An Nhiên'; $users[161]['channels'] = array(0,1,8);
$users[162] = array(); $users[162]['userRole'] = AJAX_CHAT_USER; $users[162]['userName'] = 'bpo_06'; $users[162]['password'] = '5447252'; $users[162]['displayName'] ='BPO_Anh Kiệt'; $users[162]['channels'] = array(0,1,8);
$users[163] = array(); $users[163]['userRole'] = AJAX_CHAT_USER; $users[163]['userName'] = 'bpo_07'; $users[163]['password'] = '4461998'; $users[163]['displayName'] ='BPO_Trọng Việt'; $users[163]['channels'] = array(0,1,8);
$users[164] = array(); $users[164]['userRole'] = AJAX_CHAT_USER; $users[164]['userName'] = 'bpo_08'; $users[164]['password'] = '3332556'; $users[164]['displayName'] ='BPO_Xuân Tùng'; $users[164]['channels'] = array(0,1,8);
$users[165] = array(); $users[165]['userRole'] = AJAX_CHAT_USER; $users[165]['userName'] = 'bpo_09'; $users[165]['password'] = '3990093'; $users[165]['displayName'] ='BPO_Văn Chính'; $users[165]['channels'] = array(0,1,8);
$users[166] = array(); $users[166]['userRole'] = AJAX_CHAT_USER; $users[166]['userName'] = 'bpo_10'; $users[166]['password'] = '4330607'; $users[166]['displayName'] ='BPO_Trọng Quân'; $users[166]['channels'] = array(0,1,8);
$users[167] = array(); $users[167]['userRole'] = AJAX_CHAT_USER; $users[167]['userName'] = 'bpo_11'; $users[167]['password'] = '7691508'; $users[167]['channels'] = array(0,1);
$users[168] = array(); $users[168]['userRole'] = AJAX_CHAT_USER; $users[168]['userName'] = 'fyt_01'; $users[168]['password'] = '2664857'; $users[168]['displayName'] ='FYT_Quý Bảo'; $users[168]['channels'] = array(0,1);
$users[169] = array(); $users[169]['userRole'] = AJAX_CHAT_USER; $users[169]['userName'] = 'fyt_02'; $users[169]['password'] = '1282233'; $users[169]['displayName'] ='FYT_Xuân Trường'; $users[169]['channels'] = array(0,1);
$users[170] = array(); $users[170]['userRole'] = AJAX_CHAT_USER; $users[170]['userName'] = 'fyt_03'; $users[170]['password'] = '5134853'; $users[170]['displayName'] ='FYT_Giáp Linh'; $users[170]['channels'] = array(0,1);
$users[171] = array(); $users[171]['userRole'] = AJAX_CHAT_USER; $users[171]['userName'] = 'fyt_04'; $users[171]['password'] = '1755271'; $users[171]['displayName'] ='FYT_Tuấn Anh'; $users[171]['channels'] = array(0,1);
$users[172] = array(); $users[172]['userRole'] = AJAX_CHAT_USER; $users[172]['userName'] = 'fyt_05'; $users[172]['password'] = '8647581'; $users[172]['displayName'] ='FYT_Đăng Phúc'; $users[172]['channels'] = array(0,1);
$users[173] = array(); $users[173]['userRole'] = AJAX_CHAT_USER; $users[173]['userName'] = 'fyt_06'; $users[173]['password'] = '1407612'; $users[173]['displayName'] ='FYT_Việt Linh'; $users[173]['channels'] = array(0,1);
$users[174] = array(); $users[174]['userRole'] = AJAX_CHAT_USER; $users[174]['userName'] = 'fyt_07'; $users[174]['password'] = '5799120'; $users[174]['displayName'] ='FYT_Bảo Trung'; $users[174]['channels'] = array(0,1);
$users[175] = array(); $users[175]['userRole'] = AJAX_CHAT_USER; $users[175]['userName'] = 'fyt_08'; $users[175]['password'] = '9149695'; $users[175]['displayName'] ='FYT_Đức Anh'; $users[175]['channels'] = array(0,1);
$users[176] = array(); $users[176]['userRole'] = AJAX_CHAT_USER; $users[176]['userName'] = 'fyt_09'; $users[176]['password'] = '3729566'; $users[176]['displayName'] ='FYT_Diệu Linh'; $users[176]['channels'] = array(0,1);
$users[177] = array(); $users[177]['userRole'] = AJAX_CHAT_USER; $users[177]['userName'] = 'fyt_10'; $users[177]['password'] = '9701694'; $users[177]['channels'] = array(0,1);
$users[178] = array(); $users[178]['userRole'] = AJAX_CHAT_USER; $users[178]['userName'] = 'fyt_11'; $users[178]['password'] = '8209695'; $users[178]['channels'] = array(0,1);
$users[179] = array(); $users[179]['userRole'] = AJAX_CHAT_USER; $users[179]['userName'] = 'haac_01'; $users[179]['password'] = '6689658'; $users[179]['displayName'] ='HAAC_Tuấn Duy'; $users[179]['channels'] = array(0,1,4);
$users[180] = array(); $users[180]['userRole'] = AJAX_CHAT_USER; $users[180]['userName'] = 'haac_02'; $users[180]['password'] = '9077045'; $users[180]['displayName'] ='HAAC_Hoàng Huấn'; $users[180]['channels'] = array(0,1,4);
$users[181] = array(); $users[181]['userRole'] = AJAX_CHAT_USER; $users[181]['userName'] = 'haac_03'; $users[181]['password'] = '8754106'; $users[181]['displayName'] ='HAAC_Tấn Vũ'; $users[181]['channels'] = array(0,1,4);
$users[182] = array(); $users[182]['userRole'] = AJAX_CHAT_USER; $users[182]['userName'] = 'haac_04'; $users[182]['password'] = '5456004'; $users[182]['displayName'] ='HAAC_Thái Sơn'; $users[182]['channels'] = array(0,1,4);
$users[183] = array(); $users[183]['userRole'] = AJAX_CHAT_USER; $users[183]['userName'] = 'haac_05'; $users[183]['password'] = '5963307'; $users[183]['displayName'] ='HAAC_Tiên Tín'; $users[183]['channels'] = array(0,1,4);
$users[184] = array(); $users[184]['userRole'] = AJAX_CHAT_USER; $users[184]['userName'] = 'haac_06'; $users[184]['password'] = '4966153'; $users[184]['displayName'] ='HAAC_Hoàng Thành Đạt'; $users[184]['channels'] = array(0,1,4);
$users[185] = array(); $users[185]['userRole'] = AJAX_CHAT_USER; $users[185]['userName'] = 'haac_07'; $users[185]['password'] = '1550062'; $users[185]['displayName'] ='HAAC_Thanh Hà'; $users[185]['channels'] = array(0,1,4);
$users[186] = array(); $users[186]['userRole'] = AJAX_CHAT_USER; $users[186]['userName'] = 'haac_08'; $users[186]['password'] = '2655997'; $users[186]['displayName'] ='HAAC_Trọng Nhân'; $users[186]['channels'] = array(0,1,4);
$users[187] = array(); $users[187]['userRole'] = AJAX_CHAT_USER; $users[187]['userName'] = 'haac_09'; $users[187]['password'] = '2223830'; $users[187]['displayName'] ='HAAC_Nguyễn Thành Đạt'; $users[187]['channels'] = array(0,1,4);
$users[188] = array(); $users[188]['userRole'] = AJAX_CHAT_USER; $users[188]['userName'] = 'haac_10'; $users[188]['password'] = '7430216'; $users[188]['displayName'] ='HAAC_Hoài Nam'; $users[188]['channels'] = array(0,1,4);
$users[189] = array(); $users[189]['userRole'] = AJAX_CHAT_USER; $users[189]['userName'] = 'haac_11'; $users[189]['password'] = '9851176'; $users[189]['channels'] = array(0,1,4);
$users[190] = array(); $users[190]['userRole'] = AJAX_CHAT_USER; $users[190]['userName'] = 'gst_01'; $users[190]['password'] = '9502971'; $users[190]['displayName'] ='GST_Thị Hạnh'; $users[190]['channels'] = array(0,1);
$users[191] = array(); $users[191]['userRole'] = AJAX_CHAT_USER; $users[191]['userName'] = 'gst_02'; $users[191]['password'] = '8752216'; $users[191]['displayName'] ='GST_Thị My'; $users[191]['channels'] = array(0,1);
$users[192] = array(); $users[192]['userRole'] = AJAX_CHAT_USER; $users[192]['userName'] = 'gst_03'; $users[192]['password'] = '9121286'; $users[192]['displayName'] ='GST_Hoàng Yến'; $users[192]['channels'] = array(0,1);
$users[193] = array(); $users[193]['userRole'] = AJAX_CHAT_USER; $users[193]['userName'] = 'gst_04'; $users[193]['password'] = '9069712'; $users[193]['displayName'] ='GST_Thị Hiền'; $users[193]['channels'] = array(0,1);
$users[194] = array(); $users[194]['userRole'] = AJAX_CHAT_USER; $users[194]['userName'] = 'gst_05'; $users[194]['password'] = '3258733'; $users[194]['displayName'] ='GST_Vân Anh'; $users[194]['channels'] = array(0,1);
$users[195] = array(); $users[195]['userRole'] = AJAX_CHAT_USER; $users[195]['userName'] = 'gst_06'; $users[195]['password'] = '4961355'; $users[195]['displayName'] ='GST_Thủy Tiên'; $users[195]['channels'] = array(0,1);
$users[196] = array(); $users[196]['userRole'] = AJAX_CHAT_USER; $users[196]['userName'] = 'gst_07'; $users[196]['password'] = '8445789'; $users[196]['displayName'] ='GST_Văn Hanh'; $users[196]['channels'] = array(0,1);
$users[197] = array(); $users[197]['userRole'] = AJAX_CHAT_USER; $users[197]['userName'] = 'gst_08'; $users[197]['password'] = '4564664'; $users[197]['displayName'] ='GST_Khắc Tịnh'; $users[197]['channels'] = array(0,1);
$users[198] = array(); $users[198]['userRole'] = AJAX_CHAT_USER; $users[198]['userName'] = 'gst_09'; $users[198]['password'] = '5311849'; $users[198]['displayName'] ='GST_Đình Hoạt'; $users[198]['channels'] = array(0,1);
$users[199] = array(); $users[199]['userRole'] = AJAX_CHAT_USER; $users[199]['userName'] = 'gst_10'; $users[199]['password'] = '1091763'; $users[199]['channels'] = array(0,1);
$users[200] = array(); $users[200]['userRole'] = AJAX_CHAT_USER; $users[200]['userName'] = 'gst_11'; $users[200]['password'] = '2598901'; $users[200]['channels'] = array(0,1);
$users[201] = array(); $users[201]['userRole'] = AJAX_CHAT_USER; $users[201]['userName'] = 'n2t_01'; $users[201]['password'] = '8743350'; $users[201]['displayName'] ='N2T_Đình Phúc'; $users[201]['channels'] = array(0,1,7);
$users[202] = array(); $users[202]['userRole'] = AJAX_CHAT_USER; $users[202]['userName'] = 'n2t_02'; $users[202]['password'] = '1240313'; $users[202]['displayName'] ='N2T_Nhật Quang'; $users[202]['channels'] = array(0,1,7);
$users[203] = array(); $users[203]['userRole'] = AJAX_CHAT_USER; $users[203]['userName'] = 'n2t_03'; $users[203]['password'] = '8771431'; $users[203]['displayName'] ='N2T_Nhân Trí'; $users[203]['channels'] = array(0,1,7);
$users[204] = array(); $users[204]['userRole'] = AJAX_CHAT_USER; $users[204]['userName'] = 'n2t_04'; $users[204]['password'] = '2471208'; $users[204]['displayName'] ='N2T_Tâm Bình'; $users[204]['channels'] = array(0,1,7);
$users[205] = array(); $users[205]['userRole'] = AJAX_CHAT_USER; $users[205]['userName'] = 'n2t_05'; $users[205]['password'] = '1414030'; $users[205]['displayName'] ='N2T_Đình Huân'; $users[205]['channels'] = array(0,1,7);
$users[206] = array(); $users[206]['userRole'] = AJAX_CHAT_USER; $users[206]['userName'] = 'n2t_06'; $users[206]['password'] = '6199432'; $users[206]['displayName'] ='N2T_Ngọc Anh'; $users[206]['channels'] = array(0,1,7);
$users[207] = array(); $users[207]['userRole'] = AJAX_CHAT_USER; $users[207]['userName'] = 'n2t_07'; $users[207]['password'] = '6753499'; $users[207]['channels'] = array(0,1,7);
$users[208] = array(); $users[208]['userRole'] = AJAX_CHAT_USER; $users[208]['userName'] = 'n2t_08'; $users[208]['password'] = '6568151'; $users[208]['displayName'] ='N2T_Duy Long'; $users[208]['channels'] = array(0,1,7);
$users[209] = array(); $users[209]['userRole'] = AJAX_CHAT_USER; $users[209]['userName'] = 'n2t_09'; $users[209]['password'] = '3696937'; $users[209]['displayName'] ='N2T_Thủy Ngân'; $users[209]['channels'] = array(0,1,7);
$users[210] = array(); $users[210]['userRole'] = AJAX_CHAT_USER; $users[210]['userName'] = 'n2t_10'; $users[210]['password'] = '4648855'; $users[210]['displayName'] ='N2T_Huệ Phương'; $users[210]['channels'] = array(0,1,7);
$users[211] = array(); $users[211]['userRole'] = AJAX_CHAT_USER; $users[211]['userName'] = 'n2t_11'; $users[211]['password'] = '1560480'; $users[211]['channels'] = array(0,1);

// Mod Athena
$users[212] = array();
$users[212]['userRole'] = AJAX_CHAT_MODERATOR;
$users[212]['userName'] = 'mod_athena_01';
$users[212]['password'] = 'modaio';
$users[212]['channels'] = array(0,13);

// Mod Athena
$users[213] = array();
$users[213]['userRole'] = AJAX_CHAT_MODERATOR;
$users[213]['userName'] = 'mod_athena_02';
$users[213]['password'] = 'modaio';
$users[213]['channels'] = array(0,13);

// Mod Athena
$users[214] = array();
$users[214]['userRole'] = AJAX_CHAT_MODERATOR;
$users[214]['userName'] = 'mod_athena_03';
$users[214]['password'] = 'modaio';
$users[214]['channels'] = array(0,13);

// User Athena
$users[215] = array(); $users[215]['userRole'] = AJAX_CHAT_USER; $users[215]['userName'] = 'athena_001'; $users[215]['password'] = '8543519'; $users[215]['channels'] = array(0,13);
$users[216] = array(); $users[216]['userRole'] = AJAX_CHAT_USER; $users[216]['userName'] = 'athena_002'; $users[216]['password'] = '3976415'; $users[216]['channels'] = array(0,13);
$users[217] = array(); $users[217]['userRole'] = AJAX_CHAT_USER; $users[217]['userName'] = 'athena_003'; $users[217]['password'] = '7798095'; $users[217]['channels'] = array(0,13);
$users[218] = array(); $users[218]['userRole'] = AJAX_CHAT_USER; $users[218]['userName'] = 'athena_004'; $users[218]['password'] = '6099141'; $users[218]['channels'] = array(0,13);
$users[219] = array(); $users[219]['userRole'] = AJAX_CHAT_USER; $users[219]['userName'] = 'athena_005'; $users[219]['password'] = '6001498'; $users[219]['channels'] = array(0,13);
$users[220] = array(); $users[220]['userRole'] = AJAX_CHAT_USER; $users[220]['userName'] = 'athena_006'; $users[220]['password'] = '1170566'; $users[220]['channels'] = array(0,13);
$users[221] = array(); $users[221]['userRole'] = AJAX_CHAT_USER; $users[221]['userName'] = 'athena_007'; $users[221]['password'] = '2969297'; $users[221]['channels'] = array(0,13);
$users[222] = array(); $users[222]['userRole'] = AJAX_CHAT_USER; $users[222]['userName'] = 'athena_008'; $users[222]['password'] = '4236859'; $users[222]['channels'] = array(0,13);
$users[223] = array(); $users[223]['userRole'] = AJAX_CHAT_USER; $users[223]['userName'] = 'athena_009'; $users[223]['password'] = '3749740'; $users[223]['channels'] = array(0,13);
$users[224] = array(); $users[224]['userRole'] = AJAX_CHAT_USER; $users[224]['userName'] = 'athena_010'; $users[224]['password'] = '1928870'; $users[224]['channels'] = array(0,13);
$users[225] = array(); $users[225]['userRole'] = AJAX_CHAT_USER; $users[225]['userName'] = 'athena_011'; $users[225]['password'] = '4081151'; $users[225]['channels'] = array(0,13);
$users[226] = array(); $users[226]['userRole'] = AJAX_CHAT_USER; $users[226]['userName'] = 'athena_012'; $users[226]['password'] = '5842844'; $users[226]['channels'] = array(0,13);
$users[227] = array(); $users[227]['userRole'] = AJAX_CHAT_USER; $users[227]['userName'] = 'athena_013'; $users[227]['password'] = '8689397'; $users[227]['channels'] = array(0,13);
$users[228] = array(); $users[228]['userRole'] = AJAX_CHAT_USER; $users[228]['userName'] = 'athena_014'; $users[228]['password'] = '7630251'; $users[228]['channels'] = array(0,13);
$users[229] = array(); $users[229]['userRole'] = AJAX_CHAT_USER; $users[229]['userName'] = 'athena_015'; $users[229]['password'] = '1990157'; $users[229]['channels'] = array(0,13);
$users[230] = array(); $users[230]['userRole'] = AJAX_CHAT_USER; $users[230]['userName'] = 'athena_016'; $users[230]['password'] = '7800660'; $users[230]['channels'] = array(0,13);
$users[231] = array(); $users[231]['userRole'] = AJAX_CHAT_USER; $users[231]['userName'] = 'athena_017'; $users[231]['password'] = '5986824'; $users[231]['channels'] = array(0,13);
$users[232] = array(); $users[232]['userRole'] = AJAX_CHAT_USER; $users[232]['userName'] = 'athena_018'; $users[232]['password'] = '8115863'; $users[232]['channels'] = array(0,13);
$users[233] = array(); $users[233]['userRole'] = AJAX_CHAT_USER; $users[233]['userName'] = 'athena_019'; $users[233]['password'] = '3043180'; $users[233]['channels'] = array(0,13);
$users[234] = array(); $users[234]['userRole'] = AJAX_CHAT_USER; $users[234]['userName'] = 'athena_020'; $users[234]['password'] = '7714887'; $users[234]['channels'] = array(0,13);
$users[235] = array(); $users[235]['userRole'] = AJAX_CHAT_USER; $users[235]['userName'] = 'athena_021'; $users[235]['password'] = '6759467'; $users[235]['channels'] = array(0,13);
$users[236] = array(); $users[236]['userRole'] = AJAX_CHAT_USER; $users[236]['userName'] = 'athena_022'; $users[236]['password'] = '9525369'; $users[236]['channels'] = array(0,13);
$users[237] = array(); $users[237]['userRole'] = AJAX_CHAT_USER; $users[237]['userName'] = 'athena_023'; $users[237]['password'] = '9847113'; $users[237]['channels'] = array(0,13);
$users[238] = array(); $users[238]['userRole'] = AJAX_CHAT_USER; $users[238]['userName'] = 'athena_024'; $users[238]['password'] = '8662365'; $users[238]['channels'] = array(0,13);
$users[239] = array(); $users[239]['userRole'] = AJAX_CHAT_USER; $users[239]['userName'] = 'athena_025'; $users[239]['password'] = '3598089'; $users[239]['channels'] = array(0,13);
$users[240] = array(); $users[240]['userRole'] = AJAX_CHAT_USER; $users[240]['userName'] = 'athena_026'; $users[240]['password'] = '5882787'; $users[240]['channels'] = array(0,13);
$users[241] = array(); $users[241]['userRole'] = AJAX_CHAT_USER; $users[241]['userName'] = 'athena_027'; $users[241]['password'] = '3090950'; $users[241]['channels'] = array(0,13);
$users[242] = array(); $users[242]['userRole'] = AJAX_CHAT_USER; $users[242]['userName'] = 'athena_028'; $users[242]['password'] = '8784005'; $users[242]['channels'] = array(0,13);
$users[243] = array(); $users[243]['userRole'] = AJAX_CHAT_USER; $users[243]['userName'] = 'athena_029'; $users[243]['password'] = '7707627'; $users[243]['channels'] = array(0,13);
$users[244] = array(); $users[244]['userRole'] = AJAX_CHAT_USER; $users[244]['userName'] = 'athena_030'; $users[244]['password'] = '4549377'; $users[244]['channels'] = array(0,13);
$users[245] = array(); $users[245]['userRole'] = AJAX_CHAT_USER; $users[245]['userName'] = 'athena_031'; $users[245]['password'] = '8503062'; $users[245]['channels'] = array(0,13);
$users[246] = array(); $users[246]['userRole'] = AJAX_CHAT_USER; $users[246]['userName'] = 'athena_032'; $users[246]['password'] = '6514752'; $users[246]['channels'] = array(0,13);
$users[247] = array(); $users[247]['userRole'] = AJAX_CHAT_USER; $users[247]['userName'] = 'athena_033'; $users[247]['password'] = '9458650'; $users[247]['channels'] = array(0,13);
$users[248] = array(); $users[248]['userRole'] = AJAX_CHAT_USER; $users[248]['userName'] = 'athena_034'; $users[248]['password'] = '8938318'; $users[248]['channels'] = array(0,13);
$users[249] = array(); $users[249]['userRole'] = AJAX_CHAT_USER; $users[249]['userName'] = 'athena_035'; $users[249]['password'] = '6059183'; $users[249]['channels'] = array(0,13);
$users[250] = array(); $users[250]['userRole'] = AJAX_CHAT_USER; $users[250]['userName'] = 'athena_036'; $users[250]['password'] = '9921837'; $users[250]['channels'] = array(0,13);
$users[251] = array(); $users[251]['userRole'] = AJAX_CHAT_USER; $users[251]['userName'] = 'athena_037'; $users[251]['password'] = '3102813'; $users[251]['channels'] = array(0,13);
$users[252] = array(); $users[252]['userRole'] = AJAX_CHAT_USER; $users[252]['userName'] = 'athena_038'; $users[252]['password'] = '2432666'; $users[252]['channels'] = array(0,13);
$users[253] = array(); $users[253]['userRole'] = AJAX_CHAT_USER; $users[253]['userName'] = 'athena_039'; $users[253]['password'] = '6276352'; $users[253]['channels'] = array(0,13);
$users[254] = array(); $users[254]['userRole'] = AJAX_CHAT_USER; $users[254]['userName'] = 'athena_040'; $users[254]['password'] = '2077974'; $users[254]['channels'] = array(0,13);
$users[255] = array(); $users[255]['userRole'] = AJAX_CHAT_USER; $users[255]['userName'] = 'athena_041'; $users[255]['password'] = '1005924'; $users[255]['channels'] = array(0,13);
$users[256] = array(); $users[256]['userRole'] = AJAX_CHAT_USER; $users[256]['userName'] = 'athena_042'; $users[256]['password'] = '3184103'; $users[256]['channels'] = array(0,13);
$users[257] = array(); $users[257]['userRole'] = AJAX_CHAT_USER; $users[257]['userName'] = 'athena_043'; $users[257]['password'] = '7357277'; $users[257]['channels'] = array(0,13);
$users[258] = array(); $users[258]['userRole'] = AJAX_CHAT_USER; $users[258]['userName'] = 'athena_044'; $users[258]['password'] = '7218646'; $users[258]['channels'] = array(0,13);
$users[259] = array(); $users[259]['userRole'] = AJAX_CHAT_USER; $users[259]['userName'] = 'athena_045'; $users[259]['password'] = '6929999'; $users[259]['channels'] = array(0,13);
$users[260] = array(); $users[260]['userRole'] = AJAX_CHAT_USER; $users[260]['userName'] = 'athena_046'; $users[260]['password'] = '8293032'; $users[260]['channels'] = array(0,13);
$users[261] = array(); $users[261]['userRole'] = AJAX_CHAT_USER; $users[261]['userName'] = 'athena_047'; $users[261]['password'] = '8792154'; $users[261]['channels'] = array(0,13);
$users[262] = array(); $users[262]['userRole'] = AJAX_CHAT_USER; $users[262]['userName'] = 'athena_048'; $users[262]['password'] = '2863425'; $users[262]['channels'] = array(0,13);
$users[263] = array(); $users[263]['userRole'] = AJAX_CHAT_USER; $users[263]['userName'] = 'athena_049'; $users[263]['password'] = '4373954'; $users[263]['channels'] = array(0,13);
$users[264] = array(); $users[264]['userRole'] = AJAX_CHAT_USER; $users[264]['userName'] = 'athena_050'; $users[264]['password'] = '2811608'; $users[264]['channels'] = array(0,13);
$users[265] = array(); $users[265]['userRole'] = AJAX_CHAT_USER; $users[265]['userName'] = 'athena_051'; $users[265]['password'] = '5196693'; $users[265]['channels'] = array(0,13);
$users[266] = array(); $users[266]['userRole'] = AJAX_CHAT_USER; $users[266]['userName'] = 'athena_052'; $users[266]['password'] = '5871259'; $users[266]['channels'] = array(0,13);
$users[267] = array(); $users[267]['userRole'] = AJAX_CHAT_USER; $users[267]['userName'] = 'athena_053'; $users[267]['password'] = '5425048'; $users[267]['channels'] = array(0,13);
$users[268] = array(); $users[268]['userRole'] = AJAX_CHAT_USER; $users[268]['userName'] = 'athena_054'; $users[268]['password'] = '3658730'; $users[268]['channels'] = array(0,13);
$users[269] = array(); $users[269]['userRole'] = AJAX_CHAT_USER; $users[269]['userName'] = 'athena_055'; $users[269]['password'] = '9274534'; $users[269]['channels'] = array(0,13);
$users[270] = array(); $users[270]['userRole'] = AJAX_CHAT_USER; $users[270]['userName'] = 'athena_056'; $users[270]['password'] = '1014797'; $users[270]['channels'] = array(0,13);
$users[271] = array(); $users[271]['userRole'] = AJAX_CHAT_USER; $users[271]['userName'] = 'athena_057'; $users[271]['password'] = '7255753'; $users[271]['channels'] = array(0,13);
$users[272] = array(); $users[272]['userRole'] = AJAX_CHAT_USER; $users[272]['userName'] = 'athena_058'; $users[272]['password'] = '9233433'; $users[272]['channels'] = array(0,13);
$users[273] = array(); $users[273]['userRole'] = AJAX_CHAT_USER; $users[273]['userName'] = 'athena_059'; $users[273]['password'] = '6417310'; $users[273]['channels'] = array(0,13);
$users[274] = array(); $users[274]['userRole'] = AJAX_CHAT_USER; $users[274]['userName'] = 'athena_060'; $users[274]['password'] = '5658771'; $users[274]['channels'] = array(0,13);
$users[275] = array(); $users[275]['userRole'] = AJAX_CHAT_USER; $users[275]['userName'] = 'athena_061'; $users[275]['password'] = '8670203'; $users[275]['channels'] = array(0,13);
$users[276] = array(); $users[276]['userRole'] = AJAX_CHAT_USER; $users[276]['userName'] = 'athena_062'; $users[276]['password'] = '6407995'; $users[276]['channels'] = array(0,13);
$users[277] = array(); $users[277]['userRole'] = AJAX_CHAT_USER; $users[277]['userName'] = 'athena_063'; $users[277]['password'] = '4567470'; $users[277]['channels'] = array(0,13);
$users[278] = array(); $users[278]['userRole'] = AJAX_CHAT_USER; $users[278]['userName'] = 'athena_064'; $users[278]['password'] = '2594873'; $users[278]['channels'] = array(0,13);
$users[279] = array(); $users[279]['userRole'] = AJAX_CHAT_USER; $users[279]['userName'] = 'athena_065'; $users[279]['password'] = '8179833'; $users[279]['channels'] = array(0,13);
$users[280] = array(); $users[280]['userRole'] = AJAX_CHAT_USER; $users[280]['userName'] = 'athena_066'; $users[280]['password'] = '2458774'; $users[280]['channels'] = array(0,13);
$users[281] = array(); $users[281]['userRole'] = AJAX_CHAT_USER; $users[281]['userName'] = 'athena_067'; $users[281]['password'] = '9109170'; $users[281]['channels'] = array(0,13);
$users[282] = array(); $users[282]['userRole'] = AJAX_CHAT_USER; $users[282]['userName'] = 'athena_068'; $users[282]['password'] = '2501530'; $users[282]['channels'] = array(0,13);
$users[283] = array(); $users[283]['userRole'] = AJAX_CHAT_USER; $users[283]['userName'] = 'athena_069'; $users[283]['password'] = '9890821'; $users[283]['channels'] = array(0,13);
$users[284] = array(); $users[284]['userRole'] = AJAX_CHAT_USER; $users[284]['userName'] = 'athena_070'; $users[284]['password'] = '3012390'; $users[284]['channels'] = array(0,13);
$users[285] = array(); $users[285]['userRole'] = AJAX_CHAT_USER; $users[285]['userName'] = 'athena_071'; $users[285]['password'] = '6318814'; $users[285]['channels'] = array(0,13);
$users[286] = array(); $users[286]['userRole'] = AJAX_CHAT_USER; $users[286]['userName'] = 'athena_072'; $users[286]['password'] = '9453208'; $users[286]['channels'] = array(0,13);
$users[287] = array(); $users[287]['userRole'] = AJAX_CHAT_USER; $users[287]['userName'] = 'athena_073'; $users[287]['password'] = '7858554'; $users[287]['channels'] = array(0,13);
$users[288] = array(); $users[288]['userRole'] = AJAX_CHAT_USER; $users[288]['userName'] = 'athena_074'; $users[288]['password'] = '4384715'; $users[288]['channels'] = array(0,13);
$users[289] = array(); $users[289]['userRole'] = AJAX_CHAT_USER; $users[289]['userName'] = 'athena_075'; $users[289]['password'] = '2516867'; $users[289]['channels'] = array(0,13);
$users[290] = array(); $users[290]['userRole'] = AJAX_CHAT_USER; $users[290]['userName'] = 'athena_076'; $users[290]['password'] = '8579209'; $users[290]['channels'] = array(0,13);
$users[291] = array(); $users[291]['userRole'] = AJAX_CHAT_USER; $users[291]['userName'] = 'athena_077'; $users[291]['password'] = '3048989'; $users[291]['channels'] = array(0,13);
$users[292] = array(); $users[292]['userRole'] = AJAX_CHAT_USER; $users[292]['userName'] = 'athena_078'; $users[292]['password'] = '6471200'; $users[292]['channels'] = array(0,13);
$users[293] = array(); $users[293]['userRole'] = AJAX_CHAT_USER; $users[293]['userName'] = 'athena_079'; $users[293]['password'] = '4448002'; $users[293]['channels'] = array(0,13);
$users[294] = array(); $users[294]['userRole'] = AJAX_CHAT_USER; $users[294]['userName'] = 'athena_080'; $users[294]['password'] = '1238740'; $users[294]['channels'] = array(0,13);
$users[295] = array(); $users[295]['userRole'] = AJAX_CHAT_USER; $users[295]['userName'] = 'athena_081'; $users[295]['password'] = '4981452'; $users[295]['channels'] = array(0,13);
$users[296] = array(); $users[296]['userRole'] = AJAX_CHAT_USER; $users[296]['userName'] = 'athena_082'; $users[296]['password'] = '3516788'; $users[296]['channels'] = array(0,13);
$users[297] = array(); $users[297]['userRole'] = AJAX_CHAT_USER; $users[297]['userName'] = 'athena_083'; $users[297]['password'] = '6946054'; $users[297]['channels'] = array(0,13);
$users[298] = array(); $users[298]['userRole'] = AJAX_CHAT_USER; $users[298]['userName'] = 'athena_084'; $users[298]['password'] = '1129891'; $users[298]['channels'] = array(0,13);
$users[299] = array(); $users[299]['userRole'] = AJAX_CHAT_USER; $users[299]['userName'] = 'athena_085'; $users[299]['password'] = '2622755'; $users[299]['channels'] = array(0,13);
$users[300] = array(); $users[300]['userRole'] = AJAX_CHAT_USER; $users[300]['userName'] = 'athena_086'; $users[300]['password'] = '2720910'; $users[300]['channels'] = array(0,13);
$users[301] = array(); $users[301]['userRole'] = AJAX_CHAT_USER; $users[301]['userName'] = 'athena_087'; $users[301]['password'] = '6497067'; $users[301]['channels'] = array(0,13);
$users[302] = array(); $users[302]['userRole'] = AJAX_CHAT_USER; $users[302]['userName'] = 'athena_088'; $users[302]['password'] = '9102740'; $users[302]['channels'] = array(0,13);
$users[303] = array(); $users[303]['userRole'] = AJAX_CHAT_USER; $users[303]['userName'] = 'athena_089'; $users[303]['password'] = '1587832'; $users[303]['channels'] = array(0,13);
$users[304] = array(); $users[304]['userRole'] = AJAX_CHAT_USER; $users[304]['userName'] = 'athena_090'; $users[304]['password'] = '8031497'; $users[304]['channels'] = array(0,13);
$users[305] = array(); $users[305]['userRole'] = AJAX_CHAT_USER; $users[305]['userName'] = 'athena_091'; $users[305]['password'] = '6942675'; $users[305]['channels'] = array(0,13);
$users[306] = array(); $users[306]['userRole'] = AJAX_CHAT_USER; $users[306]['userName'] = 'athena_092'; $users[306]['password'] = '7809060'; $users[306]['channels'] = array(0,13);
$users[307] = array(); $users[307]['userRole'] = AJAX_CHAT_USER; $users[307]['userName'] = 'athena_093'; $users[307]['password'] = '3049796'; $users[307]['channels'] = array(0,13);
$users[308] = array(); $users[308]['userRole'] = AJAX_CHAT_USER; $users[308]['userName'] = 'athena_094'; $users[308]['password'] = '3598548'; $users[308]['channels'] = array(0,13);
$users[309] = array(); $users[309]['userRole'] = AJAX_CHAT_USER; $users[309]['userName'] = 'athena_095'; $users[309]['password'] = '8729520'; $users[309]['channels'] = array(0,13);
$users[310] = array(); $users[310]['userRole'] = AJAX_CHAT_USER; $users[310]['userName'] = 'athena_096'; $users[310]['password'] = '1341168'; $users[310]['channels'] = array(0,13);
$users[311] = array(); $users[311]['userRole'] = AJAX_CHAT_USER; $users[311]['userName'] = 'athena_097'; $users[311]['password'] = '2056986'; $users[311]['channels'] = array(0,13);
$users[312] = array(); $users[312]['userRole'] = AJAX_CHAT_USER; $users[312]['userName'] = 'athena_098'; $users[312]['password'] = '7485731'; $users[312]['channels'] = array(0,13);
$users[313] = array(); $users[313]['userRole'] = AJAX_CHAT_USER; $users[313]['userName'] = 'athena_099'; $users[313]['password'] = '1429576'; $users[313]['channels'] = array(0,13);
$users[314] = array(); $users[314]['userRole'] = AJAX_CHAT_USER; $users[314]['userName'] = 'athena_100'; $users[314]['password'] = '8559382'; $users[314]['channels'] = array(0,13);
$users[315] = array(); $users[315]['userRole'] = AJAX_CHAT_USER; $users[315]['userName'] = 'athena_101'; $users[315]['password'] = '1969234'; $users[315]['channels'] = array(0,13);
$users[316] = array(); $users[316]['userRole'] = AJAX_CHAT_USER; $users[316]['userName'] = 'athena_102'; $users[316]['password'] = '3544820'; $users[316]['channels'] = array(0,13);
$users[317] = array(); $users[317]['userRole'] = AJAX_CHAT_USER; $users[317]['userName'] = 'athena_103'; $users[317]['password'] = '8403259'; $users[317]['channels'] = array(0,13);
$users[318] = array(); $users[318]['userRole'] = AJAX_CHAT_USER; $users[318]['userName'] = 'athena_104'; $users[318]['password'] = '6365952'; $users[318]['channels'] = array(0,13);
$users[319] = array(); $users[319]['userRole'] = AJAX_CHAT_USER; $users[319]['userName'] = 'athena_105'; $users[319]['password'] = '4682564'; $users[319]['channels'] = array(0,13);
$users[320] = array(); $users[320]['userRole'] = AJAX_CHAT_USER; $users[320]['userName'] = 'athena_106'; $users[320]['password'] = '2908927'; $users[320]['channels'] = array(0,13);
$users[321] = array(); $users[321]['userRole'] = AJAX_CHAT_USER; $users[321]['userName'] = 'athena_107'; $users[321]['password'] = '6908309'; $users[321]['channels'] = array(0,13);
$users[322] = array(); $users[322]['userRole'] = AJAX_CHAT_USER; $users[322]['userName'] = 'athena_108'; $users[322]['password'] = '6605877'; $users[322]['channels'] = array(0,13);
$users[323] = array(); $users[323]['userRole'] = AJAX_CHAT_USER; $users[323]['userName'] = 'athena_109'; $users[323]['password'] = '7470473'; $users[323]['channels'] = array(0,13);
$users[324] = array(); $users[324]['userRole'] = AJAX_CHAT_USER; $users[324]['userName'] = 'athena_110'; $users[324]['password'] = '7090466'; $users[324]['channels'] = array(0,13);
$users[325] = array(); $users[325]['userRole'] = AJAX_CHAT_USER; $users[325]['userName'] = 'athena_111'; $users[325]['password'] = '4158742'; $users[325]['channels'] = array(0,13);
$users[326] = array(); $users[326]['userRole'] = AJAX_CHAT_USER; $users[326]['userName'] = 'athena_112'; $users[326]['password'] = '7560757'; $users[326]['channels'] = array(0,13);
$users[327] = array(); $users[327]['userRole'] = AJAX_CHAT_USER; $users[327]['userName'] = 'athena_113'; $users[327]['password'] = '9113820'; $users[327]['channels'] = array(0,13);
$users[328] = array(); $users[328]['userRole'] = AJAX_CHAT_USER; $users[328]['userName'] = 'athena_114'; $users[328]['password'] = '4499185'; $users[328]['channels'] = array(0,13);
$users[329] = array(); $users[329]['userRole'] = AJAX_CHAT_USER; $users[329]['userName'] = 'athena_115'; $users[329]['password'] = '5443991'; $users[329]['channels'] = array(0,13);
$users[330] = array(); $users[330]['userRole'] = AJAX_CHAT_USER; $users[330]['userName'] = 'athena_116'; $users[330]['password'] = '2228983'; $users[330]['channels'] = array(0,13);
$users[331] = array(); $users[331]['userRole'] = AJAX_CHAT_USER; $users[331]['userName'] = 'athena_117'; $users[331]['password'] = '1882341'; $users[331]['channels'] = array(0,13);
$users[332] = array(); $users[332]['userRole'] = AJAX_CHAT_USER; $users[332]['userName'] = 'athena_118'; $users[332]['password'] = '3535235'; $users[332]['channels'] = array(0,13);
$users[333] = array(); $users[333]['userRole'] = AJAX_CHAT_USER; $users[333]['userName'] = 'athena_119'; $users[333]['password'] = '8958072'; $users[333]['channels'] = array(0,13);
$users[334] = array(); $users[334]['userRole'] = AJAX_CHAT_USER; $users[334]['userName'] = 'athena_120'; $users[334]['password'] = '5939491'; $users[334]['channels'] = array(0,13);
$users[335] = array(); $users[335]['userRole'] = AJAX_CHAT_USER; $users[335]['userName'] = 'athena_121'; $users[335]['password'] = '7474008'; $users[335]['channels'] = array(0,13);
$users[336] = array(); $users[336]['userRole'] = AJAX_CHAT_USER; $users[336]['userName'] = 'athena_122'; $users[336]['password'] = '1297643'; $users[336]['channels'] = array(0,13);
$users[337] = array(); $users[337]['userRole'] = AJAX_CHAT_USER; $users[337]['userName'] = 'athena_123'; $users[337]['password'] = '8173868'; $users[337]['channels'] = array(0,13);
$users[338] = array(); $users[338]['userRole'] = AJAX_CHAT_USER; $users[338]['userName'] = 'athena_124'; $users[338]['password'] = '1864745'; $users[338]['channels'] = array(0,13);
$users[339] = array(); $users[339]['userRole'] = AJAX_CHAT_USER; $users[339]['userName'] = 'athena_125'; $users[339]['password'] = '9492119'; $users[339]['channels'] = array(0,13);
$users[340] = array(); $users[340]['userRole'] = AJAX_CHAT_USER; $users[340]['userName'] = 'athena_126'; $users[340]['password'] = '5299297'; $users[340]['channels'] = array(0,13);
$users[341] = array(); $users[341]['userRole'] = AJAX_CHAT_USER; $users[341]['userName'] = 'athena_127'; $users[341]['password'] = '6564872'; $users[341]['channels'] = array(0,13);
$users[342] = array(); $users[342]['userRole'] = AJAX_CHAT_USER; $users[342]['userName'] = 'athena_128'; $users[342]['password'] = '9977235'; $users[342]['channels'] = array(0,13);
$users[343] = array(); $users[343]['userRole'] = AJAX_CHAT_USER; $users[343]['userName'] = 'athena_129'; $users[343]['password'] = '5322069'; $users[343]['channels'] = array(0,13);
$users[344] = array(); $users[344]['userRole'] = AJAX_CHAT_USER; $users[344]['userName'] = 'athena_130'; $users[344]['password'] = '4635486'; $users[344]['channels'] = array(0,13);

// Mod S14
$users[345] = array();
$users[345]['userRole'] = AJAX_CHAT_MODERATOR;
$users[345]['userName'] = 'mod_014';
$users[345]['password'] = 'room14mod';
$users[345]['channels'] = array(0,14);

$users[346] = array(); $users[346]['userRole'] = AJAX_CHAT_USER; $users[346]['userName'] = 'unused_001'; $users[346]['password'] = '6339475'; $users[346]['channels'] = array(0,14);
$users[347] = array(); $users[347]['userRole'] = AJAX_CHAT_USER; $users[347]['userName'] = 'unused_002'; $users[347]['password'] = '8086451'; $users[347]['channels'] = array(0,14);
$users[348] = array(); $users[348]['userRole'] = AJAX_CHAT_USER; $users[348]['userName'] = 'unused_003'; $users[348]['password'] = '8062143'; $users[348]['channels'] = array(0,14);
$users[349] = array(); $users[349]['userRole'] = AJAX_CHAT_USER; $users[349]['userName'] = 'unused_004'; $users[349]['password'] = '7017404'; $users[349]['channels'] = array(0,14);
$users[350] = array(); $users[350]['userRole'] = AJAX_CHAT_USER; $users[350]['userName'] = 'unused_005'; $users[350]['password'] = '9436859'; $users[350]['channels'] = array(0,14);
$users[351] = array(); $users[351]['userRole'] = AJAX_CHAT_USER; $users[351]['userName'] = 'unused_006'; $users[351]['password'] = '5752651'; $users[351]['channels'] = array(0,14);
$users[352] = array(); $users[352]['userRole'] = AJAX_CHAT_USER; $users[352]['userName'] = 'unused_007'; $users[352]['password'] = '5504950'; $users[352]['channels'] = array(0,14);
$users[353] = array(); $users[353]['userRole'] = AJAX_CHAT_USER; $users[353]['userName'] = 'unused_008'; $users[353]['password'] = '9786160'; $users[353]['channels'] = array(0,14);
$users[354] = array(); $users[354]['userRole'] = AJAX_CHAT_USER; $users[354]['userName'] = 'unused_009'; $users[354]['password'] = '8427813'; $users[354]['channels'] = array(0,14);
$users[355] = array(); $users[355]['userRole'] = AJAX_CHAT_USER; $users[355]['userName'] = 'unused_010'; $users[355]['password'] = '6217931'; $users[355]['channels'] = array(0,14);
$users[356] = array(); $users[356]['userRole'] = AJAX_CHAT_USER; $users[356]['userName'] = 'unused_011'; $users[356]['password'] = '5386052'; $users[356]['channels'] = array(0,14);
$users[357] = array(); $users[357]['userRole'] = AJAX_CHAT_USER; $users[357]['userName'] = 'unused_012'; $users[357]['password'] = '7522270'; $users[357]['channels'] = array(0,14);
$users[358] = array(); $users[358]['userRole'] = AJAX_CHAT_USER; $users[358]['userName'] = 'unused_013'; $users[358]['password'] = '4037914'; $users[358]['channels'] = array(0,14);
$users[359] = array(); $users[359]['userRole'] = AJAX_CHAT_USER; $users[359]['userName'] = 'unused_014'; $users[359]['password'] = '7501482'; $users[359]['channels'] = array(0,14);
$users[360] = array(); $users[360]['userRole'] = AJAX_CHAT_USER; $users[360]['userName'] = 'unused_015'; $users[360]['password'] = '3077173'; $users[360]['channels'] = array(0,14);
$users[361] = array(); $users[361]['userRole'] = AJAX_CHAT_USER; $users[361]['userName'] = 'unused_016'; $users[361]['password'] = '7206773'; $users[361]['channels'] = array(0,14);
$users[362] = array(); $users[362]['userRole'] = AJAX_CHAT_USER; $users[362]['userName'] = 'unused_017'; $users[362]['password'] = '5938231'; $users[362]['channels'] = array(0,14);
$users[363] = array(); $users[363]['userRole'] = AJAX_CHAT_USER; $users[363]['userName'] = 'unused_018'; $users[363]['password'] = '1388025'; $users[363]['channels'] = array(0,14);
$users[364] = array(); $users[364]['userRole'] = AJAX_CHAT_USER; $users[364]['userName'] = 'unused_019'; $users[364]['password'] = '7570399'; $users[364]['channels'] = array(0,14);
$users[365] = array(); $users[365]['userRole'] = AJAX_CHAT_USER; $users[365]['userName'] = 'unused_020'; $users[365]['password'] = '2301013'; $users[365]['channels'] = array(0,14);
$users[366] = array(); $users[366]['userRole'] = AJAX_CHAT_USER; $users[366]['userName'] = 'unused_021'; $users[366]['password'] = '6982100'; $users[366]['channels'] = array(0,14);
$users[367] = array(); $users[367]['userRole'] = AJAX_CHAT_USER; $users[367]['userName'] = 'unused_022'; $users[367]['password'] = '7436459'; $users[367]['channels'] = array(0,14);
$users[368] = array(); $users[368]['userRole'] = AJAX_CHAT_USER; $users[368]['userName'] = 'unused_023'; $users[368]['password'] = '2181262'; $users[368]['channels'] = array(0,14);
$users[369] = array(); $users[369]['userRole'] = AJAX_CHAT_USER; $users[369]['userName'] = 'unused_024'; $users[369]['password'] = '3154399'; $users[369]['channels'] = array(0,14);
$users[370] = array(); $users[370]['userRole'] = AJAX_CHAT_USER; $users[370]['userName'] = 'unused_025'; $users[370]['password'] = '1576059'; $users[370]['channels'] = array(0,14);
$users[371] = array(); $users[371]['userRole'] = AJAX_CHAT_USER; $users[371]['userName'] = 'unused_026'; $users[371]['password'] = '1052733'; $users[371]['channels'] = array(0,14);
$users[372] = array(); $users[372]['userRole'] = AJAX_CHAT_USER; $users[372]['userName'] = 'unused_027'; $users[372]['password'] = '8106811'; $users[372]['channels'] = array(0,14);
$users[373] = array(); $users[373]['userRole'] = AJAX_CHAT_USER; $users[373]['userName'] = 'unused_028'; $users[373]['password'] = '1539114'; $users[373]['channels'] = array(0,14);
$users[374] = array(); $users[374]['userRole'] = AJAX_CHAT_USER; $users[374]['userName'] = 'unused_029'; $users[374]['password'] = '4466467'; $users[374]['channels'] = array(0,14);
$users[375] = array(); $users[375]['userRole'] = AJAX_CHAT_USER; $users[375]['userName'] = 'unused_030'; $users[375]['password'] = '9723745'; $users[375]['channels'] = array(0,14);

// Huyen Thoai Everest

$users[376] = array(); $users[376]['userRole'] = AJAX_CHAT_USER; $users[376]['userName'] = 'mod_everest_01'; $users[376]['password'] = '9984672'; $users[376]['channels'] = array(0,15);
$users[377] = array(); $users[377]['userRole'] = AJAX_CHAT_USER; $users[377]['userName'] = 'mod_everest_02'; $users[377]['password'] = '6414872'; $users[377]['channels'] = array(0,15);
$users[378] = array(); $users[378]['userRole'] = AJAX_CHAT_USER; $users[378]['userName'] = 'mod_everest_03'; $users[378]['password'] = '6626989'; $users[378]['channels'] = array(0,15);
$users[379] = array(); $users[379]['userRole'] = AJAX_CHAT_USER; $users[379]['userName'] = 'everest_001'; $users[379]['password'] = '7345759'; $users[379]['channels'] = array(0,15);
$users[380] = array(); $users[380]['userRole'] = AJAX_CHAT_USER; $users[380]['userName'] = 'everest_002'; $users[380]['password'] = '3481482'; $users[380]['channels'] = array(0,15);
$users[381] = array(); $users[381]['userRole'] = AJAX_CHAT_USER; $users[381]['userName'] = 'everest_003'; $users[381]['password'] = '3053815'; $users[381]['channels'] = array(0,15);
$users[382] = array(); $users[382]['userRole'] = AJAX_CHAT_USER; $users[382]['userName'] = 'everest_004'; $users[382]['password'] = '1621119'; $users[382]['channels'] = array(0,15);
$users[383] = array(); $users[383]['userRole'] = AJAX_CHAT_USER; $users[383]['userName'] = 'everest_005'; $users[383]['password'] = '9795297'; $users[383]['channels'] = array(0,15);
$users[384] = array(); $users[384]['userRole'] = AJAX_CHAT_USER; $users[384]['userName'] = 'everest_006'; $users[384]['password'] = '1576647'; $users[384]['channels'] = array(0,15);
$users[385] = array(); $users[385]['userRole'] = AJAX_CHAT_USER; $users[385]['userName'] = 'everest_007'; $users[385]['password'] = '1977291'; $users[385]['channels'] = array(0,15);
$users[386] = array(); $users[386]['userRole'] = AJAX_CHAT_USER; $users[386]['userName'] = 'everest_008'; $users[386]['password'] = '9613137'; $users[386]['channels'] = array(0,15);
$users[387] = array(); $users[387]['userRole'] = AJAX_CHAT_USER; $users[387]['userName'] = 'everest_009'; $users[387]['password'] = '7955063'; $users[387]['channels'] = array(0,15);
$users[388] = array(); $users[388]['userRole'] = AJAX_CHAT_USER; $users[388]['userName'] = 'everest_010'; $users[388]['password'] = '4269938'; $users[388]['channels'] = array(0,15);
$users[389] = array(); $users[389]['userRole'] = AJAX_CHAT_USER; $users[389]['userName'] = 'everest_011'; $users[389]['password'] = '4514084'; $users[389]['channels'] = array(0,15);
$users[390] = array(); $users[390]['userRole'] = AJAX_CHAT_USER; $users[390]['userName'] = 'everest_012'; $users[390]['password'] = '1806880'; $users[390]['channels'] = array(0,15);
$users[391] = array(); $users[391]['userRole'] = AJAX_CHAT_USER; $users[391]['userName'] = 'everest_013'; $users[391]['password'] = '5495843'; $users[391]['channels'] = array(0,15);
$users[392] = array(); $users[392]['userRole'] = AJAX_CHAT_USER; $users[392]['userName'] = 'everest_014'; $users[392]['password'] = '7197154'; $users[392]['channels'] = array(0,15);
$users[393] = array(); $users[393]['userRole'] = AJAX_CHAT_USER; $users[393]['userName'] = 'everest_015'; $users[393]['password'] = '9182787'; $users[393]['channels'] = array(0,15);
$users[394] = array(); $users[394]['userRole'] = AJAX_CHAT_USER; $users[394]['userName'] = 'everest_016'; $users[394]['password'] = '7601953'; $users[394]['channels'] = array(0,15);
$users[395] = array(); $users[395]['userRole'] = AJAX_CHAT_USER; $users[395]['userName'] = 'everest_017'; $users[395]['password'] = '3052055'; $users[395]['channels'] = array(0,15);
$users[396] = array(); $users[396]['userRole'] = AJAX_CHAT_USER; $users[396]['userName'] = 'everest_018'; $users[396]['password'] = '4231940'; $users[396]['channels'] = array(0,15);
$users[397] = array(); $users[397]['userRole'] = AJAX_CHAT_USER; $users[397]['userName'] = 'everest_019'; $users[397]['password'] = '1313445'; $users[397]['channels'] = array(0,15);
$users[398] = array(); $users[398]['userRole'] = AJAX_CHAT_USER; $users[398]['userName'] = 'everest_020'; $users[398]['password'] = '1677757'; $users[398]['channels'] = array(0,15);
$users[399] = array(); $users[399]['userRole'] = AJAX_CHAT_USER; $users[399]['userName'] = 'everest_021'; $users[399]['password'] = '9018370'; $users[399]['channels'] = array(0,15);
$users[400] = array(); $users[400]['userRole'] = AJAX_CHAT_USER; $users[400]['userName'] = 'everest_022'; $users[400]['password'] = '9008604'; $users[400]['channels'] = array(0,15);
$users[401] = array(); $users[401]['userRole'] = AJAX_CHAT_USER; $users[401]['userName'] = 'everest_023'; $users[401]['password'] = '8082078'; $users[401]['channels'] = array(0,15);
$users[402] = array(); $users[402]['userRole'] = AJAX_CHAT_USER; $users[402]['userName'] = 'everest_024'; $users[402]['password'] = '9079407'; $users[402]['channels'] = array(0,15);
$users[403] = array(); $users[403]['userRole'] = AJAX_CHAT_USER; $users[403]['userName'] = 'everest_025'; $users[403]['password'] = '3538723'; $users[403]['channels'] = array(0,15);
$users[404] = array(); $users[404]['userRole'] = AJAX_CHAT_USER; $users[404]['userName'] = 'everest_026'; $users[404]['password'] = '6537031'; $users[404]['channels'] = array(0,15);
$users[405] = array(); $users[405]['userRole'] = AJAX_CHAT_USER; $users[405]['userName'] = 'everest_027'; $users[405]['password'] = '4582979'; $users[405]['channels'] = array(0,15);
$users[406] = array(); $users[406]['userRole'] = AJAX_CHAT_USER; $users[406]['userName'] = 'everest_028'; $users[406]['password'] = '6055966'; $users[406]['channels'] = array(0,15);
$users[407] = array(); $users[407]['userRole'] = AJAX_CHAT_USER; $users[407]['userName'] = 'everest_029'; $users[407]['password'] = '9913625'; $users[407]['channels'] = array(0,15);
$users[408] = array(); $users[408]['userRole'] = AJAX_CHAT_USER; $users[408]['userName'] = 'everest_030'; $users[408]['password'] = '3795323'; $users[408]['channels'] = array(0,15);
$users[409] = array(); $users[409]['userRole'] = AJAX_CHAT_USER; $users[409]['userName'] = 'everest_031'; $users[409]['password'] = '5634968'; $users[409]['channels'] = array(0,15);
$users[410] = array(); $users[410]['userRole'] = AJAX_CHAT_USER; $users[410]['userName'] = 'everest_032'; $users[410]['password'] = '9278405'; $users[410]['channels'] = array(0,15);
$users[411] = array(); $users[411]['userRole'] = AJAX_CHAT_USER; $users[411]['userName'] = 'everest_033'; $users[411]['password'] = '1166438'; $users[411]['channels'] = array(0,15);
$users[412] = array(); $users[412]['userRole'] = AJAX_CHAT_USER; $users[412]['userName'] = 'everest_034'; $users[412]['password'] = '3384496'; $users[412]['channels'] = array(0,15);
$users[413] = array(); $users[413]['userRole'] = AJAX_CHAT_USER; $users[413]['userName'] = 'everest_035'; $users[413]['password'] = '3161976'; $users[413]['channels'] = array(0,15);
$users[414] = array(); $users[414]['userRole'] = AJAX_CHAT_USER; $users[414]['userName'] = 'everest_036'; $users[414]['password'] = '4961219'; $users[414]['channels'] = array(0,15);
$users[415] = array(); $users[415]['userRole'] = AJAX_CHAT_USER; $users[415]['userName'] = 'everest_037'; $users[415]['password'] = '1446340'; $users[415]['channels'] = array(0,15);
$users[416] = array(); $users[416]['userRole'] = AJAX_CHAT_USER; $users[416]['userName'] = 'everest_038'; $users[416]['password'] = '3900724'; $users[416]['channels'] = array(0,15);
$users[417] = array(); $users[417]['userRole'] = AJAX_CHAT_USER; $users[417]['userName'] = 'everest_039'; $users[417]['password'] = '5077274'; $users[417]['channels'] = array(0,15);
$users[418] = array(); $users[418]['userRole'] = AJAX_CHAT_USER; $users[418]['userName'] = 'everest_040'; $users[418]['password'] = '7004584'; $users[418]['channels'] = array(0,15);
$users[419] = array(); $users[419]['userRole'] = AJAX_CHAT_USER; $users[419]['userName'] = 'everest_041'; $users[419]['password'] = '7425874'; $users[419]['channels'] = array(0,15);
$users[420] = array(); $users[420]['userRole'] = AJAX_CHAT_USER; $users[420]['userName'] = 'everest_042'; $users[420]['password'] = '6334181'; $users[420]['channels'] = array(0,15);
$users[421] = array(); $users[421]['userRole'] = AJAX_CHAT_USER; $users[421]['userName'] = 'everest_043'; $users[421]['password'] = '8520635'; $users[421]['channels'] = array(0,15);
$users[422] = array(); $users[422]['userRole'] = AJAX_CHAT_USER; $users[422]['userName'] = 'everest_044'; $users[422]['password'] = '8064415'; $users[422]['channels'] = array(0,15);
$users[423] = array(); $users[423]['userRole'] = AJAX_CHAT_USER; $users[423]['userName'] = 'everest_045'; $users[423]['password'] = '2764474'; $users[423]['channels'] = array(0,15);
$users[424] = array(); $users[424]['userRole'] = AJAX_CHAT_USER; $users[424]['userName'] = 'everest_046'; $users[424]['password'] = '7158128'; $users[424]['channels'] = array(0,15);
$users[425] = array(); $users[425]['userRole'] = AJAX_CHAT_USER; $users[425]['userName'] = 'everest_047'; $users[425]['password'] = '7437265'; $users[425]['channels'] = array(0,15);
$users[426] = array(); $users[426]['userRole'] = AJAX_CHAT_USER; $users[426]['userName'] = 'everest_048'; $users[426]['password'] = '5143003'; $users[426]['channels'] = array(0,15);
$users[427] = array(); $users[427]['userRole'] = AJAX_CHAT_USER; $users[427]['userName'] = 'everest_049'; $users[427]['password'] = '7956828'; $users[427]['channels'] = array(0,15);
$users[428] = array(); $users[428]['userRole'] = AJAX_CHAT_USER; $users[428]['userName'] = 'everest_050'; $users[428]['password'] = '5058276'; $users[428]['channels'] = array(0,15);



?>
