# fbxstyle
Welcome to our UI pattern library!

## Grid system
We now have a grid system that should work both in modern browsers and terrible places like Windows Phone. You can do a few things with it that should be super handy in the future.

## Getting started
Your starting point should be like this:

```
<div class="fb-container">
	<div class="fb-row">
		COLUMNS GO HERE
	</div>
</div>
```

### Prefixes
To avoid overwritting any old code I have used the following prefixes when using the grid system.

## Column layout
``.fb-container .fb-row .fbc-xs-12 .fbc-sm-12 .fbc-md-12 .fbc-lg-12 .fbc-xl-12``

### Modifiers
- If you want the extras to work on all widths, add the xs prefix style as our media queries work from 0 >
- Apply these to `fb-row` to work for all the children

#### Snap to start (flex-start)
``fb-start-xs``

#### Center content (center)
``.fb-center-xs``

#### Snap to end content (flex-end)
``.fb-end-xs``

#### Snap to top (flex-start)
``.fb-top-xs``

#### Snap to middle (center)
``.fb-middle-xs``

#### Snap to bottom (flex-end)
``.fb-bottom-xs``

You can group these modifiers together. For example if you want to center a layout, you can use `class="fb-center-xs fb-middle-xs"`
