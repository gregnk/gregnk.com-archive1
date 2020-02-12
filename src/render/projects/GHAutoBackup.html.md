---
layout: project
title: GHAutoBackup
desc: A script which can automatically back up a bunch of git repositories in batch
keywords: ""
isPage: true
featured: true
---

A script which can automatically back up a bunch of git repositories in batch

**[Download latest version](https://github.com/gregnk/GHAutoBackup/releases/download/v1.0.0/GHAutoBackup-v1.0.0.zip)**<br>

## Features
* Batch git cloning and updating
* Automatic cloning of all repositories from Github users and organizations

## System Requirements
* Python 3.7+ ([Download](https://www.python.org/downloads/))
* Git CLI ([Download](https://git-scm.com/downloads))

## Usage
    py GHAutoBackup.py [-debug]

The program will archive all of the links listed in `Links.txt` (See below)

## Links.txt Format

    <Type> <Link>

### Types

    Repo: Single git repo (can be on any site)
    User: Github user
    Org:  Github organization

### Example
    Repo http://github.com/SomeGHUser/SomeRepo
    Repo http://git.somewebsite.com/SomeRepo
    User http://github.com/SomeGHUser
    Org http://github.com/SomeGHOrg

## Downloads
[Latest version (v1.0.0)](https://github.com/gregnk/GHAutoBackup/releases/download/v1.0.0/GHAutoBackup-v1.0.0.zip)

## Source Code
[Github repo](https://github.com/gregnk/GHAutoBackup/)

## Release Log
#### v1.0.0 (2019-12-31)
* Initial release