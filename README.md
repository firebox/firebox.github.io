# fbxstyle
Master cards &amp; style guides

Welcome to the email design guideline for Firebox!

### Contents
- Getting started
- Style the cards
- Style rules
- Styleguide
- Testing/troubleshooting

### Getting started
If you are starting from scratch, use the <a href="https://github.com/firebox/fbxstyle/blob/master/master-template-blank.html">master-blank-template.html</a>. This has all of the styles, the logo and the footer. If you have an existing template and want to add extra cards that are not included in the builder, download or view the <a href="https://github.com/firebox/fbxstyle/blob/master/master-cards.html">master-cards.html</a> file.

#### Card anatomy
A card is an independent row that represents a display pattern. Basically, it is a section that is designed differently. See below for a image of how a card is split up.

<img src="http://media.firebox.com/i/github/anatomy.png" width="300">

You can see that the card is made up of table rows and columns. When you are editing or visualising the structure of the card, use this as a reference.

#### How to use the cards
As each card is an independent row, you can simply just copy and paste it anywhere between the `<body>` and `</body>` HTML tag. To copy a card, start from the `<!-- [NAME] CARD-->` and copy until the `<!-- END [NAME] CARD-->`. Each card in the <a href="https://github.com/firebox/fbxstyle/blob/master/master-cards.html">master-cards.html</a> file will be named in this format.

## Style the cards
You can style the cards pretty much any way you want. These are colourless and to be used as a template for whatever design you want to achieve.

#### Changing text colours
In the master cards file, text should only be two colours - `#343434` for title text and `#888888` for body text. When setting the `font-color` you should always apply the style to the `<td>` e.g `<td style="font-color: #000000;">` if you are using the master cards then the `font-color` should already be applied and simple to change.

#### Changing background colour
Changing the background colour of a card is super easy. You can change the background colour in two ways, either you want the entire card to be one colour or you want a background colour and a container colour. Look for the `bgcolor=`. See the  example below:

<img src="http://media.firebox.com/i/github/bgcolour.png" width="600">

Below is what it looks like in the code:
```
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="OUTSIDECOLOUR">
            <div align="center" style="padding: 0px 20px 0px 20px;">
                <table border="0" cellpadding="0" cellspacing="0" width="600" class="wrapper">
                    <tr>
                        <td style="padding: 0px 0px 20px 0px;" class="logo">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td bgcolor="INSIDECOLOUR" width="600" align="center" class="header" style="font-weight: bold; font-family:'sofia', Helvetica, Arial, sans-serif; color: #fff; padding-top: 25px; font-size: 42px; line-height: 1;">
                                        Pebble Time Smartwatch and new products this week
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>
```

#### Changing button colour
To make sure that the whole button is clickable, I have changed the HTML of the button. If you want to change the colour of the button, all of the border colours need to be changed as well as `background-color`

```
<tr cellspacing="0" cellpadding="0">
  <td align="center" style="width: 400px;">
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td>
          <a href="http://www.dot.com?itc=FB_ITC" target="_blank" style="font-size: 16px; font-family:'sofia', Helvetica, Arial, sans-serif; text-decoration: none; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; font-weight: bold; text-transform: uppercase; background-color: #343434; border-top: 12px solid #343434; border-bottom: 12px solid #343434; border-right: 18px solid #343434; border-left: 18px solid #343434; display: inline-block; color: #ffffff;">
            Button
          </a>
        </td>
      </tr>
    </table>
  </td>
</tr>
```

## Style rules

#### The 20px rule
In a nutshell the 20px rule is a guide to how much padding everything should have on the email. You will see that each card has a 20px padding inside the card, a 20px padding between cards and text groups have 20px padding in between them. When you add padding, always add `padding-bottom`, padding works downwards.

#### When you can break the 20px rule
The only time you can break the 20px rule is when you need to separate components further apart or you need to group text together. To group text together, you can use a 10px gap and if you want to separate further, use a 40px gap. Please don't use numbers like 42px or 21px, it will stress me out.

## Styleguide
See below for examples on basic styling for the cards. Feel free to change these styles for certain campaigns but please do not have the body text lighter than #888888

##### Title
18px, bold, uppercase, #343434

Example code:
``
style="font-family:'sofia', Helvetica, Arial, sans-serif; font-weight: bold; color: #343434; font-size: 18px; text-transform: uppercase; text-align: center;"
``

##### Paragraph
16px, #888888

Example code:
``
style="font-family:'sofia', Helvetica, Arial, sans-serif; font-weight: normal; color: #888888; font-size: 16px; text-align: center;"
``

## Issues
#### My image slices are creating a gap
<img src="http://media.firebox.com/i/github/slice-issue.jpg" width="300"><br>
Each image is trying to fill the space with 100% width, which is causing the height of an image to sometimes be a fraction of a pixel.

The solution is the manually set the height of the each image slice (3) in the row for desktop and mobile.

1. First, add a class to each image: (Change IMG_CLASS to whatever you want)
```
<img src="IMG_SRC" width="100%" style="display: block; line-height: 50%; width: 100%;" class="IMG_CLASS" border="0">
```

2. Then add a height to the image in style and on the image
```
<img src="IMG_SRC" width="100%" height="100px" style="display: block; height: 100px; line-height: 50%; width: 100%;" class="IMG_CLASS" border="0">
```

3. And finally, add the media query. Make sure it is inside the curly brackets of`@media screen and (max-width: 525px) { }`
```
img[class="IMG_CLASS"]{
    max-width: 100% !important;
    width: 100% !important;
    height: 100px !important;
}
```
Change `height: 100px !important;` to the height of the image you want for mobile.
Change `IMG_CLASS` to the class of the image you declared in step 1.

#### Images are showing weird lines
Use this on the image `style="display: block; line-height:0; vertical-align: top; font-size: 0px; border-style: none;"`
Also make sure the image is in the same table as the content if you get me.

## Checks
#### Alt & title tags
Make sure your alt and title tags have been entered. Every card will have `FB_ALT` & `FB_TITLE` by default so do a quick search to see if you find any.

#### Links
You need to make sure your links are correct. You can search for `http://www.dot.com` to see if you have missed any links.

#### ITC
The right ITC needs to be used to know which newsletter brings in sales of the product. Check to see if you have left any ITC's by searching for `FB_ITC`.


## Testing
#### Stage 1: In your browser
Make sure your email works well in in your browser. Ensure you test in a mobile view.

#### Stage 2: Litmus
Login details will be provided by Lewis. Paste in your code and preview in many email clients.

#### Stage 3: Real emails
Litmus isn't 100% accurate so testing with real email clients need to be done. Tests can be sent to fireboxtest@outlook.com
