# Contact us laravel plugin

## Snstallation
  `composer require hamiddj/contact-us`
  `php artisan migrate`
  `php artisan vendor:publish for publish config file and views for customize`

## Site routes
  /contact-us  method:get => return contact-us view for user <br />
  /contact-us  method:post => store user contact <br />

  admin routes __
  /admin/contact-us => show all contacts   require : admin login __
  /admin/contact-us/{contact_id} => show all contact data __
  require : auth:admin_guard __
   you can change admin_gourd to your custom guard in /config/contactus.js
  
  
