<style>/*!
* Responsive Video Gallery - A jQuery plugin that provides a slider with horizontal and vertical thumb layouts for video galleries.
* @version 1.0.9
* @link http://fooplugins.github.io/rvslider/
* @copyright Steven Usher & Brad Vincent 2015
* @license Released under the GPLv3 license.
*/

.rvs-item {
    width: 100% !important;
    height: 100% !important;
}

.rvs-container,
.rvs-empty,
.rvs-item,
.rvs-item-container,
.rvs-item-content,
.rvs-item-stage,
.rvs-item-text,
.rvs-nav-container,
.rvs-nav-item,
.rvs-nav-next,
.rvs-nav-prev,
.rvs-nav-stage {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box
}

.rvs-container {
    display: block;
    width: auto;
    height: 335px;
    max-width: 1280px;
    margin: 0 auto;
    position: relative;
    padding-right: 100px;
    font-family: 'Open Sans', 'Helvetica Neue', Arial, sans-serif
}

.rvs-item-container,
.rvs-nav-container {
    display: block;
    height: 100%;
    overflow: hidden
}

.rvs-empty {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    overflow: hidden;
    color: inherit
}

.rvs-item-container {
    height: 100%;
    background-color: inherit
}

.rvs-item-stage {
    height: 100%;
    max-height: 100%;
    position: relative;
    -webkit-transform: translateX(0);
    -moz-transform: translateX(0);
    transform: translateX(0);
    background-color: inherit
}

.rvs-item {
    display: block;
    height: 100%;
    position: absolute;
    top: 0;
    background: center center no-repeat;
    background-size: cover;
    background-color: inherit
}

.rvs-item-content,
.rvs-item-text {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    opacity: 0;
    margin: 0;
    -webkit-transform: translateY(-30px);
    -moz-transform: translateY(-30px);
    transform: translateY(-30px)
}

.rvs-item-content.rvs-bottom-center,
.rvs-item-content.rvs-bottom-left,
.rvs-item-content.rvs-bottom-right,
.rvs-item-text.rvs-bottom-center,
.rvs-item-text.rvs-bottom-left,
.rvs-item-text.rvs-bottom-right {
    top: auto;
    bottom: 0;
    -webkit-transform: translateY(30px);
    -moz-transform: translateY(30px);
    transform: translateY(30px)
}

.rvs-item-content.rvs-bottom-left,
.rvs-item-content.rvs-top-left,
.rvs-item-text.rvs-bottom-left,
.rvs-item-text.rvs-top-left {
    text-align: left
}

.rvs-item-content.rvs-bottom-right,
.rvs-item-content.rvs-top-right,
.rvs-item-text.rvs-bottom-right,
.rvs-item-text.rvs-top-right {
    text-align: right
}

.rvs-item-content.rvs-bottom-center,
.rvs-item-content.rvs-top-center,
.rvs-item-text.rvs-bottom-center,
.rvs-item-text.rvs-top-center {
    text-align: center
}

.rvs-active .rvs-item-content,
.rvs-active .rvs-item-text {
    opacity: 1;
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    transform: translateY(0)
}

.rvs-item-text {
    font-size: 14px;
    padding: 12px;
    text-shadow: 1px 1px 0 rgba(0, 0, 0, .2)
}

.rvs-item-text small {
    display: block;
    font-size: 80%;
    text-align: inherit
}

.rvs-hide-credits .rvs-item-text small {
    display: none
}

.rvs-player {
    position: absolute;
    top: 0;
    right: 0;
    width: 100%;
    height: 100%;
    background-color: inherit
}

.rvs-player>video {
    background-color: #000
}

.rvs-container a.rvs-close,
.rvs-container a.rvs-play-video {
    position: absolute;
    display: inline-block;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    padding: 0;
    text-decoration: none;
    outline: 0;
    opacity: 0;
    box-shadow: none
}

.rvs-container a.rvs-close:active,
.rvs-container a.rvs-close:focus,
.rvs-container a.rvs-close:hover,
.rvs-container a.rvs-play-video:active,
.rvs-container a.rvs-play-video:focus,
.rvs-container a.rvs-play-video:hover {
    text-decoration: none;
    outline: 0;
    border: none;
    box-shadow: none
}

.rvs-container a.rvs-close {
    top: 10px;
    left: 10px;
    width: 36px;
    height: 36px;
    font-size: 28px;
    font-weight: 700;
    z-index: 2
}

.rvs-container a.rvs-play-video {
    top: 50%;
    left: 50%;
    width: 60px;
    height: 60px;
    font-size: 32px;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%)
}

.rvs-container .rvs-active a.rvs-play-video,
.rvs-container .rvs-player:hover a.rvs-close {
    opacity: 1
}

.rvs-container.rvs-show-play-on-hover .rvs-active a.rvs-play-video {
    opacity: 0
}

.rvs-container.rvs-show-play-on-hover .rvs-active:hover a.rvs-play-video {
    opacity: 1
}

.rvs-container .rvs-video-active a.rvs-play-video {
    display: none
}

.rvs-player-error {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    text-align: center;
    background-color: inherit
}

.rvs-error-icon {
    display: inline-block;
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    border-style: solid;
    border-radius: 50%;
    background-color: #CA3030;
    border-width: 12px;
    width: 140px;
    height: 140px;
    font-size: 180px
}

.rvs-nav-container {
    width: 100px;
    position: absolute;
    top: 0;
    right: 0
}

.rvs-nav-container a.rvs-nav-next,
.rvs-nav-container a.rvs-nav-prev {
    display: block;
    position: absolute;
    left: 0;
    width: 100%;
    padding: 6px 8px;
    font-size: 16px;
    font-weight: 700;
    opacity: 0;
    outline: 0;
    text-decoration: none;
    cursor: pointer;
    z-index: 2
}

.rvs-nav-container:hover a.rvs-nav-next,
.rvs-nav-container:hover a.rvs-nav-prev {
    opacity: .5
}

.rvs-nav-container a.rvs-nav-next:hover,
.rvs-nav-container a.rvs-nav-prev:hover {
    color: inherit;
    text-decoration: none;
    opacity: 1
}

.rvs-nav-container a.rvs-nav-prev {
    top: 0;
    border-bottom: solid 1px transparent
}

.rvs-nav-container a.rvs-nav-next {
    bottom: 0;
    border-top: solid 1px transparent
}

.rvs-nav-container a.rvs-nav-stage {
    -webkit-transform: translateX(0) translateY(-1px);
    -ms-transform: translateX(0) translateY(-1px);
    transform: translateX(0) translateY(-1px);
    width: 100%;
    z-index: 1
}

.rvs-nav-container a.rvs-nav-item {
    display: block;
    position: relative;
    width: 100%;
    height: 56px;
    padding: 4px 6px;
    border-top: solid 1px transparent;
    cursor: pointer;
    overflow: hidden;
    outline: 0;
    text-decoration: none;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.rvs-nav-container a.rvs-nav-item:hover {
    color: inherit;
    text-decoration: none;
    outline: 0
}

.rvs-nav-container a.rvs-nav-item:before {
    display: table;
    content: ' '
}

.rvs-nav-container a.rvs-nav-item:first-child {
    border-top-color: transparent;
    border-top-width: 2px
}

.rvs-nav-container span.rvs-nav-item-thumb {
    float: left;
    margin-left: -8px;
    margin-right: 8px;
    width: 60px;
    height: 60px;
    background: center center no-repeat;
    background-size: cover
}

.rvs-nav-container h4.rvs-nav-item-title,
.rvs-nav-container small.rvs-nav-item-credits {
    display: block;
    line-height: 15px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    clear: none
}

.rvs-nav-container h4.rvs-nav-item-title {
    font-size: 12px
}

.rvs-nav-container small.rvs-nav-item-credits {
    max-height: 15px;
    font-size: 11px;
    margin: 0
}

.rvs-thumb-play .rvs-nav-container span.rvs-nav-item-thumb:before {
    padding: 6px 7px 8px;
    border-radius: 4px;
    display: inline-block;
    width: 28px;
    height: 28px
}

.rvs-thumb-play .rvs-nav-container .rvs-video-active span.rvs-nav-item-thumb:before {
    padding: 1px 8px 7px;
    font-size: 20px
}

.rvs-large-thumbs .rvs-nav-container span.rvs-nav-item-thumb {
    height: 60px;
    width: 98px
}

.rvs-hide-credits .rvs-nav-container small.rvs-nav-item-credits {
    display: none
}

.rvs-hide-credits .rvs-nav-container h4.rvs-nav-item-title {
    white-space: normal
}

.rvs-animate .rvs-item-stage,
.rvs-animate .rvs-nav-stage {
    width: 100% !important;
    -webkit-transition: -webkit-transform .6s cubic-bezier(.445, .05, .55, .95);
    -moz-transition: -moz-transform .6s cubic-bezier(.445, .05, .55, .95);
    transition: transform .6s cubic-bezier(.445, .05, .55, .95)
}

.rvs-animate .rvs-nav-item {
    -webkit-transition: background-color .6s cubic-bezier(.445, .05, .55, .95), border-color .6s cubic-bezier(.445, .05, .55, .95);
    -moz-transition: background-color .6s cubic-bezier(.445, .05, .55, .95), border-color .6s cubic-bezier(.445, .05, .55, .95);
    transition: background-color .6s cubic-bezier(.445, .05, .55, .95), border-color .6s cubic-bezier(.445, .05, .55, .95)
}

.rvs-animate .rvs-close,
.rvs-animate .rvs-play-video {
    -webkit-transition: background-color .15s cubic-bezier(.445, .05, .55, .95), color .15s cubic-bezier(.445, .05, .55, .95), opacity .15s cubic-bezier(.445, .05, .55, .95), border-color .15s cubic-bezier(.445, .05, .55, .95);
    -moz-transition: background-color .15s cubic-bezier(.445, .05, .55, .95), color .15s cubic-bezier(.445, .05, .55, .95), opacity .15s cubic-bezier(.445, .05, .55, .95), border-color .15s cubic-bezier(.445, .05, .55, .95);
    transition: background-color .15s cubic-bezier(.445, .05, .55, .95), color .15s cubic-bezier(.445, .05, .55, .95), opacity .15s cubic-bezier(.445, .05, .55, .95), border-color .15s cubic-bezier(.445, .05, .55, .95)
}

.rvs-animate .rvs-item-content,
.rvs-animate .rvs-item-text {
    -webkit-transition: opacity .6s cubic-bezier(.445, .05, .55, .95), -webkit-transform .6s cubic-bezier(.445, .05, .55, .95);
    -moz-transition: opacity .6s cubic-bezier(.445, .05, .55, .95), -moz-transform .6s cubic-bezier(.445, .05, .55, .95);
    transition: opacity .6s cubic-bezier(.445, .05, .55, .95), transform .6s cubic-bezier(.445, .05, .55, .95)
}

.rvs-animate .rvs-nav-next,
.rvs-animate .rvs-nav-prev {
    -webkit-transition: opacity .5s cubic-bezier(.445, .05, .55, .95);
    -moz-transition: opacity .5s cubic-bezier(.445, .05, .55, .95);
    transition: opacity .5s cubic-bezier(.445, .05, .55, .95);
    transition-delay: .5s
}

.rvs-animate .rvs-nav-next:hover,
.rvs-animate .rvs-nav-prev:hover {
    transition-delay: 0s
}

.rvs-animate .rvs-nav-item h4,
.rvs-animate .rvs-nav-item small {
    -webkit-transition: color .5s cubic-bezier(.445, .05, .55, .95);
    -moz-transition: color .5s cubic-bezier(.445, .05, .55, .95);
    transition: color .5s cubic-bezier(.445, .05, .55, .95)
}

.rvs-animate .rvs-nav-item span {
    -webkit-transition: background-color .5s cubic-bezier(.445, .05, .55, .95);
    -moz-transition: background-color .5s cubic-bezier(.445, .05, .55, .95);
    transition: background-color .5s cubic-bezier(.445, .05, .55, .95)
}

.rvs-container.rvs-xs.rvs-sm {
    padding-right: 150px
}

.rvs-xs.rvs-sm .rvs-item-text {
    font-size: 16px;
    padding: 14px
}

.rvs-xs.rvs-sm .rvs-nav-container {
    width: 150px
}

.rvs-container.rvs-xs.rvs-sm.rvs-md {
    height: 467px;
    padding-right: 220px
}

.rvs-xs.rvs-sm.rvs-md .rvs-item-text {
    font-size: 18px;
    padding: 16px
}

.rvs-xs.rvs-sm.rvs-md .rvs-nav-container {
    width: 220px
}

.rvs-xs.rvs-sm.rvs-md .rvs-nav-container a.rvs-nav-item {
    height: 78px;
    padding: 8px 16px
}

.rvs-xs.rvs-sm.rvs-md .rvs-nav-container h4.rvs-nav-item-title {
    margin: 10px 0 2px;
    max-height: 40px;
    line-height: 20px;
    font-size: 16px
}

.rvs-xs.rvs-sm.rvs-md .rvs-nav-container small.rvs-nav-item-credits {
    font-size: 14px
}

.rvs-xs.rvs-sm.rvs-md .rvs-nav-container span.rvs-nav-item-thumb {
    display: block
}

.rvs-xs.rvs-sm.rvs-md .rvs-error-icon {
    border-width: 18px;
    width: 200px;
    height: 200px;
    font-size: 250px
}

.rvs-container.rvs-xs.rvs-sm.rvs-md.rvs-lg {
    height: 545px;
    padding-right: 280px
}

.rvs-xs.rvs-sm.rvs-md.rvs-lg .rvs-item-text {
    font-size: 20px;
    padding: 20px
}

.rvs-container.rvs-bordered-circle-play a.rvs-play-video:before,
.rvs-container.rvs-flat-circle-play a.rvs-play-video:before {
    padding-left: 4px
}

.rvs-xs.rvs-sm.rvs-md.rvs-lg .rvs-nav-container {
    width: 280px
}

.rvs-container.rvs-horizontal {
    padding-right: 0;
    padding-bottom: 56px
}

.rvs-horizontal .rvs-item-container,
.rvs-horizontal .rvs-nav-container {
    width: 100%
}

.rvs-horizontal .rvs-nav-container {
    height: 56px;
    top: auto;
    bottom: 0
}

.rvs-horizontal .rvs-nav-container a.rvs-nav-next,
.rvs-horizontal .rvs-nav-container a.rvs-nav-prev {
    left: auto;
    top: 0;
    width: auto;
    height: 56px;
    line-height: 56px;
    border-top: none;
    border-bottom: none
}

.rvs-horizontal .rvs-nav-container a.rvs-nav-prev {
    top: auto;
    left: 0;
    border-right-style: solid;
    border-right-width: 1px
}

.rvs-horizontal .rvs-nav-container a.rvs-nav-next {
    bottom: auto;
    right: 0;
    border-left-style: solid;
    border-left-width: 1px
}

.rvs-horizontal .rvs-nav-container .rvs-nav-stage {
    -webkit-transform: translateX(0) translateY(0);
    -ms-transform: translateX(0) translateY(0);
    transform: translateX(0) translateY(0);
    height: 100%
}

.rvs-horizontal .rvs-nav-container a.rvs-nav-item {
    position: absolute;
    top: 0;
    left: 0;
    width: 100px;
    height: 100%;
    border-top: none;
    border-left-style: solid;
    border-left-width: 1px
}

.rvs-horizontal .rvs-nav-container a.rvs-nav-item:first-child {
    border-left-color: transparent;
    border-left-width: 2px
}

.rvs-large-thumbs.rvs-horizontal .rvs-nav-container span.rvs-nav-item-thumb {
    width: 60px;
    height: 60px
}

.rvs-horizontal.rvs-xs.rvs-sm .rvs-nav-container,
.rvs-horizontal.rvs-xs.rvs-sm.rvs-md.rvs-lg .rvs-nav-container {
    width: 100%
}

.rvs-container.rvs-horizontal.rvs-xs.rvs-sm {
    padding-right: 0;
    height: 420px
}

.rvs-container.rvs-horizontal.rvs-xs.rvs-sm.rvs-md {
    padding-right: 0;
    padding-bottom: 78px;
    height: 520px
}

.rvs-horizontal.rvs-xs.rvs-sm.rvs-md .rvs-nav-container a.rvs-nav-next,
.rvs-horizontal.rvs-xs.rvs-sm.rvs-md .rvs-nav-container a.rvs-nav-prev {
    height: 100%;
    line-height: 78px
}

.rvs-horizontal.rvs-xs.rvs-sm.rvs-md .rvs-nav-container {
    width: 100%;
    height: 78px
}

.rvs-horizontal.rvs-xs.rvs-sm.rvs-md .rvs-nav-container a.rvs-nav-item {
    height: 100%
}

.rvs-container.rvs-horizontal.rvs-xs.rvs-sm.rvs-md.rvs-lg {
    height: 546px;
    padding-right: 0
}

.rvs-close,
.rvs-error-icon,
.rvs-nav-next,
.rvs-nav-prev,
.rvs-play-video,
.rvs-thumb-play .rvs-nav-item-thumb {
    font-family: "Andale Mono", Arial, "Courier New", sans-serif;
    line-height: 1;
    text-align: center
}

.rvs-close:before,
.rvs-error-icon:before,
.rvs-horizontal .rvs-nav-next:before,
.rvs-horizontal .rvs-nav-prev:before,
.rvs-play-video:before,
.rvs-thumb-play .rvs-nav-item-thumb:before {
    display: inline-block;
    position: relative;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
}

.rvs-horizontal .rvs-nav-next,
.rvs-horizontal .rvs-nav-prev {
    width: auto;
    height: 78px
}

.rvs-play-video:before,
.rvs-thumb-play .rvs-nav-item-thumb:before {
    content: '\25ba'
}

.rvs-thumb-play .rvs-video-active .rvs-nav-item-thumb:before {
    content: '\25A0'
}

.rvs-nav-prev:before {
    content: '\25b2'
}

.rvs-nav-next:before {
    content: '\25bc'
}

.rvs-horizontal .rvs-nav-prev:before {
    content: '\25c0'
}

.rvs-horizontal .rvs-nav-next:before {
    content: '\25b6'
}

.rvs-container.rvs-flat-circle-play a.rvs-play-video {
    border-radius: 50%
}

.rvs-container.rvs-plain-arrow-play .rvs-item a.rvs-play-video,
.rvs-container.rvs-plain-arrow-play .rvs-item a.rvs-play-video:active,
.rvs-container.rvs-plain-arrow-play .rvs-item a.rvs-play-video:focus,
.rvs-container.rvs-plain-arrow-play .rvs-item a.rvs-play-video:hover {
    background-color: transparent;
    font-size: 50px
}

.rvs-container.rvs-youtube-play a.rvs-play-video {
    border-radius: 50%/15%;
    font-size: 24px;
    height: 42px
}

.rvs-container.rvs-bordered-circle-play .rvs-item a.rvs-play-video,
.rvs-container.rvs-bordered-circle-play .rvs-item a.rvs-play-video:active,
.rvs-container.rvs-bordered-circle-play .rvs-item a.rvs-play-video:focus,
.rvs-container.rvs-bordered-circle-play .rvs-item a.rvs-play-video:hover {
    background-color: transparent;
    border-radius: 50%;
    border-width: 4px;
    border-style: solid
}

.rvs-container,
.rvs-container a.rvs-close,
.rvs-container a.rvs-close:active,
.rvs-container a.rvs-close:focus,
.rvs-container a.rvs-close:hover,
.rvs-container a.rvs-nav-next,
.rvs-container a.rvs-nav-next:active,
.rvs-container a.rvs-nav-next:focus,
.rvs-container a.rvs-nav-next:hover,
.rvs-container a.rvs-nav-prev,
.rvs-container a.rvs-nav-prev:active,
.rvs-container a.rvs-nav-prev:focus,
.rvs-container a.rvs-nav-prev:hover,
.rvs-container a.rvs-play-video,
.rvs-container a.rvs-play-video:active,
.rvs-container a.rvs-play-video:focus,
.rvs-container a.rvs-play-video:hover,
.rvs-item-text,
.rvs-nav-item-title,
.rvs-thumb-play .rvs-nav-item-thumb:before,
.rvs-thumb-play .rvs-nav-item-thumb:hover:before {
    color: #FFF
}

.rvs-container a.rvs-play-video,
.rvs-container a.rvs-play-video:active,
.rvs-container a.rvs-play-video:focus,
.rvs-container a.rvs-play-video:hover {
    border-color: #FFF
}

.rvs-nav-item-credits {
    color: #767676
}

.rvs-container a.rvs-close,
.rvs-container a.rvs-play-video,
.rvs-nav-container span.rvs-nav-item-thumb,
.rvs-thumb-play .rvs-nav-container span.rvs-nav-item-thumb:before {
    background-color: rgba(23, 35, 34, .75)
}

.rvs-container,
.rvs-container a.rvs-nav-next,
.rvs-container a.rvs-nav-prev {
    background-color: #151515
}

.rvs-container a.rvs-nav-item:active,
.rvs-container a.rvs-nav-item:focus,
.rvs-container a.rvs-nav-item:hover,
.rvs-container a.rvs-nav-next:active,
.rvs-container a.rvs-nav-next:focus,
.rvs-container a.rvs-nav-next:hover,
.rvs-container a.rvs-nav-prev:active,
.rvs-container a.rvs-nav-prev:focus,
.rvs-container a.rvs-nav-prev:hover {
    background-color: #000
}

.rvs-container a.rvs-nav-item,
.rvs-container a.rvs-nav-item:active,
.rvs-container a.rvs-nav-item:focus,
.rvs-container a.rvs-nav-item:hover,
.rvs-container a.rvs-nav-next,
.rvs-container a.rvs-nav-next:active,
.rvs-container a.rvs-nav-next:focus,
.rvs-container a.rvs-nav-next:hover,
.rvs-container a.rvs-nav-prev,
.rvs-container a.rvs-nav-prev:active,
.rvs-container a.rvs-nav-prev:focus,
.rvs-container a.rvs-nav-prev:hover,
.rvs-nav-container {
    border-color: #2E2E2E
}

.rvs-container a.rvs-nav-item:first-child {
    border-color: #151515
}

.rvs-container a.rvs-nav-item:first-child:focus,
.rvs-container a.rvs-nav-item:first-child:hover {
    border-color: #000
}

.rvs-light .rvs-nav-item-title,
.rvs-light.rvs-container,
.rvs-light.rvs-container a.rvs-nav-next,
.rvs-light.rvs-container a.rvs-nav-next:active,
.rvs-light.rvs-container a.rvs-nav-next:focus,
.rvs-light.rvs-container a.rvs-nav-next:hover,
.rvs-light.rvs-container a.rvs-nav-prev,
.rvs-light.rvs-container a.rvs-nav-prev:active,
.rvs-light.rvs-container a.rvs-nav-prev:focus,
.rvs-light.rvs-container a.rvs-nav-prev:hover {
    color: #333
}

.rvs-light .rvs-nav-item-credits {
    color: #767676
}

.rvs-light.rvs-container,
.rvs-light.rvs-container a.rvs-nav-next,
.rvs-light.rvs-container a.rvs-nav-prev {
    background-color: #FFF
}

.rvs-light.rvs-container a.rvs-nav-item:active,
.rvs-light.rvs-container a.rvs-nav-item:focus,
.rvs-light.rvs-container a.rvs-nav-item:hover,
.rvs-light.rvs-container a.rvs-nav-next:active,
.rvs-light.rvs-container a.rvs-nav-next:focus,
.rvs-light.rvs-container a.rvs-nav-next:hover,
.rvs-light.rvs-container a.rvs-nav-prev:active,
.rvs-light.rvs-container a.rvs-nav-prev:focus,
.rvs-light.rvs-container a.rvs-nav-prev:hover {
    background-color: #F9F9F9
}

.rvs-container a.rvs-light .rvs-nav-prev:focus,
.rvs-light .rvs-nav-container,
.rvs-light.rvs-container a.rvs-nav-item,
.rvs-light.rvs-container a.rvs-nav-item:active,
.rvs-light.rvs-container a.rvs-nav-item:focus,
.rvs-light.rvs-container a.rvs-nav-item:hover,
.rvs-light.rvs-container a.rvs-nav-next,
.rvs-light.rvs-container a.rvs-nav-next:active,
.rvs-light.rvs-container a.rvs-nav-next:focus,
.rvs-light.rvs-container a.rvs-nav-next:hover,
.rvs-light.rvs-container a.rvs-nav-prev,
.rvs-light.rvs-container a.rvs-nav-prev:active,
.rvs-light.rvs-container a.rvs-nav-prev:hover {
    border-color: #e2e2e2
}

.rvs-light.rvs-container a.rvs-nav-item:first-child {
    border-color: #FFF
}

.rvs-light.rvs-container a.rvs-nav-item:first-child:focus,
.rvs-light.rvs-container a.rvs-nav-item:first-child:hover {
    border-color: #F9F9F9
}

.rvs-container a.rvs-close:active,
.rvs-container a.rvs-close:focus,
.rvs-container a.rvs-close:hover,
.rvs-container a.rvs-nav-item.rvs-active,
.rvs-container a.rvs-nav-item.rvs-active:active,
.rvs-container a.rvs-nav-item.rvs-active:focus,
.rvs-container a.rvs-nav-item.rvs-active:hover,
.rvs-container a.rvs-play-video:active,
.rvs-container a.rvs-play-video:focus,
.rvs-container a.rvs-play-video:hover,
.rvs-container.rvs-thumb-play .rvs-nav-container .rvs-video-active span.rvs-nav-item-thumb:before,
.rvs-container.rvs-thumb-play .rvs-nav-container span.rvs-nav-item-thumb:hover:before {
    background-color: #7816D6
}

.rvs-container a.rvs-nav-item.rvs-active,
.rvs-container a.rvs-nav-item.rvs-active:active,
.rvs-container a.rvs-nav-item.rvs-active:first-child,
.rvs-container a.rvs-nav-item.rvs-active:first-child:active,
.rvs-container a.rvs-nav-item.rvs-active:first-child:focus,
.rvs-container a.rvs-nav-item.rvs-active:first-child:hover,
.rvs-container a.rvs-nav-item.rvs-active:focus,
.rvs-container a.rvs-nav-item.rvs-active:hover,
.rvs-container a.rvs-play-video:active,
.rvs-container a.rvs-play-video:focus,
.rvs-container a.rvs-play-video:hover {
    border-color: #7816D6
}

.rvs-container .rvs-active .rvs-nav-item-credits,
.rvs-container .rvs-active .rvs-nav-item-title {
    color: #FFF
}

.rvs-green-highlight.rvs-container a.rvs-close:active,
.rvs-green-highlight.rvs-container a.rvs-close:focus,
.rvs-green-highlight.rvs-container a.rvs-close:hover,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active:active,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active:focus,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active:hover,
.rvs-green-highlight.rvs-container a.rvs-play-video:active,
.rvs-green-highlight.rvs-container a.rvs-play-video:focus,
.rvs-green-highlight.rvs-container a.rvs-play-video:hover,
.rvs-green-highlight.rvs-thumb-play .rvs-nav-container .rvs-video-active span.rvs-nav-item-thumb:before,
.rvs-green-highlight.rvs-thumb-play .rvs-nav-container span.rvs-nav-item-thumb:hover:before {
    background-color: #02874A
}

.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active:active,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:active,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:focus,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:hover,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active:focus,
.rvs-green-highlight.rvs-container a.rvs-nav-item.rvs-active:hover,
.rvs-green-highlight.rvs-container a.rvs-play-video:active,
.rvs-green-highlight.rvs-container a.rvs-play-video:focus,
.rvs-green-highlight.rvs-container a.rvs-play-video:hover {
    border-color: #02874A
}

.rvs-blue-highlight.rvs-container a.rvs-close:active,
.rvs-blue-highlight.rvs-container a.rvs-close:focus,
.rvs-blue-highlight.rvs-container a.rvs-close:hover,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active:active,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active:focus,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active:hover,
.rvs-blue-highlight.rvs-container a.rvs-play-video:active,
.rvs-blue-highlight.rvs-container a.rvs-play-video:focus,
.rvs-blue-highlight.rvs-container a.rvs-play-video:hover,
.rvs-blue-highlight.rvs-thumb-play .rvs-nav-container .rvs-video-active span.rvs-nav-item-thumb:before,
.rvs-blue-highlight.rvs-thumb-play .rvs-nav-container span.rvs-nav-item-thumb:hover:before {
    background-color: #0087be
}

.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active:active,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:active,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:focus,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:hover,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active:focus,
.rvs-blue-highlight.rvs-container a.rvs-nav-item.rvs-active:hover,
.rvs-blue-highlight.rvs-container a.rvs-play-video:active,
.rvs-blue-highlight.rvs-container a.rvs-play-video:focus,
.rvs-blue-highlight.rvs-container a.rvs-play-video:hover {
    border-color: #0087be
}

.rvs-orange-highlight.rvs-container a.rvs-close:active,
.rvs-orange-highlight.rvs-container a.rvs-close:focus,
.rvs-orange-highlight.rvs-container a.rvs-close:hover,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active:active,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active:focus,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active:hover,
.rvs-orange-highlight.rvs-container a.rvs-play-video:active,
.rvs-orange-highlight.rvs-container a.rvs-play-video:focus,
.rvs-orange-highlight.rvs-container a.rvs-play-video:hover,
.rvs-orange-highlight.rvs-thumb-play .rvs-nav-container .rvs-video-active span.rvs-nav-item-thumb:before,
.rvs-orange-highlight.rvs-thumb-play .rvs-nav-container span.rvs-nav-item-thumb:hover:before {
    background-color: #FF8E31
}

.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active:active,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:active,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:focus,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:hover,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active:focus,
.rvs-orange-highlight.rvs-container a.rvs-nav-item.rvs-active:hover,
.rvs-orange-highlight.rvs-container a.rvs-play-video:active,
.rvs-orange-highlight.rvs-container a.rvs-play-video:focus,
.rvs-orange-highlight.rvs-container a.rvs-play-video:hover {
    border-color: #FF8E31
}

.rvs-red-highlight.rvs-container a.rvs-close:active,
.rvs-red-highlight.rvs-container a.rvs-close:focus,
.rvs-red-highlight.rvs-container a.rvs-close:hover,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active:active,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active:focus,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active:hover,
.rvs-red-highlight.rvs-container a.rvs-play-video:active,
.rvs-red-highlight.rvs-container a.rvs-play-video:focus,
.rvs-red-highlight.rvs-container a.rvs-play-video:hover,
.rvs-red-highlight.rvs-thumb-play .rvs-nav-container .rvs-video-active span.rvs-nav-item-thumb:before,
.rvs-red-highlight.rvs-thumb-play .rvs-nav-container span.rvs-nav-item-thumb:hover:before {
    background-color: #F12B24
}

.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active:active,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:active,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:focus,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active:first-child:hover,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active:focus,
.rvs-red-highlight.rvs-container a.rvs-nav-item.rvs-active:hover,
.rvs-red-highlight.rvs-container a.rvs-play-video:active,
.rvs-red-highlight.rvs-container a.rvs-play-video:focus,
.rvs-red-highlight.rvs-container a.rvs-play-video:hover {
    border-color: #F12B24
}</style>
<style>.center_content</style>