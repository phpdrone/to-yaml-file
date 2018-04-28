<?php
require __DIR__.'/vendor/autoload.php';

/**
 * Get our build settings from drone
 */
$build = new \DronePluginSdk\Build();

/**
 * Dump yaml in destination file
 */
file_put_contents(
    $build->getPluginParameter('file'),
    \Symfony\Component\Yaml\Yaml::dump(
        // object to array
        json_decode(json_encode($build->getPluginParameter('yaml')),true)
    )
);

echo filesize($build->getPluginParameter('file'))." bytes written to ".$build->getPluginParameter('file').PHP_EOL;
