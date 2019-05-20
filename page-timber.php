<?php

$context = Timber::context();
$timber_post = new Timber\Post();
$context['post'] = $timber_post;

$context['info_home'] = new Timber\Post(7);

Timber::render( array( 'page.twig' ), $context );