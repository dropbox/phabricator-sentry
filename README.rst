About
=====

The ``phabricator-sentry`` project provides integration between `Phabricator <https://phabricator.com>`_ and
`Sentry <https://github.com/getsentry/sentry>`_.

Setup
-----

1. Drop the code into phabricator/src/extensions/
2. Configure Sentry via http://phabricator.example.com/config/group/sentryconfigoptions/
3. Enjoy errors being reported to Sentry.

Contributing
------------

You'll need to ensure ``arc lint`` is run before commiting, which also should implicitly run ``arc liberate``.
