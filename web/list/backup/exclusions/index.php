<?php
error_reporting(NULL);
$TAB = 'BACKUP';

// Main include
include($_SERVER['DOCUMENT_ROOT']."/inc/main.php");

// Header
include($_SERVER['DOCUMENT_ROOT'].'/templates/header.html');

// Panel
top_panel($user,$TAB);

// Data
exec (VESTA_CMD."v-list-user-backup-exclusions $user json", $output, $return_var);
$data = json_decode(implode('', $output), true);
unset($output);
include($_SERVER['DOCUMENT_ROOT'].'/templates/admin/list_backup_exclusions.html');

// Back uri
$_SESSION['back'] = $_SERVER['REQUEST_URI'];

// Footer
include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.html');
