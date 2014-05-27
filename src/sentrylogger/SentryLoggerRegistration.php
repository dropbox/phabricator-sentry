<?php

class SentryLoggerRegistration extends PhabricatorAutoEventListener {
  public function register() {
    $sentry_dsn = PhabricatorEnv::getEnvConfigIfExists('sentry.dsn');
    if (empty($sentry_dsn)) {
      return;
    }

    $client = new Raven_Client($sentry_dsn);

    SentryLogger::setClient($client);
    PhutilErrorHandler::setErrorListener(array('SentryLogger', 'handleErrors'));
  }
}
