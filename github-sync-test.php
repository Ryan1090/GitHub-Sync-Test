<?php

/**
 * Plugin Name: Github Sync Test
 * Description: test wordpress <- github sync works
 * Version 1.0.0
 */


if (!defined('ABSPATH')) die('no');

if (!class_exists("GithubSyncTest")) {

class GithubSyncTest {

    public function init(): void {

    }
}

$githubSyncTest = new GithubSyncTest();
$githubSyncTest->init();

}

?>