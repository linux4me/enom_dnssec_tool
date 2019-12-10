# Enom DNSSEC Tool
A simple HTML and jQuery tool to enable DNSSEC on enom-registered domains.

## Purpose
The Enom DNSSEC tool is designed to make it easy for a person with an Enom reseller account to enable DNSSEC on their Enom-registered domains. 

## Background
[Enom provides an API](https://help.enom.com/hc/en-us/articles/115001028212-Adding-DNSSEC-to-a-Domain-Name) to add, delete, and review DNSSEC records. Using it (as of 12/10/2019) requires you to build and submit a URL containing a number of codes and data for each domain. While it's certainly possible to build the URLs yourself, the Enom DNSSEC Tool makes it much easier, especially if you have a bunch of domains you want to secure.

## Requirements
* You must have an Enom reseller account to have access to the Emom API.
* You must whitelist your IP address using Enom's API Live Environment Interface (Log on to your Enom reseller account, and on the Dashboard, scroll down to Reseller Services and click "API Live Environment Interface," where you can add your IP address.)
* You must have access to generate the required DNSSEC data using the web host's control panel or command line for the domain.

## Security
Enom's API requires that your Enom user ID and password be submitted in each API request (URL), so it is **absolutely essential** that you install and use the Enom DNSSEC Tool only on a secure (HTTPS) connection. 

The Enom DNSSEC Tool sets the "src" attribute of an iframe to the API request URL, so that if you left the page up and someone else had access to your computer, they could look at the source code for the page and see your Enom user ID and password. 

## Installation
Simply download the Enom DNSSEC Tool files and install them in a folder or subfolder of the public_html directory of a domain protected by SSL/TLS (see Security above).

## Usage
1. Make sure you satisfy all the Requirements noted above.
1. Use your web host's control panel or command line to create the DNSSEC record for the domain.
1. Browse to your installation of the Enom DNSSEC Tool.
1. Fill out the fields for the domain and click Submit to send the request to Enom.
1. Review the output in the iframe at the bottom of the Enom DNSSEC Tool for the results of the request.
1. Use an online tool like [Verisign Labs DNSSEC Analyzer](https://dnssec-debugger.verisignlabs.com/) to check the results. Note that it may take a few minutes for all the checks to be green. 
