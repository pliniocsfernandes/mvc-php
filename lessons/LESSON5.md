Lesson 5
========

Now we finally have our __Views__, the __V__ from M__V__C. \o/
And now we have a full PHP MVC code working.
Our Views are responsible just for the presentation layer of our application.
See how we took of all of the PHP from them?
The only php we have in our views if for printing things.
We could have some loops there too for printing more content coming from our models, but aside from that, there is no logic in our views.
We can happily give them to our designer or frontend developer who doesn't understand PHP and he will be able to work on it without problems.
Please note also how our code is much more organized now.
If we need to change our application logic or the phrases it gives, we go directly to the __Models__.
If we need to change how our request is being handled or which view is being chosen for a given action we go directly to our __Controllers__.
The Controllers now are the glue that binds the models and views and decide what is needed to process an user request.
And if we need to change the presentation of our app (maybe that footer is no good) we just go to our __Views__.
In a real MVC Framework, you also get a lot of helper methods in your controllers and views, so coding becomes much easier too.
