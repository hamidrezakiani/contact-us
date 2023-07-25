# Contact us laravel plugin

## Snstallation

  `composer require hamiddj/contact-us` <br />
  
  `php artisan migrate` <br />
  
  `php artisan vendor:publish for publish config file and views for customize` <br />
  

## Site routes
  /contact-us  `method:get`       =>      return contact-us view for user <br />
  /contact-us  `method:post`      =>      store user contact <br />

## admin routes
  /admin/contact-us `method:get`       =>   show all contacts   require : admin login <br />
  /admin/contact-us/{id} `method:post` =>    show all contact data <br />
### require 

   auth:[Your admin guard]
  
   *you can change admin gourd to your custom guard in `/config/contactus.js` <br />
  
  
