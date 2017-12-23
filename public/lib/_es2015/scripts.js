//--------------------- base ---------------------//

//Babelで変換したコードを利用する場合に必要なポリフィル
import "babel-polyfill";

//pointerEventsを利用する場合に必要なポリフィル
import 'pepjs';

//IntersectionObserverを利用する場合に必要なポリフィル
import 'intersection-observer';

//Web Animations APIをフルで利用する場合に必要なポリフィル
import 'web-animations-js';

//jqueryをグローバル化する場合は、以下をコメントアウトを解除
//window.$ = window.jQuery = $;

//---------------------slider関連

import swiper_config from './base/_swiper/__config.js';
swiper_config();

//---------------------scroll-animation関連

import inview_config from './base/_inview/__config.js';
inview_config();

//---------------------ライトボックス・モーダル関連

import magPopup_config from  "./base/_mag-popup/__config.js";
if($('.mfp-btn').length){
  magPopup_config();
};

import colorbox_config from  "./base/_colorbox/__config.js";
colorbox_config() ;

//---------------------スムーズスクロール関連

import smoothScroll_config from  "./base/_smooth-scroll/__config.js";
smoothScroll_config();

//---------------------画像遅延読込み関連

import layzr_config from './base/_layzr/__config.js';
layzr_config();

//---------------------プログレッシブフレームワーク

import vue_config from './base/_vue/__config.js';
if($('body.vue').length){
  vue_config();
};

//---------------------SVGコントロール

import snapsvg_config from './base/_snapsvg/__config.js';
if($('body.snapsvg').length){
  snapsvg_config();
};

//---------------------その他

import masonry_config from './base/_masonry/__config.js';
//masonry_config();

import fullpage_config from './base/_fullpage/__config.js';
if($('body._fullpage').length){
  fullpage_config();
};

import csv_config from './base/_csv/__config.js';
if($('body._csv').length){
  csv_config();
};

//googlemap
import loadGoogleMapsApi from 'load-google-maps-api-2';
import * as gmap_setting from './base/_googlemap/__config.js';
if($('body._googlemap').length){
  loadGoogleMapsApi.key = 'AIzaSyAwM3YlNU_nPJaQyg_wPkiDsdkvBOEQVmU';//APIキー入力
  loadGoogleMapsApi().then(function (googleMaps) {
    gmap_setting.sample1();//googlemapのセッティング
  }).catch(function (err) {console.error(err);});
};

import drawer_config from './base/_drawer/__config.js';
if($('body._drawer').length){
  drawer_config();
};

import * as interSO_config from './base/_intersection-observer/__config.js';
if($('body._intersection-observer').length){
  interSO_config.base();
  interSO_config.sample();
};

import * as webAnimations_config from './base/_web-animations/__config.js';
import * as animations_config from './base/_web-animations/__sample.js';
if($('body._web-animations').length){
  webAnimations_config.caniuse();
  webAnimations_config.caniuse_polyfill();
  webAnimations_config.sample1();
  animations_config.sampleX();
  animations_config.sampleY();
  animations_config.sampleXY();
  animations_config.sampleR();
  animations_config.sampleTest()
};

import * as mutationObserver_config from './base/_mutation-observer/__config.js';
if($('body._mutation-observer').length){
  mutationObserver_config.caniuse();
  mutationObserver_config.caniuse_polyfill();
  mutationObserver_config.sample1();
  mutationObserver_config.sample2();
};

//--------------------- common ---------------------//

import menubarFn from './common/_header/__menubar.js';
menubarFn();
import sholderMenubarFn from './common/_sholder/__menubar.js';
sholderMenubarFn();

//import gnavDeepFn from './common/_header/__gnav-deep.js';
//gnavDeepFn();

//タッチホバーイベント
import touchevents_config from './common/_unit/_touch-events/__config.js';
touchevents_config();

//ページトップへボタンのフェード
//import pagetop_config from './common/_unit/_pagetop/__config.js';
//pagetop_config();

//別ページでのポップアップ
import popwin_config from './common/_unit/_popup-window/__config.js';
popwin_config();



//--------------------- page ---------------------//

//home
import homeConts_config from './page/_home/__home-conts.js';
if($('body.home').length){
  homeConts_config();
  console.log('test');
}

if($('body._etc').length){
  mainV_config();
};

//PointerEventsのサンプル
import pointerEvents_config from './page/_pointer-events/__config.js';
if($('body._pointer-events').length){
  pointerEvents_config();
};
