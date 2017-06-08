Nexendrie Project
=================

About
-----

The Nexendrie Project was started in April 2015 by Jakub Konečný. The ultimate goal is to create a browser-based medieval ages/renaissance fantasy game. Currently it is in closed beta stage. Homepage: https://nexendrie.cz Twitter: https://twitter.com/nexendrie

Along the way, some reusable parts were separated from the main repository into standalone packages (which can be downloaded via Composer).

Repositories
------------

Most of the project's repositories are hosted on both GitHub: https://github.com/nexendrie and GitLab: https://gitlab.com/nexendrie/. Among the exceptions are the main project (which is a private repository on GitLab at the moment) and sources for this site. All development takes place on GitLab (where issues and pull/merge should be created) but Composer cannot handle it so well. For that reason it fetches our packages from GitHub.

Used stuff
------

Our primary programming language is PHP. We use version 7.1. Our projects are powered by Nette Framework: https://nette.org/en/. We heavily test our code with Nette Tester (improved by testbench from Martin Zlámal). We also run codesniffer, parallel lint and phpstan on our codebase in CI to ensure its quality.

Our packages
--------

- book-component: https://nexendrie.gitlab.io/book-component
- rss: https://nexendrie.gitlab.io/rss
- translation: https://nexendrie.gitlab.io/translation
- site-generator: https://nexendrie.gitlab.io/site-generator
- menu: https://nexendrie.gitlab.io/menu
- utils: https://nexendrie.gitlab.io/utils

Our docker images
-----------------

- PHP: https://nexendrie.gitlab.io/docker-php
