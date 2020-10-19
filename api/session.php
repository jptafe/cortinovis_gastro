<?php
class sessObj {
    function is_logged_in() {
        return true;
    }
    function login() {
        global $db;
        $db->checkUserAccount();
        return true;
    }
    function logout() {
        return true;
    }
}
?>
