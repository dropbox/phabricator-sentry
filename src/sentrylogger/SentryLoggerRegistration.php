<?php

class SentryLoggerRegistration extends PhabricatorAutoEventListener {
  public function register() {
    $sentry_dsn = PhabricatorEnv::getEnvConfigIfExists('sentry.dsn');

    if (empty($sentry_dsn)) {
      return;
    }

    // Make sure `raven-php/lib` is in your `include_path`.
    require_once 'Raven/Autoloader.php';
    Raven_Autoloader::register();

    // Configure the client
    $client = new Raven_Client($sentry_dsn);

    // Install error handlers
    $error_handler = new Raven_ErrorHandler($client);
    $error_handler->registerExceptionHandler();
    $error_handler->registerErrorHandler();

    // We can't override DarkConsole, so let's capture them at the
    // end of the request
    SentryLogger::setClient($client);
    register_shutdown_function(array('SentryLogger', 'logAllPendingErrors'));
  }

  // must be stubbed due to parent class
  public function handleEvent(PhutilEvent $event) {
  }
}
