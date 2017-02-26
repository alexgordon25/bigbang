![alt text][screenshot]

# BigBang

**BigBang, A Wordpress Theme for Developers**. This theme is created with the purpose of minimizing the time that we as a developer spent on setting up a new custom theme and backend tasks in a modular way, and it will let you focus in customizing your new design idea.

Inspired from the awesome [underscores _s](https://github.com/Automattic/_s) theme from Automattic.

> Note: Because it was created to work as a **starter theme**, don't use as a parent theme.

## Description

* Main tech for web design used in this project: HTML5/CSS3, Sass, Javascript, Jquery, Font Awesome icons, modernizr.
* Frameworks support: `Clean` (No framework), `Bootstrap` and `Foundation`.
* This project will run under `Wordpress 4.7.2+` CMS and lamp environment.
* `Modularity` support via `Advanced Custom Fields Pro`.

### General Modules

* Hero
* Slideshow
* Heading
* Grid
* Posts Call Out
* Video/Img Gallery

### Bootstrap Components

* Accordion
* Tab
* Modal

### Foundation Components
* ...list pending.

## Requirements

* PHP, MySQL and a webserver are required.
* This project requires [Node.js](http://nodejs.org).

**BigBang** uses [Sass](http://Sass-lang.com/) (Superpowers for CSS) to easily manage CSS code and compile into `style.css`.

Because **BigBang** use a `flexible content` custom field type as a modular content builder the next plugins are required:

* [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/pro/)
* [Post Type Selector](https://wordpress.org/plugins/post-type-select-for-advanced-custom-fields/)
* [Advanced Taxonomy Selector](https://wordpress.org/plugins/acf-advanced-taxonomy-selector/)

## Getting Started

* Download [BigBang](https://github.com/alexgordon25/bigbang/archive/master.zip) starter theme from GitHub.
* Copy the `bigbang` folder and change the name to your `new-theme` name.
* Using your prefered editor app, search into the entire theme folder for `bigbang` and replace with: `new-theme`.
* Update the stylesheet header in `style.css` and `sass/style.scss` with your own information.
* Update or delete this readme.

## Development Setup

While you're working on your `new-theme` project you will need to install all packages and dependencies from package.json.

* so run:

```bash
$ npm install
```

* To compile sass, run:

```bash
$ gulp
```

* If you also want to make some magic while you're coding your styles, you can use browser-sync to automatic refresh your browser when a file is saved, simply open your `gulpfile.js` and put your local dev server in this field ```var hostUrl = '';``` , save the `gulpfile` and run:

```bash
$ gulp browser-sync
```
* When you're running `gulp browser-sync` there is also a Tunneling support at `[hostName].ngrok.io`. That means to your temporaly publishing your local server on the internet to share with clients or do some Quality Assurance (QA) on differents devices.

## Documentation
* [WordPress Codex](http://codex.wordpress.org/)
* [Bootstrap](https://getbootstrap.com/)
* [Zurb Foundation Docs](http://foundation.zurb.com/docs/)

## Showcase

* [Viajemas](http://viajemas.com.ni/)

## Contributing

1. [Star](https://github.com/alexgordon25/bigbang) the project!
2. Answer questions that come through [GitHub issues](https://github.com/alexgordon25/bigbang/issues).
3. Report a bug that you find.
4. Share a theme you've built on top of BigBang.
5. [Tweet](https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fgithub.com%2Falexgordon25%2Fbigbang%2F&text=Check%20out%20BigBang%2C%20A%20WordPress%20Starter%20Theme%20for%20Developers%20&tw_p=tweetbutton&url=https%3A%2F%2Fgithub.com%2Falexgordon25%2Fbigbang%2F&via=alexgordon25) your experience of using BigBang.

#### Pull Requests

Pull requests are highly appreciated. Please follow these guidelines:

1. Solve a problem. Features are great, but even better is cleaning-up and fixing issues in the code that you discover.
2. Make sure that your code is bug-free and does not introduce new bugs.
3. Create a [pull request](https://help.github.com/articles/creating-a-pull-request) and please detail your changes, so it can be easily tested and approved.

[screenshot]: https://raw.githubusercontent.com/alexgordon25/bigbang/master/screenshot.png "BigBang, A Wordpress Theme for Developers."
