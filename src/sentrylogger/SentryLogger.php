<?php

/**
 * SentryLogger::setClient($client);
 * PhutilErrorHandler::setErrorListener(
 *   array('SentryLogger', 'handleErrors'));
 */

final class SentryLogger {

  private static $client = null;

  public static function setClient($client) {
    self::$client = $client;
  }

  public static function logAllPendingErrors() {
    $errors = DarkConsoleErrorLogPluginAPI::getErrors();

    // TODO(dcramer): add support for the 'trace' attribute in the client API
    foreach ($errors as $error) {
      self::$client->captureMessage($error['details']);
    }
  }

}
