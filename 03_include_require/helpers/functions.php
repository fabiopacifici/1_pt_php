<?php

/**
 * Check if a given email address includes
 * a '@' and '.'
 * @param  String $emailAddress The email to check
 * @return Bool
 */
function checkEmailAddress($emailAddress)
{
  if (str_contains($emailAddress, '@') && str_contains($emailAddress, '.')) {
    return true;
  }
  return false;
}
