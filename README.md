# fbxstyle
Welcome to our UI pattern library!

## Grid system
We now have a grid system that should work both in modern browsers and terrible places like Windows Phone.You can do a few things with it that should be super handy in the future.

### Prefixes
To avoid overwritting any old code I have used the following prefixes when using the grid system.

## Column layout
``.fb-container .fb-row .fbc-xs-12 .fbc-sm-12 .fbc-md-12 .fbc-lg-12 .fbc-xl-12``

### Extras
If you want the extras to work on all widths, add the xs prefix style as our media queries work from 0 >

#### Snap to start (flex-start)
``fb-start-xs``

#### Center content (center)
``.fb-center-xs``

#### Snap to end content (flex-end)
``.fb-end-xs``

#### Snap to top (start)
``.fb-top-xs``

#### Snap to middle (center)
``.fb-middle-xs``


#### Snap to middle (center)
``.fb-bottom-xs``


.fb-bottom-xs {
  -webkit-box-align: end;
  -webkit-align-items: flex-end;
  -ms-flex-align: end;
  align-items: flex-end;
}

.fb-around-xs {
  -webkit-justify-content: space-around;
  -ms-flex-pack: distribute;
  justify-content: space-around;
}

.fb-between-xs {
  -webkit-box-pack: justify;
  -webkit-justify-content: space-between;
  -ms-flex-pack: justify;
  justify-content: space-between;
}

.fb-first-xs {
  -webkit-box-ordinal-group: 0;
  -webkit-order: -1;
  -ms-flex-order: -1;
  order: -1;
}

.fb-last-xs {
  -webkit-box-ordinal-group: 2;
  -webkit-order: 1;
  -ms-flex-order: 1;
  order: 1;
}
