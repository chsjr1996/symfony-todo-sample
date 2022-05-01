# Symfony TODO App

Based on Udemy course [Symfony Web Development Complete Guide: Beginner To Advanced](https://www.udemy.com/course/symfony-4-web-development-from-beginner-to-advanced)

## Requirements

- PHP 8 (or later)
- Composer
- Web server environment
  - Xampp, Lampp or similar (or use Docker)

## Installation (docker)

- `git clone https://github.com/chsjr1996/symfony-todo-sample.git`
- `cd symfony-todo-sample`
- `composer install`
- `docker-compose up -d`
- Now access the [http://localhost](http://localhost) url on the browser

## Notes

On this course the Symfony 4 was used, but here I'm using the Symfony 6 (and PHP 8 to use the awesome attributes syntax). I will made some changes too, like improve the code and frontend design.

## Under development

Some features will be added to allow explore more and more the Symfony capabilities

### Todo (of todo 😊)

- [x] Use Docker environment to development
- [x] DB integration
- [ ] Improve error handling (add flash messages, etc...)
- [ ] Unit/Feature tests
  - [ ] Add some CI on this repository (Github Actions)
- [ ] More complex tasks management
  - [ ] Add timer on the tasks (start and stop times, like: [hamster-time-tracker](https://github.com/projecthamster/hamster))
  - [ ] Add description and tag fields
  - [ ] Allow to generate a simple tasks report
- [ ] Improve frontend
  - [ ] Change design/layout (Tailwind or Bootstrap maybe?)
  - [ ] Refactor Twig templates (use Symfony Form Builder)

... and more?
