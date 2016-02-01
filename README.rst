About
=====

The ``phabricator-sentry`` project provides integration between `Phabricator <https://phabricator.com>`_ and
`Sentry <https://github.com/getsentry/sentry>`_.

Setup
-----

1. Drop the code into phabricator/src/extensions/
2. Install the `raven-php <https://github.com/getsentry/raven-php>`_ library somewhere on your machine.
3. Ensure that ``path/to/raven-php/lib`` is in your PHP ``include_path``.
4. Configure Sentry via http://phabricator.example.com/config/group/sentryconfigoptions/
5. Enjoy errors being reported to Sentry.

Contributing
------------

You'll need to ensure ``arc lint`` is run before commiting, which also should implicitly run ``arc liberate``.
