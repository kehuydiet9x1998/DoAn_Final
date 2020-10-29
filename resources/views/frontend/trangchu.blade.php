<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" href="%PUBLIC_URL%/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <link rel="stylesheet" href="/assets/fonts/roboto.css">
  <link rel="stylesheet" href="/assets/fonts/material_ui_icon.css">
  <link rel="stylesheet" href="/assets/fonts/paytone_one.css">
  <link rel="stylesheet" href="/assets/fonts/montserrat.css">
  <link rel="stylesheet" href="/assets/fonts/poppins.css">

  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/frontend.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome-n.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="/css/app.css">
  <title>TEKY EDU</title>
  <style type="text/css">
    @charset 'UTF-8';

    /* Slider */
    .slick-loading .slick-list {
      background: #fff url(/images/vendor/slick-carousel/slick/ajax-loader.gif?c5cd7f5300576ab4c88202b42f6ded62) center center no-repeat;
    }

    /* Icons */
    @font-face {
      font-family: 'slick';
      font-weight: normal;
      font-style: normal;

      src: url(/fonts/vendor/slick-carousel/slick/slick.eot?ced611daf7709cc778da928fec876475);
      src: url(/fonts/vendor/slick-carousel/slick/slick.eot?ced611daf7709cc778da928fec876475?#iefix) format('embedded-opentype'), url(/fonts/vendor/slick-carousel/slick/slick.woff?b7c9e1e479de3b53f1e4e30ebac2403a) format('woff'), url(/fonts/vendor/slick-carousel/slick/slick.ttf?d41f55a78e6f49a5512878df1737e58a) format('truetype'), url(/fonts/vendor/slick-carousel/slick/slick.svg?f97e3bbf73254b0112091d0192f17aec#slick) format('svg');
    }

    /* Arrows */
    .slick-prev,
    .slick-next {
      font-size: 0;
      line-height: 0;

      position: absolute;
      top: 50%;

      display: block;

      width: 20px;
      height: 20px;
      padding: 0;
      -webkit-transform: translate(0, -50%);
      -ms-transform: translate(0, -50%);
      transform: translate(0, -50%);

      cursor: pointer;

      color: transparent;
      border: none;
      outline: none;
      background: transparent;
    }

    .slick-prev:hover,
    .slick-prev:focus,
    .slick-next:hover,
    .slick-next:focus {
      color: transparent;
      outline: none;
      background: transparent;
    }

    .slick-prev:hover:before,
    .slick-prev:focus:before,
    .slick-next:hover:before,
    .slick-next:focus:before {
      opacity: 1;
    }

    .slick-prev.slick-disabled:before,
    .slick-next.slick-disabled:before {
      opacity: .25;
    }

    .slick-prev:before,
    .slick-next:before {
      font-family: 'slick';
      font-size: 20px;
      line-height: 1;

      opacity: .75;
      color: white;

      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .slick-prev {
      left: -25px;
    }

    [dir='rtl'] .slick-prev {
      right: -25px;
      left: auto;
    }

    .slick-prev:before {
      content: '\2190';
    }

    [dir='rtl'] .slick-prev:before {
      content: '\2192';
    }

    .slick-next {
      right: -25px;
    }

    [dir='rtl'] .slick-next {
      right: auto;
      left: -25px;
    }

    .slick-next:before {
      content: '\2192';
    }

    [dir='rtl'] .slick-next:before {
      content: '\2190';
    }

    /* Dots */
    .slick-dotted.slick-slider {
      margin-bottom: 30px;
    }

    .slick-dots {
      position: absolute;
      bottom: -25px;

      display: block;

      width: 100%;
      padding: 0;
      margin: 0;

      list-style: none;

      text-align: center;
    }

    .slick-dots li {
      position: relative;

      display: inline-block;

      width: 20px;
      height: 20px;
      margin: 0 5px;
      padding: 0;

      cursor: pointer;
    }

    .slick-dots li button {
      font-size: 0;
      line-height: 0;

      display: block;

      width: 20px;
      height: 20px;
      padding: 5px;

      cursor: pointer;

      color: transparent;
      border: 0;
      outline: none;
      background: transparent;
    }

    .slick-dots li button:hover,
    .slick-dots li button:focus {
      outline: none;
    }

    .slick-dots li button:hover:before,
    .slick-dots li button:focus:before {
      opacity: 1;
    }

    .slick-dots li button:before {
      font-family: 'slick';
      font-size: 6px;
      line-height: 20px;

      position: absolute;
      top: 0;
      left: 0;

      width: 20px;
      height: 20px;

      content: '\2022';
      text-align: center;

      opacity: .25;
      color: black;

      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .slick-dots li.slick-active button:before {
      opacity: .75;
      color: black;
    }

  </style>
  <style type="text/css">
    /* Slider */
    .slick-slider {
      position: relative;

      display: block;
      box-sizing: border-box;

      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;

      -webkit-touch-callout: none;
      -khtml-user-select: none;
      -ms-touch-action: pan-y;
      touch-action: pan-y;
      -webkit-tap-highlight-color: transparent;
    }

    .slick-list {
      position: relative;

      display: block;
      overflow: hidden;

      margin: 0;
      padding: 0;
    }

    .slick-list:focus {
      outline: none;
    }

    .slick-list.dragging {
      cursor: pointer;
      cursor: hand;
    }

    .slick-slider .slick-track,
    .slick-slider .slick-list {
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      -o-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }

    .slick-track {
      position: relative;
      top: 0;
      left: 0;

      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .slick-track:before,
    .slick-track:after {
      display: table;

      content: '';
    }

    .slick-track:after {
      clear: both;
    }

    .slick-loading .slick-track {
      visibility: hidden;
    }

    .slick-slide {
      display: none;
      float: left;

      height: 100%;
      min-height: 1px;
    }

    [dir='rtl'] .slick-slide {
      float: right;
    }

    .slick-slide img {
      display: block;
    }

    .slick-slide.slick-loading img {
      display: none;
    }

    .slick-slide.dragging img {
      pointer-events: none;
    }

    .slick-initialized .slick-slide {
      display: block;
    }

    .slick-loading .slick-slide {
      visibility: hidden;
    }

    .slick-vertical .slick-slide {
      display: block;

      height: auto;

      border: 1px solid transparent;
    }

    .slick-arrow.slick-hidden {
      display: none;
    }

  </style>
  <style data-jss="" data-meta="MuiTouchRipple">
    .MuiTouchRipple-root {
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 0;
      overflow: hidden;
      position: absolute;
      border-radius: inherit;
      pointer-events: none;
    }

    .MuiTouchRipple-ripple {
      opacity: 0;
      position: absolute;
    }

    .MuiTouchRipple-rippleVisible {
      opacity: 0.3;
      animation: MuiTouchRipple-keyframes-enter 550ms cubic-bezier(0.4, 0, 0.2, 1);
      transform: scale(1);
    }

    .MuiTouchRipple-ripplePulsate {
      animation-duration: 200ms;
    }

    .MuiTouchRipple-child {
      width: 100%;
      height: 100%;
      display: block;
      opacity: 1;
      border-radius: 50%;
      background-color: currentColor;
    }

    .MuiTouchRipple-childLeaving {
      opacity: 0;
      animation: MuiTouchRipple-keyframes-exit 550ms cubic-bezier(0.4, 0, 0.2, 1);
    }

    .MuiTouchRipple-childPulsate {
      top: 0;
      left: 0;
      position: absolute;
      animation: MuiTouchRipple-keyframes-pulsate 2500ms cubic-bezier(0.4, 0, 0.2, 1) 200ms infinite;
    }

    @-moz-keyframes MuiTouchRipple-keyframes-enter {
      0% {
        opacity: 0.1;
        transform: scale(0);
      }

      100% {
        opacity: 0.3;
        transform: scale(1);
      }
    }

    @-moz-keyframes MuiTouchRipple-keyframes-exit {
      0% {
        opacity: 1;
      }

      100% {
        opacity: 0;
      }
    }

    @-moz-keyframes MuiTouchRipple-keyframes-pulsate {
      0% {
        transform: scale(1);
      }

      50% {
        transform: scale(0.92);
      }

      100% {
        transform: scale(1);
      }
    }

  </style>
  <style data-jss="" data-meta="MuiButtonBase">
    .MuiButtonBase-root {
      color: inherit;
      border: 0;
      cursor: pointer;
      margin: 0;
      display: inline-flex;
      outline: 0;
      padding: 0;
      position: relative;
      align-items: center;
      border-radius: 0;
      vertical-align: middle;
      -moz-appearance: none;
      justify-content: center;
      text-decoration: none;
      -moz-user-select: none;
      background-color: transparent;
      -webkit-appearance: none;
      -webkit-tap-highlight-color: transparent;
    }

    .MuiButtonBase-root::-moz-focus-inner {
      border-style: none;
    }

    .MuiButtonBase-root.Mui-disabled {
      cursor: default;
      pointer-events: none;
    }

    @media print {
      .MuiButtonBase-root {
        color-adjust: exact;
      }
    }

  </style>
  <style data-jss="" data-meta="MuiButton">
    .MuiButton-root {
      color: rgba(0, 0, 0, 0.87);
      padding: 6px 16px;
      font-size: 0.875rem;
      min-width: 64px;
      box-sizing: border-box;
      transition: background-color 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, box-shadow 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms, border 250ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
      font-family: "Roboto", "Helvetica", "Arial", sans-serif;
      font-weight: 500;
      line-height: 1.75;
      border-radius: 4px;
      letter-spacing: 0.02857em;
      text-transform: uppercase;
    }

    .MuiButton-root:hover {
      text-decoration: none;
      background-color: rgba(0, 0, 0, 0.04);
    }

    .MuiButton-root.Mui-disabled {
      color: rgba(0, 0, 0, 0.26);
    }

    @media (hover: none) {
      .MuiButton-root:hover {
        background-color: transparent;
      }
    }

    .MuiButton-root:hover.Mui-disabled {
      background-color: transparent;
    }

    .MuiButton-label {
      width: 100%;
      display: inherit;
      align-items: inherit;
      justify-content: inherit;
    }

    .MuiButton-text {
      padding: 6px 8px;
    }

    .MuiButton-textPrimary {
      color: #3f51b5;
    }

    .MuiButton-textPrimary:hover {
      background-color: rgba(63, 81, 181, 0.04);
    }

    @media (hover: none) {
      .MuiButton-textPrimary:hover {
        background-color: transparent;
      }
    }

    .MuiButton-textSecondary {
      color: #f50057;
    }

    .MuiButton-textSecondary:hover {
      background-color: rgba(245, 0, 87, 0.04);
    }

    @media (hover: none) {
      .MuiButton-textSecondary:hover {
        background-color: transparent;
      }
    }

    .MuiButton-outlined {
      border: 1px solid rgba(0, 0, 0, 0.23);
      padding: 5px 15px;
    }

    .MuiButton-outlined.Mui-disabled {
      border: 1px solid rgba(0, 0, 0, 0.12);
    }

    .MuiButton-outlinedPrimary {
      color: #3f51b5;
      border: 1px solid rgba(63, 81, 181, 0.5);
    }

    .MuiButton-outlinedPrimary:hover {
      border: 1px solid #3f51b5;
      background-color: rgba(63, 81, 181, 0.04);
    }

    @media (hover: none) {
      .MuiButton-outlinedPrimary:hover {
        background-color: transparent;
      }
    }

    .MuiButton-outlinedSecondary {
      color: #f50057;
      border: 1px solid rgba(245, 0, 87, 0.5);
    }

    .MuiButton-outlinedSecondary:hover {
      border: 1px solid #f50057;
      background-color: rgba(245, 0, 87, 0.04);
    }

    .MuiButton-outlinedSecondary.Mui-disabled {
      border: 1px solid rgba(0, 0, 0, 0.26);
    }

    @media (hover: none) {
      .MuiButton-outlinedSecondary:hover {
        background-color: transparent;
      }
    }

    .MuiButton-contained {
      color: rgba(0, 0, 0, 0.87);
      box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
      background-color: #e0e0e0;
    }

    .MuiButton-contained:hover {
      box-shadow: 0px 2px 4px -1px rgba(0, 0, 0, 0.2), 0px 4px 5px 0px rgba(0, 0, 0, 0.14), 0px 1px 10px 0px rgba(0, 0, 0, 0.12);
      background-color: #d5d5d5;
    }

    .MuiButton-contained.Mui-focusVisible {
      box-shadow: 0px 3px 5px -1px rgba(0, 0, 0, 0.2), 0px 6px 10px 0px rgba(0, 0, 0, 0.14), 0px 1px 18px 0px rgba(0, 0, 0, 0.12);
    }

    .MuiButton-contained:active {
      box-shadow: 0px 5px 5px -3px rgba(0, 0, 0, 0.2), 0px 8px 10px 1px rgba(0, 0, 0, 0.14), 0px 3px 14px 2px rgba(0, 0, 0, 0.12);
    }

    .MuiButton-contained.Mui-disabled {
      color: rgba(0, 0, 0, 0.26);
      box-shadow: none;
      background-color: rgba(0, 0, 0, 0.12);
    }

    @media (hover: none) {
      .MuiButton-contained:hover {
        box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px 0px rgba(0, 0, 0, 0.14), 0px 1px 5px 0px rgba(0, 0, 0, 0.12);
        background-color: #e0e0e0;
      }
    }

    .MuiButton-contained:hover.Mui-disabled {
      background-color: rgba(0, 0, 0, 0.12);
    }

    .MuiButton-containedPrimary {
      color: #fff;
      background-color: #3f51b5;
    }

    .MuiButton-containedPrimary:hover {
      background-color: #303f9f;
    }

    @media (hover: none) {
      .MuiButton-containedPrimary:hover {
        background-color: #3f51b5;
      }
    }

    .MuiButton-containedSecondary {
      color: #fff;
      background-color: #f50057;
    }

    .MuiButton-containedSecondary:hover {
      background-color: #c51162;
    }

    @media (hover: none) {
      .MuiButton-containedSecondary:hover {
        background-color: #f50057;
      }
    }

    .MuiButton-disableElevation {
      box-shadow: none;
    }

    .MuiButton-disableElevation:hover {
      box-shadow: none;
    }

    .MuiButton-disableElevation.Mui-focusVisible {
      box-shadow: none;
    }

    .MuiButton-disableElevation:active {
      box-shadow: none;
    }

    .MuiButton-disableElevation.Mui-disabled {
      box-shadow: none;
    }

    .MuiButton-colorInherit {
      color: inherit;
      border-color: currentColor;
    }

    .MuiButton-textSizeSmall {
      padding: 4px 5px;
      font-size: 0.8125rem;
    }

    .MuiButton-textSizeLarge {
      padding: 8px 11px;
      font-size: 0.9375rem;
    }

    .MuiButton-outlinedSizeSmall {
      padding: 3px 9px;
      font-size: 0.8125rem;
    }

    .MuiButton-outlinedSizeLarge {
      padding: 7px 21px;
      font-size: 0.9375rem;
    }

    .MuiButton-containedSizeSmall {
      padding: 4px 10px;
      font-size: 0.8125rem;
    }

    .MuiButton-containedSizeLarge {
      padding: 8px 22px;
      font-size: 0.9375rem;
    }

    .MuiButton-fullWidth {
      width: 100%;
    }

    .MuiButton-startIcon {
      display: inherit;
      margin-left: -4px;
      margin-right: 8px;
    }

    .MuiButton-startIcon.MuiButton-iconSizeSmall {
      margin-left: -2px;
    }

    .MuiButton-endIcon {
      display: inherit;
      margin-left: 8px;
      margin-right: -4px;
    }

    .MuiButton-endIcon.MuiButton-iconSizeSmall {
      margin-right: -2px;
    }

    .MuiButton-iconSizeSmall>*:first-child {
      font-size: 18px;
    }

    .MuiButton-iconSizeMedium>*:first-child {
      font-size: 20px;
    }

    .MuiButton-iconSizeLarge>*:first-child {
      font-size: 22px;
    }

  </style>
  <style type="text/css" data-fbcssmodules="css:fb.css.basecss:fb.css.dialog css:fb.css.iframewidget">
    .fb_hidden {
      position: absolute;
      top: -10000px;
      z-index: 10001
    }

    .fb_reposition {
      overflow: hidden;
      position: relative
    }

    .fb_invisible {
      display: none
    }

    .fb_reset {
      background: none;
      border: 0;
      border-spacing: 0;
      color: #000;
      cursor: auto;
      direction: ltr;
      font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
      font-size: 11px;
      font-style: normal;
      font-variant: normal;
      font-weight: normal;
      letter-spacing: normal;
      line-height: 1;
      margin: 0;
      overflow: visible;
      padding: 0;
      text-align: left;
      text-decoration: none;
      text-indent: 0;
      text-shadow: none;
      text-transform: none;
      visibility: visible;
      white-space: normal;
      word-spacing: normal
    }

    .fb_reset>div {
      overflow: hidden
    }

    @keyframes fb_transform {
      from {
        opacity: 0;
        transform: scale(.95)
      }

      to {
        opacity: 1;
        transform: scale(1)
      }
    }

    .fb_animate {
      animation: fb_transform .3s forwards
    }

    .fb_dialog {
      background: rgba(82, 82, 82, .7);
      position: absolute;
      top: -10000px;
      z-index: 10001
    }

    .fb_dialog_advanced {
      border-radius: 8px;
      padding: 10px
    }

    .fb_dialog_content {
      background: #fff;
      color: #373737
    }

    .fb_dialog_close_icon {
      background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
      cursor: pointer;
      display: block;
      height: 15px;
      position: absolute;
      right: 18px;
      top: 17px;
      width: 15px
    }

    .fb_dialog_mobile .fb_dialog_close_icon {
      left: 5px;
      right: auto;
      top: 5px
    }

    .fb_dialog_padding {
      background-color: transparent;
      position: absolute;
      width: 1px;
      z-index: -1
    }

    .fb_dialog_close_icon:hover {
      background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent
    }

    .fb_dialog_close_icon:active {
      background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent
    }

    .fb_dialog_iframe {
      line-height: 0
    }

    .fb_dialog_content .dialog_title {
      background: #6d84b4;
      border: 1px solid #365899;
      color: #fff;
      font-size: 14px;
      font-weight: bold;
      margin: 0
    }

    .fb_dialog_content .dialog_title>span {
      background: url(https://static.xx.fbcdn.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;
      float: left;
      padding: 5px 0 7px 26px
    }

    body.fb_hidden {
      height: 100%;
      left: 0;
      margin: 0;
      overflow: visible;
      position: absolute;
      top: -10000px;
      transform: none;
      width: 100%
    }

    .fb_dialog.fb_dialog_mobile.loading {
      background: url(https://static.xx.fbcdn.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
      min-height: 100%;
      min-width: 100%;
      overflow: hidden;
      position: absolute;
      top: 0;
      z-index: 10001
    }

    .fb_dialog.fb_dialog_mobile.loading.centered {
      background: none;
      height: auto;
      min-height: initial;
      min-width: initial;
      width: auto
    }

    .fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner {
      width: 100%
    }

    .fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content {
      background: none
    }

    .loading.centered #fb_dialog_loader_close {
      clear: both;
      color: #fff;
      display: block;
      font-size: 18px;
      padding-top: 20px
    }

    #fb-root #fb_dialog_ipad_overlay {
      background: rgba(0, 0, 0, .4);
      bottom: 0;
      left: 0;
      min-height: 100%;
      position: absolute;
      right: 0;
      top: 0;
      width: 100%;
      z-index: 10000
    }

    #fb-root #fb_dialog_ipad_overlay.hidden {
      display: none
    }

    .fb_dialog.fb_dialog_mobile.loading iframe {
      visibility: hidden
    }

    .fb_dialog_mobile .fb_dialog_iframe {
      position: sticky;
      top: 0
    }

    .fb_dialog_content .dialog_header {
      background: linear-gradient(from(#738aba), to(#2c4987));
      border-bottom: 1px solid;
      border-color: #043b87;
      box-shadow: white 0 1px 1px -1px inset;
      color: #fff;
      font: bold 14px Helvetica, sans-serif;
      text-overflow: ellipsis;
      text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
      vertical-align: middle;
      white-space: nowrap
    }

    .fb_dialog_content .dialog_header table {
      height: 43px;
      width: 100%
    }

    .fb_dialog_content .dialog_header td.header_left {
      font-size: 12px;
      padding-left: 5px;
      vertical-align: middle;
      width: 60px
    }

    .fb_dialog_content .dialog_header td.header_right {
      font-size: 12px;
      padding-right: 5px;
      vertical-align: middle;
      width: 60px
    }

    .fb_dialog_content .touchable_button {
      background: linear-gradient(from(#4267B2), to(#2a4887));
      background-clip: padding-box;
      border: 1px solid #29487d;
      border-radius: 3px;
      display: inline-block;
      line-height: 18px;
      margin-top: 3px;
      max-width: 85px;
      padding: 4px 12px;
      position: relative
    }

    .fb_dialog_content .dialog_header .touchable_button input {
      background: none;
      border: none;
      color: #fff;
      font: bold 12px Helvetica, sans-serif;
      margin: 2px -12px;
      padding: 2px 6px 3px 6px;
      text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
    }

    .fb_dialog_content .dialog_header .header_center {
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      line-height: 18px;
      text-align: center;
      vertical-align: middle
    }

    .fb_dialog_content .dialog_content {
      background: url(https://static.xx.fbcdn.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;
      border: 1px solid #4a4a4a;
      border-bottom: 0;
      border-top: 0;
      height: 150px
    }

    .fb_dialog_content .dialog_footer {
      background: #f5f6f7;
      border: 1px solid #4a4a4a;
      border-top-color: #ccc;
      height: 40px
    }

    #fb_dialog_loader_close {
      float: left
    }

    .fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
      text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
    }

    .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
      visibility: hidden
    }

    #fb_dialog_loader_spinner {
      animation: rotateSpinner 1.2s linear infinite;
      background-color: transparent;
      background-image: url(https://static.xx.fbcdn.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);
      background-position: 50% 50%;
      background-repeat: no-repeat;
      height: 24px;
      width: 24px
    }

    @keyframes rotateSpinner {
      0% {
        transform: rotate(0deg)
      }

      100% {
        transform: rotate(360deg)
      }
    }

    .fb_iframe_widget {
      display: inline-block;
      position: relative
    }

    .fb_iframe_widget span {
      display: inline-block;
      position: relative;
      text-align: justify
    }

    .fb_iframe_widget iframe {
      position: absolute
    }

    .fb_iframe_widget_fluid_desktop,
    .fb_iframe_widget_fluid_desktop span,
    .fb_iframe_widget_fluid_desktop iframe {
      max-width: 100%
    }

    .fb_iframe_widget_fluid_desktop iframe {
      min-width: 220px;
      position: relative
    }

    .fb_iframe_widget_lift {
      z-index: 1
    }

    .fb_iframe_widget_fluid {
      display: inline
    }

    .fb_iframe_widget_fluid span {
      width: 100%
    }

  </style>

  <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>

</head>

<body cz-shortcut-listen="true">
  <div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;">
      <div></div>
    </div>
  </div>
  <script src="https://connect.facebook.net/vi_VN/sdk.js?hash=43363f0a22e8310affcf734746b07fbf" async="" crossorigin="anonymous"></script>
  <script async="" defer="" crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&amp;version=v8.0" nonce="Mj1BlSFb"></script>

  <div id="home">
    <div>
      @include('frontend.layout.header')
      <div>
        <div class="featured_container">
          <div class="slick-slider slick-initialized" dir="ltr">
            <div class="slick-list" style="height: 110vh">
              <div class="slick-track" style="width: 9457px; opacity: 1; transform: translate3d(-100vw, 0px, 0px);">
                <div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 100vw;">
                  <div>
                    <div tabindex="-1" style="width: 100%; display: inline-block;">
                      <div class="featured_image" style="background: rgba(0, 0, 0, 0) url(&quot;https://teky.edu.vn/wp-content/uploads/2019/11/1-1.jpg&quot;) repeat scroll 0% 0% / 100% 100%; height: 100vh;">
                        <div class="featured_action">
                          <div class="tag title">Nền tảng online
                            Học công nghệ cho trẻ em</div>
                          <div class="tag low_title">Duy nhất tại Việt Nam
                            Trên 20.000 học sinh trên toàn quốc</div>
                          <div><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary" tabindex="0" type="button" style="background-color: rgba(0, 0, 0, 0); font-family: Montserrat; outline: currentcolor none medium; box-shadow: none; line-height: 44px; letter-spacing: 0px; font-weight: 700; font-size: 15px; border-color: rgb(255, 255, 255); border-style: solid; border-width: 1px; margin: 20px; border-radius: 30px; padding: 0px 39px; color: rgb(255, 255, 255); text-decoration: none; white-space: nowrap; width: auto; height: auto; opacity: 1; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;"><span class="MuiButton-label">Đăng ký học thử miễn phí</span><span class="MuiTouchRipple-root"></span></button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: currentcolor none medium; width: 100vw;">
                  <div>
                    <div tabindex="-1" style="width: 100%; display: inline-block;">
                      <div class="featured_image" style="background: rgba(0, 0, 0, 0) url(&quot;/assets/sliders/slider_1.jpg&quot;) repeat scroll 0% 0% / 100% 100%; height: 100vh;">
                        <div class="featured_action">
                          <div class="tag title">Giảng viên chất lượng</div>
                          <div class="tag low_title">Đội ngũ giáo viên
                            chuyên môn và tâm huyết</div>
                          <div><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary" tabindex="0" type="button" style="background-color: rgba(0, 0, 0, 0); font-family: Montserrat; outline: currentcolor none medium; box-shadow: none; line-height: 44px; letter-spacing: 0px; font-weight: 700; font-size: 15px; border-color: rgb(255, 255, 255); border-style: solid; border-width: 1px; margin: 20px; border-radius: 30px; padding: 0px 39px; color: rgb(255, 255, 255); text-decoration: none; white-space: nowrap; width: auto; height: auto; opacity: 1; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;"><span class="MuiButton-label">Đăng ký học thử miễn phí</span><span class="MuiTouchRipple-root"></span></button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: currentcolor none medium; width: 100vw;">
                  <div>
                    <div tabindex="-1" style="width: 100%; display: inline-block;">
                      <div class="featured_image" style="background: rgba(0, 0, 0, 0) url(&quot;/assets/sliders/slider_2.jpg&quot;) repeat scroll 0% 0% / 100% 100%; height: 100vh;">
                        <div class="featured_action">
                          <div class="tag title">Chương trình đào tạo
                            đạt chuẩn Mỹ</div>
                          <div class="tag low_title">Nội dung kiến thức theo chuẩn
                            CSTA và EST12 của Mỹ</div>
                          <div><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary" tabindex="0" type="button" style="background-color: rgba(0, 0, 0, 0); font-family: Montserrat; outline: currentcolor none medium; box-shadow: none; line-height: 44px; letter-spacing: 0px; font-weight: 700; font-size: 15px; border-color: rgb(255, 255, 255); border-style: solid; border-width: 1px; margin: 20px; border-radius: 30px; padding: 0px 39px; color: rgb(255, 255, 255); text-decoration: none; white-space: nowrap; width: auto; height: auto; opacity: 1; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;"><span class="MuiButton-label">Đăng ký học thử miễn phí</span><span class="MuiTouchRipple-root"></span></button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div data-index="2" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: currentcolor none medium; width: 100vw;">
                  <div>
                    <div tabindex="-1" style="width: 100%; display: inline-block;">
                      <div class="featured_image" style="background: rgba(0, 0, 0, 0) url(&quot;https://teky.edu.vn/wp-content/uploads/2019/11/1-1.jpg&quot;) repeat scroll 0% 0% / 100% 100%; height: 100vh;">
                        <div class="featured_action">
                          <div class="tag title">Nền tảng online
                            Học công nghệ cho trẻ em</div>
                          <div class="tag low_title">Duy nhất tại Việt Nam
                            Trên 20.000 học sinh trên toàn quốc</div>
                          <div><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary" tabindex="0" type="button" style="background-color: rgba(0, 0, 0, 0); font-family: Montserrat; outline: currentcolor none medium; box-shadow: none; line-height: 44px; letter-spacing: 0px; font-weight: 700; font-size: 15px; border-color: rgb(255, 255, 255); border-style: solid; border-width: 1px; margin: 20px; border-radius: 30px; padding: 0px 39px; color: rgb(255, 255, 255); text-decoration: none; white-space: nowrap; width: auto; height: auto; opacity: 1; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;"><span class="MuiButton-label">Đăng ký học thử miễn phí</span><span class="MuiTouchRipple-root"></span></button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div data-index="3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 100vw;">
                  <div>
                    <div tabindex="-1" style="width: 100%; display: inline-block;">
                      <div class="featured_image" style="background: rgba(0, 0, 0, 0) url(&quot;/assets/sliders/slider_1.jpg&quot;) repeat scroll 0% 0% / 100% 100%; height: 100vh;">
                        <div class="featured_action">
                          <div class="tag title">Giảng viên chất lượng</div>
                          <div class="tag low_title">Đội ngũ giáo viên
                            chuyên môn và tâm huyết</div>
                          <div><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary" tabindex="0" type="button" style="background-color: rgba(0, 0, 0, 0); font-family: Montserrat; outline: currentcolor none medium; box-shadow: none; line-height: 44px; letter-spacing: 0px; font-weight: 700; font-size: 15px; border-color: rgb(255, 255, 255); border-style: solid; border-width: 1px; margin: 20px; border-radius: 30px; padding: 0px 39px; color: rgb(255, 255, 255); text-decoration: none; white-space: nowrap; width: auto; height: auto; opacity: 1; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;"><span class="MuiButton-label">Đăng ký học thử miễn phí</span><span class="MuiTouchRipple-root"></span></button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div data-index="4" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 100vw;">
                  <div>
                    <div tabindex="-1" style="width: 100%; display: inline-block;">
                      <div class="featured_image" style="background: rgba(0, 0, 0, 0) url(&quot;/assets/sliders/slider_2.jpg&quot;) repeat scroll 0% 0% / 100% 100%; height: 100vh;">
                        <div class="featured_action">
                          <div class="tag title">Chương trình đào tạo
                            đạt chuẩn Mỹ</div>
                          <div class="tag low_title">Nội dung kiến thức theo chuẩn
                            CSTA và EST12 của Mỹ</div>
                          <div><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary" tabindex="0" type="button" style="background-color: rgba(0, 0, 0, 0); font-family: Montserrat; outline: currentcolor none medium; box-shadow: none; line-height: 44px; letter-spacing: 0px; font-weight: 700; font-size: 15px; border-color: rgb(255, 255, 255); border-style: solid; border-width: 1px; margin: 20px; border-radius: 30px; padding: 0px 39px; color: rgb(255, 255, 255); text-decoration: none; white-space: nowrap; width: auto; height: auto; opacity: 1; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;"><span class="MuiButton-label">Đăng ký học thử miễn phí</span><span class="MuiTouchRipple-root"></span></button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div data-index="5" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 100vw;">
                  <div>
                    <div tabindex="-1" style="width: 100%; display: inline-block;">
                      <div class="featured_image" style="background: rgba(0, 0, 0, 0) url(&quot;https://teky.edu.vn/wp-content/uploads/2019/11/1-1.jpg&quot;) repeat scroll 0% 0% / 100% 100%; height: 100vh;">
                        <div class="featured_action">
                          <div class="tag title">Nền tảng online
                            Học công nghệ cho trẻ em</div>
                          <div class="tag low_title">Duy nhất tại Việt Nam
                            Trên 20.000 học sinh trên toàn quốc</div>
                          <div><button class="MuiButtonBase-root MuiButton-root MuiButton-outlined MuiButton-outlinedPrimary" tabindex="0" type="button" style="background-color: rgba(0, 0, 0, 0); font-family: Montserrat; outline: currentcolor none medium; box-shadow: none; line-height: 44px; letter-spacing: 0px; font-weight: 700; font-size: 15px; border-color: rgb(255, 255, 255); border-style: solid; border-width: 1px; margin: 20px; border-radius: 30px; padding: 0px 39px; color: rgb(255, 255, 255); text-decoration: none; white-space: nowrap; width: auto; height: auto; opacity: 1; transform: translate3d(0px, 0px, 0px); transform-origin: 50% 50% 0px;"><span class="MuiButton-label">Đăng ký học thử miễn phí</span><span class="MuiTouchRipple-root"></span></button></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ss1bottom" style="margin-left: -3px;"></div>
        </div>
        <div class="container">
          <div class="toptext" style="padding-top: 60px; padding-bottom: 25px; text-align: center; text-transform: uppercase;">
            <h4 style="font-size: 20px; line-height: 3;"> LỰA CHỌN HÀNG ĐẦU CỦA 20.000 HỌC SINH &amp; TRÊN 100 TRƯỜNG HỌC
            </h4>
            <h3 style="color: rgb(46, 72, 123); text-transform: uppercase;"><b> Vì sao chọn chúng tôi? </b></h3>
            <hr style="width: 200px; margin: 40px auto;">
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="content"><img src="/assets/images/gioithieu_1.jpg" alt="">
                <div class="text" style="text-align: left; color: black; margin-top: 20px;">
                  <h6 style="font-size: 0.9rem; color: black; text-align: justify;">Học Online trực tiếp với Giáo viên, 1 lớp tối đa 6 học sinh; Đội ngũ giáo viên giỏi chuyên môn và tâm huyết, sử dụng thành thạo công nghệ trực tuyến để truyền đạt kiến thức hiệu quả &amp; truyền cảm hứng cho học sinh.</h6>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="content"><img src="/assets/images/gioithieu_2.jpg" alt="">
                <div class="text" style="text-align: left; color: black; margin-top: 20px;">
                  <h6 style="font-size: 0.9rem; color: black; text-align: justify;">Học với các công cụ công nghệ và thiết bị học tập hàng đầu thế giới từ Mỹ, Trung Quốc, Hàn Quốc. Nội dung kiến thức theo chuẩn CSTA &amp; ETS K12 của Mỹ cho nhiều độ tuổi khác nhau. Giải thưởng đổi mới giáo dục châu Á - EduTech Asia Award. </h6>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="content"><img src="/assets/images/gioithieu_3.jpg" alt="">
                <div class="text" style="text-align: left; color: black; margin-top: 20px;">
                  <h6 style="font-size: 0.9rem; color: black; text-align: justify;">Nền tảng công nghệ học trực tuyến với nhiều tính năng vượt trội, tương tác đa chiều, tăng trải nghiệm thú vị và gắn kết học sinh, xoá nhà ranh giới lớp Online và Offline. Giờ học linh động từ 8:30 tới 21:30 - Không đòi hỏi máy tính cấu hình cao. </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="toptext" style="padding-top: 60px; padding-bottom: 25px; text-align: center; text-transform: uppercase;">
            <h4 style="font-size: 20px; line-height: 3;"> thời đại 4.0 </h4>
            <h3 style="color: rgb(46, 72, 123); text-transform: uppercase;"><b> trẻ em phải biết lập trình </b></h3>
            <hr style="width: 200px; margin: 40px auto;">
          </div>
          <div class="container" style="text-align: center;">
            <div style="display: flex; justify-content: space-between;"><iframe title="{1}" src="https://www.youtube.com/embed/1jsJHvAXqgQ" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="550" height="315" frameborder="0"></iframe><iframe title="{2}" src="https://www.youtube.com/embed/q6QbqIs6ll8" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="550" height="315" frameborder="0"></iframe></div><a class="MuiButtonBase-root MuiButton-root MuiButton-contained" tabindex="0" aria-disabled="false" href="#contained-buttons" style="background-color: rgb(93, 194, 167); border-radius: 50px; font-weight: 700; color: white; margin: 20px 0px;"><span class="MuiButton-label">ĐĂNG KÝ NGAY HÔM NAY</span><span class="MuiTouchRipple-root"></span></a>
          </div>
        </div>
        <div style="text-align: center;">
          <div class="toptext" style="padding-top: 60px; padding-bottom: 25px; text-align: center; text-transform: uppercase;">
            <h4 style="font-size: 20px; line-height: 3;"> Lộ trình học được xây dựng kỹ lưỡng </h4>
            <h3 style="color: rgb(46, 72, 123); text-transform: uppercase;"><b> Lộ trình học </b></h3>
            <hr style="width: 200px; margin: 40px auto;">
          </div><img src="/assets/images/lotrinhhoc.png" alt="">
        </div>
        <div>
          <div class="toptext" style="padding-top: 60px; padding-bottom: 25px; text-align: center; text-transform: uppercase;">
            <h4 style="font-size: 20px; line-height: 3;"> CÔNG NGHỆ DẪN ĐẦU - BÙNG NỔ TƯƠNG LAI
            </h4>
            <h3 style="color: rgb(46, 72, 123); text-transform: uppercase;"><b> 12 Khoá học trực tuyến
              </b></h3>
            <hr style="width: 200px; margin: 40px auto;">
          </div>
          <div class="container">
            <div class="bp-element bp-element-list-courses layout-grid">
              <div class="row">
                <div class="custom-col col-sm-6 col-md-6 col-lg-3 wrapper-item-course">
                  <div class="item-course color-2">
                    <div class="pic"><a href="/"><img src="/assets/images/khoahoc1.png" alt="Mầm non Lập trình với Scratch Jr. và Maker Empire"></a>
                      <div class="price">180.000 đ </div>
                    </div>
                    <div class="text">
                      <div class="teacher">
                        <div class="ava"><img src="https://teky.online/wp-content/uploads/2020/03/TekyAvatar-100x100.png" alt="User Avatar" class="avatar avatar-68 wp-user-avatar wp-user-avatar-68 photo avatar-default" width="68" height="68"></div><a href="/">Học viên Teky</a>
                      </div>
                      <h3 class="title-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></h3>
                      <div class="info-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></div>
                    </div>
                  </div>
                </div>
                <div class="custom-col col-sm-6 col-md-6 col-lg-3 wrapper-item-course">
                  <div class="item-course color-2">
                    <div class="pic"><a href="/"><img src="/assets/images/khoahoc2.png" alt="Mầm non Lập trình với Scratch Jr. và Maker Empire"></a>
                      <div class="price">180.000 đ </div>
                    </div>
                    <div class="text">
                      <div class="teacher">
                        <div class="ava"><img src="https://teky.online/wp-content/uploads/2020/03/TekyAvatar-100x100.png" alt="User Avatar" class="avatar avatar-68 wp-user-avatar wp-user-avatar-68 photo avatar-default" width="68" height="68"></div><a href="/">Học viên Teky</a>
                      </div>
                      <h3 class="title-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></h3>
                      <div class="info-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></div>
                    </div>
                  </div>
                </div>
                <div class="custom-col col-sm-6 col-md-6 col-lg-3 wrapper-item-course">
                  <div class="item-course color-2">
                    <div class="pic"><a href="/"><img src="/assets/images/khoahoc3.png" alt="Mầm non Lập trình với Scratch Jr. và Maker Empire"></a>
                      <div class="price">180.000 đ </div>
                    </div>
                    <div class="text">
                      <div class="teacher">
                        <div class="ava"><img src="https://teky.online/wp-content/uploads/2020/03/TekyAvatar-100x100.png" alt="User Avatar" class="avatar avatar-68 wp-user-avatar wp-user-avatar-68 photo avatar-default" width="68" height="68"></div><a href="/">Học viên Teky</a>
                      </div>
                      <h3 class="title-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></h3>
                      <div class="info-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></div>
                    </div>
                  </div>
                </div>
                <div class="custom-col col-sm-6 col-md-6 col-lg-3 wrapper-item-course">
                  <div class="item-course color-2">
                    <div class="pic"><a href="/"><img src="/assets/images/khoahoc4.png" alt="Mầm non Lập trình với Scratch Jr. và Maker Empire"></a>
                      <div class="price">180.000 đ </div>
                    </div>
                    <div class="text">
                      <div class="teacher">
                        <div class="ava"><img src="https://teky.online/wp-content/uploads/2020/03/TekyAvatar-100x100.png" alt="User Avatar" class="avatar avatar-68 wp-user-avatar wp-user-avatar-68 photo avatar-default" width="68" height="68"></div><a href="/">Học viên Teky</a>
                      </div>
                      <h3 class="title-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></h3>
                      <div class="info-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></div>
                    </div>
                  </div>
                </div>
                <div class="custom-col col-sm-6 col-md-6 col-lg-3 wrapper-item-course">
                  <div class="item-course color-2">
                    <div class="pic"><a href="/"><img src="/assets/images/khoahoc5.png" alt="Mầm non Lập trình với Scratch Jr. và Maker Empire"></a>
                      <div class="price">180.000 đ </div>
                    </div>
                    <div class="text">
                      <div class="teacher">
                        <div class="ava"><img src="https://teky.online/wp-content/uploads/2020/03/TekyAvatar-100x100.png" alt="User Avatar" class="avatar avatar-68 wp-user-avatar wp-user-avatar-68 photo avatar-default" width="68" height="68"></div><a href="/">Học viên Teky</a>
                      </div>
                      <h3 class="title-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></h3>
                      <div class="info-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></div>
                    </div>
                  </div>
                </div>
                <div class="custom-col col-sm-6 col-md-6 col-lg-3 wrapper-item-course">
                  <div class="item-course color-2">
                    <div class="pic"><a href="/"><img src="/assets/images/khoahoc6.png" alt="Mầm non Lập trình với Scratch Jr. và Maker Empire"></a>
                      <div class="price">180.000 đ </div>
                    </div>
                    <div class="text">
                      <div class="teacher">
                        <div class="ava"><img src="https://teky.online/wp-content/uploads/2020/03/TekyAvatar-100x100.png" alt="User Avatar" class="avatar avatar-68 wp-user-avatar wp-user-avatar-68 photo avatar-default" width="68" height="68"></div><a href="/">Học viên Teky</a>
                      </div>
                      <h3 class="title-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></h3>
                      <div class="info-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></div>
                    </div>
                  </div>
                </div>
                <div class="custom-col col-sm-6 col-md-6 col-lg-3 wrapper-item-course">
                  <div class="item-course color-2">
                    <div class="pic"><a href="/"><img src="/assets/images/khoahoc7.png" alt="Mầm non Lập trình với Scratch Jr. và Maker Empire"></a>
                      <div class="price">180.000 đ </div>
                    </div>
                    <div class="text">
                      <div class="teacher">
                        <div class="ava"><img src="https://teky.online/wp-content/uploads/2020/03/TekyAvatar-100x100.png" alt="User Avatar" class="avatar avatar-68 wp-user-avatar wp-user-avatar-68 photo avatar-default" width="68" height="68"></div><a href="/">Học viên Teky</a>
                      </div>
                      <h3 class="title-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></h3>
                      <div class="info-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></div>
                    </div>
                  </div>
                </div>
                <div class="custom-col col-sm-6 col-md-6 col-lg-3 wrapper-item-course">
                  <div class="item-course color-2">
                    <div class="pic"><a href="/"><img src="/assets/images/khoahoc8.png" alt="Mầm non Lập trình với Scratch Jr. và Maker Empire"></a>
                      <div class="price">180.000 đ </div>
                    </div>
                    <div class="text">
                      <div class="teacher">
                        <div class="ava"><img src="https://teky.online/wp-content/uploads/2020/03/TekyAvatar-100x100.png" alt="User Avatar" class="avatar avatar-68 wp-user-avatar wp-user-avatar-68 photo avatar-default" width="68" height="68"></div><a href="/">Học viên Teky</a>
                      </div>
                      <h3 class="title-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></h3>
                      <div class="info-course"><a href="/">Mầm non Lập trình với Scratch Jr. và Maker Empire</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="toptext" style="padding-top: 60px; padding-bottom: 25px; text-align: center; text-transform: uppercase;">
            <h4 style="font-size: 20px; line-height: 3;"> Thành tích
            </h4>
            <h3 style="color: rgb(46, 72, 123); text-transform: uppercase;"><b> Giải thưởng đã đạt được
              </b></h3>
            <hr style="width: 200px; margin: 40px auto;">
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="giaithuong"><img src="/assets/images/giaithuong1.png" alt="">
                  <h3 style="text-transform: uppercase;">SCHOOL OF THE FUTURE – WEF 2020</h3>
                  <p>Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="giaithuong"><img src="/assets/images/giaithuong2.png" alt="">
                  <h3 style="text-transform: uppercase;">ASEAN BUSINESS AWARDS 2019</h3>
                  <p> Được vinh danh tại hạng mục Startup and Innovation Driven Entrepreneur dành cho các doanh nghiệp tốt nhất tại Đông Nam Á</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="giaithuong"><img src="/assets/images/giaithuong3.png" alt="">
                  <h3 style="text-transform: uppercase;">SCHOOL OF THE FUTURE – WEF 2020</h3>
                  <p>Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="giaithuong"><img src="/assets/images/giaithuong4.png" alt="">
                  <h3 style="text-transform: uppercase;">SCHOOL OF THE FUTURE – WEF 2020</h3>
                  <p>Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="giaithuong"><img src="/assets/images/giaithuong5.png" alt="">
                  <h3 style="text-transform: uppercase;">SCHOOL OF THE FUTURE – WEF 2020</h3>
                  <p>Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="giaithuong"><img src="/assets/images/giaithuong6.png" alt="">
                  <h3 style="text-transform: uppercase;">SCHOOL OF THE FUTURE – WEF 2020</h3>
                  <p>Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="giaithuong"><img src="/assets/images/giaithuong7.png" alt="">
                  <h3 style="text-transform: uppercase;">SCHOOL OF THE FUTURE – WEF 2020</h3>
                  <p>Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="giaithuong"><img src="/assets/images/giaithuong8.png" alt="">
                  <h3 style="text-transform: uppercase;">SCHOOL OF THE FUTURE – WEF 2020</h3>
                  <p>Teky được bình chọn là một trong 14 mô hình giáo dục đổi mới toàn cầu tiêu biểu tại Diễn đàn kinh tế thế giới WEF 2020 tại Thụy Sĩ</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <section id="ss10">
          <div class="container" style="margin-top: -60px; position: relative; z-index: 2;">
            <div class="toptext" style="padding-top: 90px; padding-bottom: 10px;">
              <h3 style="color: rgb(46, 72, 123);"><b> Ưu đãi đặc biệt </b></h3>
            </div>
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-6 col-xs-12" style="margin-bottom: 15px;">
                <div class="row">
                  <div class="col-md-12 col-xs-12">
                    <div class="content" style="color: rgb(8, 87, 132);">
                      <ul style="text-align: left; margin-bottom: 30px;">
                        <li class="why"><img class="sao" src="/assets/images/sao.png" alt="">
                          <h6 style="margin-left: 10px; font-size: 1rem;">Giảm 30% cho lần đăng ký đầu tiên.</h6>
                        </li>
                        <li class="why"><img class="sao" src="/assets/images/sao.png" alt="">
                          <h6 style="margin-left: 10px; font-size: 1rem;">Miễn phí một khóa học trải nghiệm tùy chọn tại TEKY</h6>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-12" style="text-align: left; margin-bottom: 10px;">
                    <div>
                      <h5 style="color: rgb(45, 71, 123);">Thời gian ưu đãi còn</h5>
                    </div>
                  </div>
                  <div class="col-md-12 col-xs-12" style="margin-bottom: 35px; display: contents;">
                    <div class="col-md-3 col-xs-3" style="flex: 0 0 25%; max-width: 25%;">
                      <div class="tivi" style="height: 70px; width: 70px; border-radius: 10px; background: rgb(50, 107, 252) none repeat scroll 0% 0%;"><span class="form-control oinput" style="border-radius: 10px; background: rgb(50, 106, 252) none repeat scroll 0% 0%; border: medium none; color: white; font-size: 30px; padding: 0px;" id="ngay"><b style="margin-left: -3px;"> 0 </b></span><b style="color: white;"> ngày </b></div>
                    </div>
                    <div class="col-md-3 col-xs-3" style="flex: 0 0 25%; max-width: 25%;">
                      <div class="tivi" style="height: 70px; width: 70px; border-radius: 10px; background: rgb(50, 107, 252) none repeat scroll 0% 0%;"><span class="form-control oinput" style="border-radius: 10px; background: rgb(50, 106, 252) none repeat scroll 0% 0%; border: medium none; color: white; font-size: 30px; padding: 0px;" id="gio">21</span><b style="color: white;"> giờ</b></div>
                    </div>
                    <div class="col-md-3 col-xs-3" style="flex: 0 0 25%; max-width: 25%;">
                      <div class="tivi" style="height: 70px; width: 70px; border-radius: 10px; background: rgb(50, 107, 252) none repeat scroll 0% 0%;"><span class="form-control oinput" style="border-radius: 10px; background: rgb(50, 106, 252) none repeat scroll 0% 0%; border: medium none; color: white; font-size: 30px; padding: 0px;" id="phut">22</span><b style="color: white;"> phút</b></div>
                    </div>
                    <div class="col-md-3 col-xs-3" style="flex: 0 0 25%; max-width: 25%;">
                      <div class="tivi" style="height: 70px; width: 70px; border-radius: 10px; background: rgb(50, 107, 252) none repeat scroll 0% 0%;"><span class="form-control oinput" style="border-radius: 10px; background: rgb(50, 106, 252) none repeat scroll 0% 0%; border: medium none; color: white; font-size: 30px; padding: 0px;" id="giay">14</span><b style="color: white;"> giây</b></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5 col-xs-12" style="text-align: center;">
                <form class="formdk" id="registerform" novalidate="">
                  <div class="toptextform" style="padding-top: 20px; padding-bottom: 10px;">
                    <h4 class="d-none d-sm-block" style="color: white;"><b> ĐĂNG KÝ NHẬN ƯU ĐÃI </b></h4>
                    <h4 class="d-block d-sm-none" style="color: white; font-size: 1.2rem;"><b> ĐĂNG KÝ NHẬN ƯU ĐÃI </b></h4>
                  </div>
                  <div class="boxx" style="width: 90%; margin: auto;">
                    <div class="controls"><input type="text" placeholder="Tên của bạn" class="form-control" name="name"></div>
                    <div class="controls"><input type="tel" placeholder="Số điện thoại" class="form-control" name="phone"></div>
                    <div class="controls"><input type="text" placeholder="Địa chỉ" class="form-control" name="street"></div>
                    <div class="controls"><input type="text" placeholder="Tuổi của bé" class="form-control" name="lpinput1"></div>
                    <div class="controls"><select tabindex="10" style="width: 100%; height: 35px; border-radius: 10px; color: rgb(108, 116, 125);" name="khoahoc" data-selected="true">
                        <option value="true">Lựa chọn khóa học</option>
                        <option value="">Lập trình Robot</option>
                        <option value="">Lập trình Robot</option>
                        <option value="">Lập trình Robot</option>
                        <option value="">Lập trình Robot</option>
                      </select></div>
                  </div><input type="hidden" id="utm_source" name="utm_source" value="Google_Search7_Thaivh_TuKhoa_TiengAnhChoBe"><input type="hidden" id="utm_campaign" name="utm_campaign" value="true"><input type="hidden" name="ngaythang" value="2020-09-15 03:43:38"><button class="yellow" type="submit" id="dangky">
                    <div>
                      <h5 style="padding: 5px;"><b id="btnText">Đăng ký ngay!</b></h5>
                    </div>
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="bottom2" style="position: relative; z-index: 2;"></div>
        </section>
      </div>
      <div>
        <div class="home_footer" id="bt-block">
          <div class="footer_wrapper">
            <div class="col-3" style="padding: 0px 35px 0px 0px;"><a href="/">
                <div class="width-logo sm-logo"><img class="logo" src="/assets/images/TEKY-Logo-W.png" alt="TEKY Online"></div>
              </a>
              <p class="intro">Đội ngũ giáo viên của TEKY là những người ưu tú nhất trong ngành công nghệ thông tin, có khả năng truyền cảm hứng tuyệt vời và ươm mầm tài năng trẻ.</p>
              <ul class="social-ul">
                <li><a rel="noopener noreferrer" target="_blank" href="https://www.facebook.com/tekyacademy"><i class="icon icon-facebook"></i></a></li>
                <li><a rel="noopener noreferrer" target="_blank" href="https://www.youtube.com/channel/UCQVGBz5ybBSIVJaL1l_XCAQ"><i class="icon icon-youtube"></i></a></li>
                <li><a rel="noopener noreferrer" target="_blank" href="https://www.instagram.com/trungtamanhnguathena/"><i class="icon icon-insta"></i></a></li>
              </ul>
            </div>
            <div class="col-3" style="padding: 0px 0px 0px 10px;">
              <ul>
                <li class="top-li">Giờ hoạt động</li>
                <li><a target="_blank" rel="noopener noreferrer" href="/">THỨ 3 đến THỨ 6: 08:30 - 20:30</a></li>
                <li><a target="_blank" rel="noopener noreferrer" href="/">THỨ 7 - Chủ Nhật: 08:30 - 20:30</a></li>
                <li><a target="_blank" href="/">THỨ 2: Không làm việc</a></li>
              </ul>
            </div>
            <div class="col-3" style="padding: 0px 0px 0px 55px;">
              <ul class="info-ft">
                <li class="top-li">về teky</li>
                <li><a rel="noopener noreferrer" target="_blank" href="https://anhnguathena.vn/cau-hoi-thuong-gap-id462">› Báo chính nói gì về Teky</a></li>
                <li><a rel="noopener noreferrer" target="_blank" href="https://anhnguathena.vn/huong-dan-dang-ky-hoc-id457">› Đội ngũ giảng viên</a></li>
                <li><a rel="noopener noreferrer" target="_blank" href="https://anhnguathena.vn/huong-dan-thanh-toan-id452">› Đội ngũ lãnh đạo</a></li>
                <li><a rel="noopener noreferrer" target="_blank" href="https://anhnguathena.vn/quy-dinh-trung-tam-id459">› Giải thưởng đã đạt được</a></li>
                <li><a rel="noopener noreferrer" target="_blank" href="/">› Sơ đồ đường đi</a></li>
              </ul>
            </div>
            <div class="col-3" style="padding: 0px 0px 0px 20px;">
              <ul class="info-ft">
                <div>
                  <li class="top-li">Fanpage</li>
                  <div class="fb-page fb_iframe_widget" data-href="https://www.facebook.com/tekyacademy" data-tabs="timeline" data-width="300" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=233&amp;height=200&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftekyacademy&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=300"><span style="vertical-align: bottom; width: 233px; height: 200px;"><iframe name="f34b55166e36c54" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" style="border: medium none; visibility: visible; width: 233px; height: 200px;" src="https://www.facebook.com/v8.0/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df2496ab75ec7d32%26domain%3D127.0.0.1%26origin%3Dhttp%253A%252F%252F127.0.0.1%253A8000%252Ffbdea158c9a794%26relation%3Dparent.parent&amp;container_width=233&amp;height=200&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Ftekyacademy&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline&amp;width=300" class="" width="300px" height="200px" frameborder="0"></iframe></span></div>
                </div>
              </ul>
            </div>
            <p class="bt-p">Develop by Kim Anh team</p>
          </div>
        </div>;
      </div>
    </div>
  </div>
  {{-- <script type="text/javascript" src="/js/app.js"></script> --}}

  <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
