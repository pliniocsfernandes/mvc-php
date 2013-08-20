Lesson 4
========

This time we add a special controller to our application.
The __Front Controller__. This time we don't use a class because the code is simple enough to be in our `index.php`.
The idea of the Front Controller is that it should be the entry point for your application.
The best way to enforce that our front controller is receiving all the requests is using an url rewrite feature.
I included a `.htaccess` file for using the rewrite purpose on Apache2.
So just activate the Rewrite Module and have fun.
Summing up: all the requests are to be given to the Front Controller, and it will decide which Controller is the right one to deal with that request.
But to be able to give the requests directly to the controllers we need to finish our views, first. So that's next.
