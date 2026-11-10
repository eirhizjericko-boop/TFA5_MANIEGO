# Counterboard POS

Counterboard POS is a small Laravel learning project for IT0049. It demonstrates the basic MVC flow with four pages:

- `/` - landing page
- `/about` - short explanation of the project flow
- `/customers` - customer account list
- `/users` - staff user account list

The customer and user pages use static PHP arrays in their controllers as required by the activity. The Blade views display those arrays with `@foreach`. A small customer migration and seeder are also included so the repository contains a database setup that can be extended in a later activity.
