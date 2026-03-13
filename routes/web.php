<?php

use Illuminate\Support\Facades\Route;

// Home
Route::view('/', 'pages.home')->name('home');

// About
Route::view('/about',            'pages.about.index')->name('about.index');
Route::view('/about/leadership', 'pages.about.leadership')->name('about.leadership');
Route::view('/about/mission',    'pages.about.mission')->name('about.mission');

// Businesses
Route::view('/businesses',                  'pages.businesses.index')->name('businesses.index');
Route::view('/businesses/aluminium',        'pages.businesses.aluminium')->name('businesses.aluminium');
Route::view('/businesses/critical-metal',   'pages.businesses.critical-metal')->name('businesses.critical-metal');
Route::view('/businesses/mining',           'pages.businesses.mining')->name('businesses.mining');
Route::view('/businesses/datacentre',       'pages.businesses.datacentre')->name('businesses.datacentre');
Route::view('/businesses/telecom',          'pages.businesses.telecom')->name('businesses.telecom');

// ESG
Route::view('/esg',                  'pages.esg.index')->name('esg.index');
Route::view('/esg/sustainability',   'pages.esg.sustainability')->name('esg.sustainability');
Route::view('/esg/sherises',         'pages.esg.sherises')->name('esg.sherises');
Route::view('/esg/safety',           'pages.esg.safety')->name('esg.safety');

// Affiliates
Route::view('/affiliates', 'pages.affiliates.index')->name('affiliates');

// Careers
Route::view('/careers',              'pages.careers.index')->name('careers.index');
Route::view('/careers/life',         'pages.careers.life')->name('careers.life');
Route::view('/careers/internships',  'pages.careers.internships')->name('careers.internships');

// Media
Route::view('/media',          'pages.media.index')->name('media.index');
Route::view('/media/press',    'pages.media.press')->name('media.press');
Route::view('/media/gallery',  'pages.media.gallery')->name('media.gallery');

// Single pages
Route::view('/investor-relations', 'pages.investor-relations.index')->name('investor-relations');
Route::view('/contact',            'pages.contact.index')->name('contact');
Route::view('/search',             'pages.search.index')->name('search');
Route::view('/privacy',            'pages.legal.privacy')->name('privacy');
Route::view('/terms',              'pages.legal.terms')->name('terms');