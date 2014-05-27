<?php

class SentryLoggerRegistration extends PhabricatorAutoEventListener {
	public function register() {
		SentryLogger::setClient($client);
 		PhutilErrorHandler::setErrorListener(array('SentryLogger', 'handleErrors'));
 	}
}
