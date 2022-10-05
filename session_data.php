<?php 

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
foreach( $_POST as $field => $value ) $_SESSION[ 'formfields' ][ $field ]=$value;
}
function fieldvalue( $field ){
    return ( $field && !empty( $field ) && isset( $_SESSION[ 'formfields' ] ) && array_key_exists( $field, $_SESSION[ 'formfields' ] ) ) ? $_SESSION[ 'formfields' ][ $field ] : '';
}

?>