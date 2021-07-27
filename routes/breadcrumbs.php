<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;


//===========================HOMEPAGE============================
Breadcrumbs::for('homepage', function (BreadcrumbTrail $trail) {
    $trail->push('Homepage', route('homepage.home'));
});

//Homepage > Home
Breadcrumbs::for('homepage_home', function (BreadcrumbTrail $trail) {
    $trail->parent('homepage');
    $trail->push('Home', route('homepage.home'));
});

//Homepage > Post Detail
Breadcrumbs::for('homepage_post', function (BreadcrumbTrail $trail, $title) {
    $trail->parent('homepage');
    $trail->push($title, '#');
});

//Homepage > Categories
Breadcrumbs::for('homepage_categories', function (BreadcrumbTrail $trail) {
    $trail->parent('homepage');
    $trail->push('Categories', route('homepage.categories'));
});

//Homepage > Categories > [title]
Breadcrumbs::for('homepage_post-category', function (BreadcrumbTrail $trail, $title) {
    $trail->parent('homepage');
    $trail->push('Categories', route('homepage.categories'));
    $trail->push($title, '#');
});

//Homepage > Tags
Breadcrumbs::for('homepage_tags', function (BreadcrumbTrail $trail) {
    $trail->parent('homepage');
    $trail->push('Tags', route('homepage.tags'));
});

//Homepage > Tags > [title]
Breadcrumbs::for('homepage_post-tags', function (BreadcrumbTrail $trail, $title) {
    $trail->parent('homepage');
    $trail->push('Tags', route('homepage.tags'));
    $trail->push($title, '#');
});

//Homepage > Search
Breadcrumbs::for('homepage_search', function (BreadcrumbTrail $trail, $keyword) {
    $trail->parent('homepage');
    $trail->push('Search', route('homepage.search-post'));
    $trail->push($keyword, route('homepage.search-post'));
});

// ==========================DASHBOARD===========================
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard.index'));
});

//Dashboard > Home
Breadcrumbs::for('dashboard_home', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Home', '');
});

//Dashboard > Categories
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Categories', route('categories.index'));
});

//Dashboard > Categories > Add
Breadcrumbs::for('add_category', function (BreadcrumbTrail $trail) {
    $trail->parent('categories');
    $trail->push('Add', route('categories.create'));
});

//Dashboard > Categories > Edit
Breadcrumbs::for('edit_category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('categories');
    $trail->push('Edit', route('categories.edit', ['category' => $category]));
});

//Dashboard > Categories > Edit > [title]
Breadcrumbs::for('edit_category_title', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('edit_category', $category);
    $trail->push($category->title, route('categories.edit', ['category' => $category]));
});

//Dashboard > Categories > Detail
Breadcrumbs::for('detail_category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('categories');
    $trail->push('Detail', route('categories.show', ['category' => $category]));
});

//Dashboard > Categories > detail > [title]
Breadcrumbs::for('detail_category_title', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('detail_category', $category);
    $trail->push($category->title, route('categories.show', ['category' => $category]));
});

//Dashboard > Tags
Breadcrumbs::for('tags', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Tags', route('tags.index'));
});

//Dashboard > Tags > Add
Breadcrumbs::for('add_tag', function (BreadcrumbTrail $trail) {
    $trail->parent('tags');
    $trail->push('Add', route('tags.create'));
});

//Dashboard > Tags > Edit
Breadcrumbs::for('edit_tag', function (BreadcrumbTrail $trail, $tag) {
    $trail->parent('tags');
    $trail->push('Edit', route('tags.edit', ['tag' => $tag]));
    $trail->push($tag->title, route('tags.edit',  ['tag' => $tag]));
});

//Dashboard > Posts
Breadcrumbs::for('posts', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Posts', route('posts.index'));
});

//Dashboard > Post > Add
Breadcrumbs::for('add_post', function (BreadcrumbTrail $trail) {
    $trail->parent('posts');
    $trail->push('Add', route('posts.create'));
});

//Dashboard > Post > Detail > [title]
Breadcrumbs::for('detail_post', function (BreadcrumbTrail $trail, $post) {
    $trail->parent('posts');
    $trail->push('Detail', route('posts.show', ['post' => $post]));
    $trail->push($post->title, route('posts.show', ['post' => $post]));
});

//Dashboard > Post > Edit > [title]
Breadcrumbs::for('edit_post', function (BreadcrumbTrail $trail, $post) {
    $trail->parent('posts');
    $trail->push('Edit', route('posts.edit', ['post' => $post]));
    $trail->push($post->title, route('posts.edit', ['post' => $post]));
});

//Dashboard > Filemanager
Breadcrumbs::for('file_manager', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('File Manager', route('filemanager.index'));
});

//===========================ROLES============================

//Dashboard > Roles
Breadcrumbs::for('roles', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Roles', route('roles.index'));
});

//Dashboard > Roles > Create
Breadcrumbs::for('roles_add', function (BreadcrumbTrail $trail) {
    $trail->parent('roles');
    $trail->push('Add', route('roles.create'));
});

//Dashboard > Roles > Detail
Breadcrumbs::for('roles_detail', function (BreadcrumbTrail $trail, $role) {
    $trail->parent('roles');
    $trail->push('Detail', route('roles.show', ['role' => $role]));
    $trail->push($role->name, route('roles.show', ['role' => $role]));
});

//Dashboard > Roles > Edit
Breadcrumbs::for('roles_edit', function (BreadcrumbTrail $trail, $role) {
    $trail->parent('roles');
    $trail->push('Edit', route('roles.edit', ['role' => $role]));
    $trail->push($role->name, route('roles.edit', ['role' => $role]));
});

//===========================USERS============================

//Dashboard > Users
Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('users', route('users.index'));
});

//Dashboard > Users > Add
Breadcrumbs::for('add_users', function (BreadcrumbTrail $trail) {
    $trail->parent('users');
    $trail->push('Add', route('users.create'));
});

//Dashboard > Users > Edit
Breadcrumbs::for('edit_users', function (BreadcrumbTrail $trail, $user) {
    $trail->parent('users');
    $trail->push('Edit', route('users.edit', ['user' => $user]));
    $trail->push($user->name, route('users.edit', ['user' => $user]));
});
