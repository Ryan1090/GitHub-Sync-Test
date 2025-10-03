<?php

/**
 * Plugin Name: Github Sync Test
 * Description: test wordpress <- github sync works goog
 * Author: Ryan Marrington
 * GitHub Plugin URI: Ryan1090/GitHub-Sync-Test
 * Primary Branch: main
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