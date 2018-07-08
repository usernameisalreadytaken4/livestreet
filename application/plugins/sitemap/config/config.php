<?php

    $config = array();

    $config['$root$']['router']['page']['sitemap'] = 'PluginSitemap_ActionSitemap';

    $config['$root$']['router']['uri']['/^sitemap\.xml/i']             = 'sitemap';
    $config['$root$']['router']['uri']['/^sitemap_(\w+)_(\d+)\.xml/i'] = 'sitemap/sitemap/\\1/\\2';

    $config['per_page'] = array(
        'objects' => 1000,
        'users'   => 1000,
    );

    $config['general'] = array(
        'mainpage' => array(
            'priority'   => '1',
            'changefreq' => 'hourly'
        ),
    );

    $config['users'] = array(
        'cache_lifetime' => 60 * 60 * 1,
        'profile' => array(
            'priority'   => '0.5',
            'changefreq' => 'weekly'
        ),
        'topics' => array(
            'priority'   => '0.8',
            'changefreq' => 'weekly'
        ),
        'comments' => array(
            'priority'   => '0.7',
            'changefreq' => 'weekly'
        ),
    );

    $config['topics'] = array(
        'cache_lifetime' => 60 * 30,
        'priority'       => '0.9',
        'changefreq'     => 'weekly'
    );

    $config['blogs'] = array (
        'cache_lifetime' => 60 * 60 * 8,
        'priority'       => '0.8',
        'changefreq'     => 'weekly'
    );

    return $config;
