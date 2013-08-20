Simple PHP MVC Course
=====================
In this course I'll show you the how to create a simple PHP MVC app.
The goal is to make you understand the basic concepts of MVC in PHP before trying to use a real world MVC framework like Symfony, Zend, CodeIgniter, etc...

How to use this Course
----------------------
I've made commits on a branch named lessons making the PHP MVC from start to finish.
The best way to use the course is to merge each lesson in the master branch so you can see each step involved in adapting the code to a MVC pattern.
For that use: `git merge tags/lesson1`, look at the code, then use `git merge tags/lesson2`, until you reach lesson7 that is the last lesson.
If you are feeling adventurous you can even create a branch for yourself and try to make the lessons by yourself. Then compare the results with my code.
Each lesson adds a LESSONx.md file in the folder lessons.
Use it to see a brief explanation of what has been done in the lesson.
Also, some useful git commands for you:

To see what has added from lesson1 to lesson2:
`git diff tags/lesson1 tags/lesson2`
To see what has changed in your last merge, use:
`git diff ORIG_HEAD HEAD`

Course Structure
----------------
0. Introduction - README.md
1. Without MVC - Spaguetti code (tags/lesson1)
2. Introducing Models (tags/lesson2)
3. Introducing Controllers (tags/lesson3)
4. Adding a Front Controller (tags/lesson4)
5. Completing Views (tags/lesson5)
6. Introducing the Router (tags/lesson6)
7. Final touchs (tags/lesson7)
