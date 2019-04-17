### Snezana Jovic

### Laravel introduction and test

This is a short introduction to Laravel with a few practical task to solve. Not all lessons in
video course are relevant to given tasks - but is a nice way to get familiar with Laravel world.
Depending on your PHP level, try to solve as many steps as you can. It's okay if you don't
manage to solve all 7 task. There is no need for CSS. Try to keep it short and simple. Take
notes as you go and write comments where necessary.

Getting started with Laravel
Step 1
- Watch introduction course
- http://goo.gl/eYNkzy

Step 2
- Create new laravel project 'project'
Step 3
- Create route /date​ returns current date in format yyyy-mm-dd
- Try using Controller for this step.
Step 4
- Create route /double
- Create a form with one input field Number and one button Submit
- After submission it displays integer entered by user multiplied by 2

Step 5
- Create route /weather/{land}/{fylke}/{kommune}/{stedsnavn}
- Where {land}, {fylke}, {kommune}, {stedsnavn} are user parameters
- Example:
- weather/Norge/Akershus/Frogn/Drøbak
- weather/Norge/Hordaland/Bergen/Bergen
- Use input from request to get latest weatherforcast from yr.no
- http://om.yr.no/verdata/xml/
- Display latest weather forecast
Step 6
- Install https://github.com/fzaninotto/Faker
- Create custom artisan command faker
- When command is executed it should print out random name

## To run assigment
1. clone this repo
2. composer install
3. php artisan serve

