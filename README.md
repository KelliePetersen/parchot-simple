# Parchot Website

This is the first version of the Parchot website. A temporary single-page website with services and projects, serving as a placeholder for the official website's release. 

[kelliepetersen.github.io/parchot-simple/](https://kelliepetersen.github.io/parchot-simple/ "Parchot website Link")

![Screenshot of Parchot website](https://github.com/KelliePetersen/parchot-simple/screenshot.jpg "Parchot Website Screenshot")

## Usage

You need git and node.js on your computer before running.  

### Automated Installation

1. ```./bin/app-install``` for automated application installation

### Manual Installation

1. ```npm start``` to start the Webpack developer environment
2. ```npm run build``` when finished to create a dist folder with all your website assets optimized and compressed.  
3. ```vendor/bin/phing make-public``` To transfer the contents of the dist folder to the public folder. 

## CSS Folder Structure

All CSS is contained in src/styles and compiled into index.scss  

Included folders:
* The **Base** folder holds styles that form the foundation and are applied globally.  
* The **Layouts** folder holds styles for page layout and large components such as the header and footer.  
* The **Components** folder holds styles for widgets and small components such as the menu button and dropdown.  
* The **Pages** folder holds page-specific styles.  
* The **Utils** folder holds sass files (variables, mixins) and other code that is not compiled.
* The **Vendors** folder holds 3rd party code.
* The **Hacks** folder holds code we're deeply ashamed of. Try to keep it light.
* The **Themes** folder holds files that create themes such as changing the color scheme.  
  * Do not use this folder to simply exchange colors (e.g. light and dark mode). Use variables instead.  

Optional additions:
* **State** folder that holds code specific to state, such as :hover and :active.  
  * Use this if there's a considerable amount of state-based animations.  
* **Animation** folder that holds animations not triggered by state.  
  * Use this if the site uses a heavy amount of animation spread across several .scss files.  

CSS is imported into index.scss in this order:
1. utils/
2. vendors/
3. base/
4. layout/
5. components/
6. pages/
7. themes/
8. ...
9. hacks/

## Webpack

### HtmlWebpackPlugin

Name the pages of the website in webpack.common.js  
Keep adding more new HtmlWebpackPlugin({}) plugins if you're going to have a multipage website. Name the page appropriately with the title: key.  