<?php

/**
 * ajax -> payments -> paypal
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true, true);

try {
  switch ($_REQUEST['ex_pay1']) {

    case 'verify':
      // valid inputs
      $res = momo_status($_POST);
      break;

    default:
      _error(400);
      break;
  }

  // modal("MESSAGE", __("Response"), $ref.$link);
  // return;
  // return_json(array('callback' => 'window.location.href = "' . $link . '";'));
  modal("MESSAGE", __("Message"), $res);

} catch (Exception $e) {
  modal("ERROR", __("Error"), $e->getMessage());
}