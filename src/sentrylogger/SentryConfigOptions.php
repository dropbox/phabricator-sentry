<?php

final class SentryConfigOptions extends PhabricatorApplicationConfigOptions {

  public function getName() {
    return pht('Sentry');
  }

  public function getGroup() {
    return pht('apps');
  }

  public function getDescription() {
    return pht('Configure Sentry builds.');
  }

  public function getOptions() {
    return array(
      $this->newOption(
        'sentry.dsn',
        'string',
        '')
        ->setDescription(pht('Sentry DSN configuration value.'))
        ->addExample('https://public:secret@sentry.example.com', 'Sentry DSN'),
    );
  }

}
