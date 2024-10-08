Nexendrie Project
=================

About
-----

The Nexendrie Project was started in April 2015 by Jakub Konečný. The ultimate goal is to create a browser-based medieval ages/renaissance fantasy game. Currently it is in open beta stage. [Homepage](https://www.nexendrie.cz)

Along the way, some reusable parts were separated from the main repository into standalone packages (which can be downloaded via Composer). We post about new releases on [X (formerly Twitter)](https://x.com/nexendrie).

Repositories
------------

All of the project's repositories are hosted on both [GitHub](https://github.com/nexendrie) and [GitLab](https://gitlab.com/nexendrie/). All development takes place on GitLab (all issues and pull/merge should be created there). The repositories on GitHub are just mirrors.

Used stuff
----------

Our primary programming language is PHP. We use version 7.4, working on moving to 8.0/8.1. Our projects are powered by [Nette Framework](https://nette.org). We heavily test our code with Nette Tester (improved by testbench by Martin Zlámal). We also run codesniffer, parallel lint and phpstan on our codebase in CI to ensure its quality.

Contributing
------------

Nexendrie Project welcomes contributions. Just be sure to read our [guide](contributing.md) before making a contribution.

Our packages
--------

- [book-component](https://nexendrie.gitlab.io/book-component)
- [rss](https://nexendrie.gitlab.io/rss)
- [translation](https://nexendrie.gitlab.io/translation)
- [site-generator](https://nexendrie.gitlab.io/site-generator)
- [menu](https://nexendrie.gitlab.io/menu)
- [utils](https://nexendrie.gitlab.io/utils)
- [event-calendar](https://nexendrie.gitlab.io/EventCalendar)

Our docker images
-----------------

- [PHP](https://nexendrie.gitlab.io/docker-php)
- [NodeJS](https://nexendrie.gitlab.io/docker-nodejs)
