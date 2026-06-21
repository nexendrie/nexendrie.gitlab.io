Contributing to Nexendrie Project
==================================

So you want to contribute to Nexendrie Project? That is great, we welcome contributions, just read this document beforehand.

Where to contribute
-------------------

All contributions should be made on [GitLab](https://gitlab.com/nexendrie). Our packages are also on [GitHub](https://github.com/nexendrie) but these repositories are just mirrors. Any pull requests on GitHub will be closed at sight (issues are disabled there).

How to behave in the project
----------------------------

There are no special rules about to behave in the project, just be an adult. See [No Code of Conduct website](https://nocodeofconduct.com) for details.

Things to work on
-----------------

* Documentation

Documentation of some packages is outdated/incomplete/could use better wording. Any help is welcome.

* Bugs

We all are humans thus prone to errors. Do not hesitate to point them out and/or propose fixes.

* New features

Some of our packages are not done feature wise yet. There is a list of things we would like to add, just check [issues](https://gitlab.com/groups/nexendrie/-/issues) on GitLab. If there is something missing from your point of view, open a new issue. But be aware that we do not have to share your opinion so sometimes you will have to convince us.

Code contributions
------------------

If you are writing code to the project, please keep the following rules in mind.

### Coding standards

The basis of our coding standard is [PSR-12](https://www.php-fig.org/psr/psr-12/) plus we have some additional rules. Its definition for code sniffer is a part of [nexendrie/code-quality](https://gitlab.com/nexendrie/code-quality/blob/master/phpcs.xml) package, though it is not complete yet.

### Test the code

Do not forget to write tests for new features, we do not want untested code in the codebase. Also all tests for the merge request must pass. That includes syntax checks, compliance with coding standards, static analysis and unit/integration tests. We use parallel lint, codesniffer, PHPStan and Nette Tester + testbench or My Tester respectively for these tasks. All these tools are run in CI, but you can (and should) run them also on your computer before submitting a merge request. To make running the tools easier (and with same configuration), we use [phing](https://www.phing.info/), the target to run all the tools is called "test" in all packages.

### Other rules

* 1 feature/change per Merge request. Do not do changes unrelated to the main purpose.

* Keep the history clean. No merge commits in Merge request. Rebase your branch and amend commits when appropriate.

* Add an entry for your feature/change to CHANGELOG.md (if you think that it is important enough). If it should be in release notes of next version, write about it also to RELEASE_NOTES.

* Stay in touch with us. After you have opened your issue/merge request, we may need additional input from you. If you keep us waiting for too long, we may lose interest and just close the thing.

* No AI/LLM generated code. Not only such code is often bad/wrong, it also comes with legal and ethical issues that we do not want to deal with. We reserve the right to refuse such contributions (and remove them after accepting them if we find out later).
