Contributing to Nexendrie Project
==================================

So you wish to make a contribution to Nexendrie Project? That is great, we welcome contributions, just read this document beforehand.

Where to contribute
-------------------

All contributions should be made on [GitLab](https://gitlab.com/nexendrie). Our packages are also on [GitHub](https://github.com/nexendrie) but these repositories are just mirrors. Any pull requests on GitHub will be closed at sight (issues are disabled there).

Coding standards
----------------

If you are writting any code for the project, be sure to follow our coding standards. Its definition for code sniffer is a part of [nexendrie/code-quality](https://gitlab.com/nexendrie/code-quality/blob/master/ruleset.xml) package, though it is not complete yet.

Test the code
-------------

Do not forget to write tests for new features, we do not want untested code in the codebase. Also all tests for the merge request must pass. That includes syntax checks, compilation with coding standards, static analysis and unit/integration tests. We use parallel lint, codesniffer, PHPStan and Nette Tester + testbench respectively for these tasks. All these tools are run in CI but you can (and should) run them also on your computer before submitting a merge request.

Other rules
-----------

* 1 feature/change per Merge request. Do not do changes unrelated to the main purpose.

* Keep the history clean. No merge commits in Merge request. Rebase your branch and amend commits when appropriate.

* Add an entry for your feature/change to CHANGELOG (if you think that it is important enough).

* Keep the discussion civil. You do not have to extra polite, just use you best judgment.

* Stay in touch with us. After you have opened your issue/merge request, we may need additional input from you. If you keep us waiting for too long, we may lose interest and just close the thing.

Things to work on
-----------------

* Documentation

Documentation of some packages is outdated/could use better wording. Any help is welcome.

* Bugs

We all are humans thus prone to errors. Do not hesitate to point them out and/or propose fixes.

* New features

Some of our packages are not done feature wise yet. There is a list of things we would like to add, just check [issues](https://gitlab.com/groups/nexendrie/issues) on GitLab. If there is something missing from your point of view, open a new issue. But be aware that we do not have to share your opinion so sometimes you will have to convince us.
