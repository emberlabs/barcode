# ~~ DEPRECATION NOTICE ~~

**This package is no longer maintained and is being deprecated**

Please try using something like picqer's [php barcode generator](https://github.com/picqer/php-barcode-generator) written in modern PHP and has been actively developed and maintained. It supports a lot more than this and can be installed with composer.

Barcode Generator for PHP
=========================

Perhaps the biggest issue I encountered when creating an inventory management
system for a client was the fact that there was no unified framework for 
barcode generation in PHP that was reasonable in price, much less Open Source.
I hope to fill this gaping hole in the market today with Barcode Generator for
PHP.

License
-------

In order to facilitate a wide range of usage, the [MIT License](http://www.opensource.org/licenses/MIT) was adopted for
this library.

Usage
-----

I have an example index.php on gist. This assumes you have the repo cloned in include/ relative to the this index file:
[index.php](https://gist.github.com/1175098)

Supported Codes
---------------

Some are planned, others are complete. 

* Code39 **DONE**
* Code128 **DONE**
* QRCode *In Progress*
* DataMatrix *Not Started*
* UPC *Not Started*
* PDF417 *Discontinued*

Contribute
----------

If you have something to add (maybe a new barcode) or just a bug fix, please
send me a pull request and I will be sure to respond or even merge it. I am 
always looking for help with these projects, so don't be shy. 
