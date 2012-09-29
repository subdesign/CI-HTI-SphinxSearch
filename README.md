# Codeigniter "How-to-implement" series part 3 - *SphinxSearch*

*This series objective is to demonstrate how to implement several libraries into Codeigniter*

***

#### Sphinx Search is an open source fulltext search, with better speed and more setup parameters than MySQL built-in fulltext search.

## 1. Requirements

You have to install Sphinx on localhost or on your server. There are lot of tutorials for Windows or Linux systems. 
Eg. for Ubuntu : [http://bit.ly/fHtVTj](http://bit.ly/fHtVTj)

For us the important thing is to run the search daemon **searchd** and check on what port is it listen. 

## 2. Installation

First, this is not a fully working example, rather an MVC structured guide what you have to put in your controller and in your views.
So you *don't have to copy the files* in the appropriate folders, only read through what it does and realize it likewise in your files.

Furthermore, you need the spark named **sphinx** by @sirfilip from getsparks.org

    php tools/spark install -v0.0.4 sphinx 

Or use the one in the package.

_NOTE: if you have version problem erros, download the latest sphinx php port from sphinx google code repo, and replace with the one in the spark._

## 3. Setup

Set up sphinx daemon settings in the Sphinx spark config file. 

If you can search in the test database, or in your current database with the command line test search application named **search** then you are on good way. Now the only task is run the search daemon as you read above.

## 4. Usage

My example Sphinx settings are good for searching for phrases, sorting the result with relevance order. You can play and modify the matching modes, ranking, sorting modes, and lot more things, check the manual: [http://sphinxsearch.com/docs/2.0.5/](http://sphinxsearch.com/docs/2.0.5/)

## 5. Notes

If you have any questions feel free to contact me at the email address below.

## 6. Author

The solution provided by Barna Szalai <b.sz@devartpro.com>
