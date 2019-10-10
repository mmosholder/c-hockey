[WIP] Readme template for all projects so we know what the heck is going on

## Who is this repo for and what do they do?
This repo is for Gup's Corner wordpress content site

## What technologies and libraries does this repo use?
- Wordpress
- Timber for Wordpress (https://timber.github.io/docs/)
- JQuery
- Scss
- Yarn (instead of NPM for managing packages)
- Advanced Custom Fields (https://www.advancedcustomfields.com/)


## What is the repo structure?
The files that will be touched the most live in `src` and `wp-content/themes/views`

## How to get the development environment set up:
Clone the repo and run `vagrant up` and then `yarn`. When you're ready to develop and test in the browser, go ahead and fire off `yarn run watch` and visit gc.local.

If this is your first time in the repo, go ahead and open up gc.local/wp-admin, log in with the username and password of `admin` and make sure you are on the proper theme (Gup's Corner). Then you'll need to visit the Custom Fields section on the sidebar and hit the Sync tab to sync up all the Advanced Custom Fields that have been created already.

## Where do I make changes for:

### Scss and JS?
The styles and scripts live in the `src` folder and compile into the theme folder.

### Images
Add images straight to `gc/assets/images`

### Custom components?
Custom components are created as .twig files in the `views/components` folder of the current theme. To access the custom fields in the component, just use the namespace of `item` for each field, such as {{ item.title }}

### Custom admin fields?
To update or add any new custom fields in the admin, visit the Custom Fields link in the admin sidebar. Here, you can edit fields that already exist, or add new ones where needed.

### Page templates?
Any page templates live in the theme `page-template` folder and have a `.twig` counterpart in the `/views/pages` folder. Please follow the example of any other template when creating a new one!


## How do I add a NEW component?
All components are created in the Custom Fields section -- just click to edit the All Components field, and then add a new layout. From there, you can add in all of your new fields. Save, and then add a corresponding `.twig` file in the components theme folder.


## How should I submit new changes or updates?
Start a new branch off of `develop` and follow our general PR process outlined by the PR template.

All views (blades), sass, and js files live under the `resources` folder, and the other application pieces follow our typical Laravel structure.

THE MOST IMPORTANT PIECE OF A NEW PR: Please be extremely cognizant of the changes to any of the acf .json files. These files are how we keep track of fields across all different environments, and they are the point of truth for all of our custom fields. If you see large chunks of deletions that are items you did not delete, dig a little further into why (sometimes deletions are just fields being moved up and down), and please confirm all of your fields are synced up in the Wordpress admin.


## What is the deploy process?

