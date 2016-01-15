Installation
============

Step 1: Download the Bundle
---------------------------

Download the Zip File from Github and extract it to your Symfony2 directory in the 'src/' subdirectory.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
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
