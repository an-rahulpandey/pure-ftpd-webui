<?php
// Menu
$menu1_act = "Active users";
$menu2_users = "User management";
$menu3_userdel = "Delete user";
$menu4_daemon = "Pure-FTPd management";
$menu5_settings = "Settings";
$menu6_webuictl = "Pure-FTPd WebUI users";
// User activity
$ua_title = "User activity";
$ua_t_title = "Active users";
$ua_t_th1 = "User";
$ua_t_th2 = "Time/Speed";
$ua_t_th3 = "Status";
$ua_t_th4 = "File/IP";
// User management
$um_title = "User management";
$um_userform_login = "Login";
$um_userform_status = "User's status</br>(0 - inactive, 1 - active)";
$um_userform_pwd = "Password";
$um_userform_folder = "User's folder</br>(leave empty to use default)";
$um_userform_ullimit = "Upload speed limit KB/s, 0 - no speed limit</br>(leave empty to use default)";
$um_userform_dllimit = "Download speed limit KB/s, 0 - no speed limit</br>(leave empty to use default)";
$um_userform_permip = "Permitted IP-address, * - any IP-address</br>(leave empty to use default)";
$um_userform_quotasize = "User quota for uploaded/downloaded data size</br>(leave empty to use default)";
$um_userform_quotafiles = "User quota for uploaded/downloaded files</br>(leave empty to use default)";
$um_add_addbutton = "Add";
$um_add_backbutton = "Back to users list";
$um_add_presultok = "Successfully added user $User";
$um_add_presulterror = "ERROR: $result";
$um_add_checkfields = "Can't add user, not filled in all fields";
$um_add_checkfieldsback = "Back to users list";
$um_edit_folderok = "Successfully changed user's folder for user $array[User]";
$um_edit_foldererror = "ERROR: $result";
$um_edit_loginok = "Login $array[User] successfully changed to $User";
$um_edit_loginerror = "ERROR: $result";
$um_edit_statusok = "$array[User] status successfully changed";
$um_edit_statuserror = "ERROR: $result";
$um_edit_passwdok = "$array[User] password successfully changed";
$um_edit_passwderror = "ERROR: $result";
$um_edit_ullimitok = "Upload speed limit for user $array[User] successfully changed";
$um_edit_ullimiterror = "ERROR: $result";
$um_edit_dllimitok = "Download speed limit for user $array[User] successfully changed";
$um_edit_dllimiterror = "ERROR: $result";
$um_edit_permipok = "Permitted IP-address for user $array[User] successfully changed";
$um_edit_permiperror = "ERROR: $result";
$um_edit_quotasizeok = "Quota for uploaded/downloaded data size for user $array[User] successfully changed";
$um_edit_quotasizeerror = "ERROR: $result";
$um_edit_quotafilesok = "Quota for uploaded/downloaded files count for user $array[User] successfully changed";
$um_edit_quotafileserror = "ERROR: $result";
$um_edit_nochanges = "You didn't make any changes";
$um_edit_nochangesback = "Back to users list";
$um_t_title = "Select user to edit";
$um_t_th1 = "Login";
$um_t_th2 = "Status";
$um_t_th3 = "Folder";
$um_t_th4 = "upload limit (kb/s)";
$um_t_th5 = "download limit (kb/s)";
$um_t_th6 = "Permitted IP";
$um_t_th7 = "QuotaSize";
$um_t_th8 = "QuotaFiles";
$um_adduserbutton = "Add user";
$um_edit_savebutton = "Save changes";
$um_edit_backbutton = "Back to users list";
// Drop user
$du_title = "Delete user";
$du_success = "User successfully deleted";
$du_error = "ERROR: $result";
$du_notchecked = "User not checked";
// Del user
$del_title = "Delete user";
$del_selecttitle = "Select user to delete";
$del_button = "Delete user";
// Daemon control
$dc_title = "Pure-FTPd daemon control";
$dc_confeditbackbutton = "Back";
$dc_confeditsavebutton = "Save";
$dc_confeditsuccess = "Successfully saved changes, restart Pure-FTPd daemon to changes take effect";
$dc_confeditnorights = "Can't save configuration file, no permissions to write in file";
$dc_daemoncontrol = "Daemon control";
$dc_wrongcommand = "You gived a wrong command to Pure-FTPd daemon";
$dc_wrongcommandback = "Back";
$dc_dctitle = "Pure-FTPd daemon control";
$dc_dcperformbutton = "Perform";
$dc_dceditconfig = "Edit config";
// WebUI users
$wu_title = "Pure-FTPd WebUI users";
$wu_select = "Select user to edit";
$wu_editbutton = "Edit";
$wu_adduserbutton = "Add user";
$wu_add_resultok = "Successfully added user";
$wu_add_resulterror = "ERROR: $result";
$wu_add_checkfields = "Can't add user, not filled in all fields";
$wu_add_checkfieldsback = "Back to users list";
// Edit WebUI users
$ewu_form_login = "Login";
$ewu_form_pwd = "Password";
$ewu_form_lang = "Language";
$ewu_save = "Save changes";
$ewu_edit_loginok = "Login $array[user] successfully changed to $user";
$ewu_edit_loginerror = "ERROR: $result";
$ewu_edit_passwdok = "Password for user $array[user] successfully changed";
$ewu_edit_passwderror = "ERROR: $result";
$ewu_edit_languageok = "Language for user $array[user] successfully changed";
$ewu_edit_languageerror = "ERROR: $result";
$ewu_edit_nochanges = "You didn't make any changes";
$ewu_edit_nochangesback = "Back to users list";
$ewu_deluserbutton = "Delete user";
$ewu_del_resultok = "User successfully deleted";
$ewu_del_resulterror = "ERROR: $result";
$ewu_del_notchecked = "User not checked";
// Settings
$settings_title = "Settings";
$settings_ftp_dir_ok = "Default FTP directory successfully changed";
$settings_ftp_dir_error = "ERROR: $result";
$settings_upload_speed_ok = "Default upload speed limit successfully changed";
$settings_upload_speed_error = "ERROR: $result";
$settings_download_speed_ok = "Default download speed limit successfully changed";
$settings_download_speed_error = "ERROR: $result";
$settings_quota_size_ok = "Default quota size for downloaded/uploaded data successfully changed";
$settings_quota_size_error = "ERROR: $result";
$settings_quota_files_ok = "Default quota size for downloaded/uploaded files count successfully changed";
$settings_quota_files_error = "ERROR: $result";
$settings_permitted_ip_ok = "Default permitted IP successfully changed";
$settings_permitted_ip_error = "ERROR: $result";
$settings_pureftpd_conf_path_ok = "Pure-FTPd config file path successfully changed";
$settings_pureftpd_conf_path_error = "ERROR: $result";
$settings_pureftpd_init_script_path_ok = "Pure-FTPd init script path successfully changed";
$settings_pureftpd_init_script_path_error = "ERROR: $result";
$settings_title2 = "Pure-FTPd WebUI settings";
$settings_ftp_dir = "Default FTP directory";
$settings_upload_speed = "Default upload speed limit (KB/s)";
$settings_download_speed = "Default download speed limit (KB/s)";
$settings_quota_size = "Default quota size for downloaded/uploaded data";
$settings_quota_files = "Default quota size for downloaded/uploaded files count";
$settings_permitted_ip = "Default permitted IP (* - any IP-address)";
$settings_pureftpd_conf_path = "Pure-FTPd config file path";
$settings_pureftpd_init_script_path = "Pure-FTPd init script path";
$settings_save_button = "Save settings";
$settings_nochanges = "You didn't make any changes";
?>