---
layout: project
title: Md2Html
desc: A simple console application that converts Markdown files to HTML
keywords: "Markdown, HTML, Markdown to HTML, Md2Html"
isPage: true
featured: true
---

A simple console application that converts Markdown files to HTML.

This project is a fork of [AlanBarber/MD2HTML](https://github.com/AlanBarber/MD2HTML)

## Usage

    Md2Html <File>.md <Options>

### Options

    -Header <File>              Adds a header from the file specified
    -Footer <File>              Adds a footer from the file specified
    -AsteriskIntraWordEmphasis  Allows asterisks to be used for intraword emphasis
    -AutoNewLines               Converts RETURN into a literal newline *
    -AutoHyperlink              Converts most bare plain URLs into hyperlinks *
    -CloseEmptyElements         Uses '/>' instead of '>' to close empty HTML elements for XHTML
    -DontLinkEmails             Will never convert emails into hyperlinks *
    -StrictBoldItalic           Requires non-word characters on either side of bold and italic text *
    -OutFile <File>             Will output the HTML to the specified file
    -Help                       Displays the help screen
    -About                      Displays the about screen

    * Denotes an option that is a significant deviation from the markdown spec

## Downloads

[v2.0.0 (Latest release)](https://github.com/gregnk/Md2Html/releases/download/v2.0.0/Md2Html-v2.0.0.zip)

## Source Code
[Github repo](https://github.com/gregnk/Md2Html/)

[v2.0.0 (Latest release)](https://github.com/gregnk/Md2Html/archive/v2.0.0.zip)

## Release Log
#### v2.0.0 (2019-04-22)
* Upgraded MarkdownSharp version to v2.0.5
* Added MarkdownConverstion options as command line args
* Added usage info and about screens
* Added error messages
* Added header and footer options
* Added output location option