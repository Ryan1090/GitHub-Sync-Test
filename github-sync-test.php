<?php

/**
 * Plugin Name: Github Sync Test
 * Description: test wordpress <- github sync
 * Version 1.0.0
 * Author: Ryan Marrington
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