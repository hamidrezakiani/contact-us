# Contact us laravel plugin

## Snstallation
  `composer require hamiddj/contact-us`
  `php artisan migrate`
  `php artisan vendor:publish for publish config file and views for customize`

## Site routes
  /contact-us  method:get => return contact-us view for user.
  /contact-us  method:post => store user contact.

  admin routes .
  /admin/contact-us => show all contacts   require : admin login .
  /admin/contact-us/{contact_id} => show all contact data
  require : auth:admin_guard.
   you can change admin_gourd to your custom guard in /config/contactus.js .
  
  
