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

// check if PayPal enabled
// if (!$system['paypal_enabled']) {
//   modal("MESSAGE", __("Error"), __("This feature has been disabled by the admin"));
// }

try {

  switch ($_REQUEST['ex_pay']) {

    case 'momo':
      // valid inputs
      if (!isset($_POST['amount']) || !is_numeric($_POST['amount'])) {
        _error(400);
      }

      // get link
      $ref = exo_momo_collections($_POST);
      break;

    default:
      _error(400);
      break;
  }

  // modal("MESSAGE", __("Response"), $ref.$link);
  // return;
  // return_json(array('callback' => 'window.location.href = "' . $link . '";'));
  modal("CONFIRM", __("Confirm"), $ref);
  // modal("MESSAGE", __("Error"), $ref);

} catch (Exception $e) {
  modal("ERROR", __("Error"), $e->getMessage());
}
