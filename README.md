# Contact us laravel plugin

## Snstallation
  `composer require hamiddj/contact-us` <br />
  `php artisan migrate` <br />
  `php artisan vendor:publish for publish config file and views for customize` <br />

## Site routes
  /contact-us  method:get => return contact-us view for user <br />
  /contact-us  method:post => store user contact <br />

## admin routes
  /admin/contact-us => show all contacts   require : admin login <br />
  /admin/contact-us/{contact_id} => show all contact data <br />
  require : auth:admin_guard <br />
   you can change admin_gourd to your custom guard in /config/contactus.js <br />
  
  
