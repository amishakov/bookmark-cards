<?php

return function ($kirby, $page) {

  $error = null;

	if($user = $kirby->user() and $kirby->request()->is('POST')) {

    try {

      $user->delete();
    
    } catch(Exception $e) {
    
      $error = 'Der Benutzer konnte nicht gelöscht werden! ' . $e->getMessage();    
    }
  }
    
  return [
    'error' => $error
  ];
};