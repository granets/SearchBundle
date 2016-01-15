Installation
============

Step 1: Download the Bundle
---------------------------

Download the Zip File from Github.
Extract files and rename the main folder to 'SearchBundle'(remove '-master').
Place the folder in 'src/Mihail/'(you will have to create the folder with
the vendor name Mihail). Structure after this: 'src/Mihail/SearchBundle/...'

Step 2: Enable the Bundle
-------------------------

Enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new Mihail\SearchBundle\MihailSearchBundle(),
        );

        // ...
    }

    // ...
}
```
Step 3: You are all set
-----------------------

Start your server and go to '/search' to test out the bundle.
