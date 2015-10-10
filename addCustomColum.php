<?php

//These functions add the INFO SHEET link to the admin backend
function new_modify_user_table( $column ) {
    $column['userinfo'] = 'User Info';
    return $column;
}
add_filter( 'manage_users_columns', 'new_modify_user_table' );

function new_modify_user_table_row( $val, $column_name, $user_id ) {
    $user = get_userdata( $user_id );
    $link = "/info-sheet/?user=".$user_id;
    $user_link = "<a href='".get_site_url().$link."' target='_blank'>Info Sheet</a>";
    switch ($column_name) {
        case 'userinfo' :
            return $user_link;
            break;
        default:
    }
    return $return;
}
