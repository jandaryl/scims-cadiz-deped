<?php

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator;

Breadcrumbs::register('home', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->push(trans('labels.frontend.titles.home'), route('home'));
});

Breadcrumbs::register('schools', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('labels.frontend.titles.schools'), route('schools'));
});

Breadcrumbs::register('categories', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('labels.frontend.titles.categories'), route('categories'));
});

Breadcrumbs::register('blog.index', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('labels.frontend.titles.blog'), route('blog.index'));
});

Breadcrumbs::register('blog.show', function (BreadcrumbsGenerator $breadcrumbs, Post $post) {
    $breadcrumbs->parent('blog.index');
    $breadcrumbs->push($post->title, route('blog.show', $post->slug));
});

Breadcrumbs::register('blog.tag', function (BreadcrumbsGenerator $breadcrumbs, Tag $tag) {
    if (strpos($tag->name, 'School') === false && strpos($tag->name, 'Training') === false) {
        $breadcrumbs->parent('categories');
    } else {
        $breadcrumbs->parent('schools');
    }
    $breadcrumbs->push($tag->name, route('blog.tag', $tag->slug));
});

Breadcrumbs::register('blog.school', function (BreadcrumbsGenerator $breadcrumbs, Tag $tag) {
    if (strpos($tag->name, 'School') === false && strpos($tag->name, 'Training') === false) {
        $breadcrumbs->parent('categories');
    } else {
        $breadcrumbs->parent('schools');
    }
    $breadcrumbs->push($tag->name, route('blog.tag', $tag->slug));
});

Breadcrumbs::register('blog.owner', function (BreadcrumbsGenerator $breadcrumbs, User $user) {
    $breadcrumbs->parent('blog.index');
    $breadcrumbs->push($user->name, route('blog.owner', $user->slug));
});

Breadcrumbs::register('contact', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('labels.frontend.titles.contact'), route('contact'));
});

Breadcrumbs::register('contact-sent', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->parent('contact');
    $breadcrumbs->push(trans('labels.frontend.titles.message_sent'), route('contact-sent'));
});

Breadcrumbs::register('user.account', function (BreadcrumbsGenerator $breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('labels.user.titles.account'), route('user.account'));
});
