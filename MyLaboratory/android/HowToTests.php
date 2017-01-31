<?php

/**
 * Created by PhpStorm.
 * User: buddyarifin
 * Date: 9/17/16
 * Time: 10:50 AM
 */

define("APP_PATH", realpath(dirname(__FILE__).'/../../Resources/app-debug-7.0.0.1.apk'));
if(!APP_PATH) {
    die("Woww, whyyyyyy??");
}

require_once('PHPUnit/Extensions/AppiumTestCase.php');

class HowToTests extends PHPUnit_Extensions_AppiumTestCase
{
    public static $capabilities = array(
            array(
                'local' => true,
                'port' => 4444,
                'browserName' => '',
                'desiredCapabilities' => array(
                    'device' => 'Android',
                    'deviceName' => 'docker_emulator',
                    'udid' => 'emulator-5554',
                    'platformName' => 'Android',
                    'appPackage' => 'com.app.tokobagus.betterb',
                    'appActivity' => 'sea.olxsulley.presentation.view.entrance.OlxIdEntranceActivity',
                    'app' => APP_PATH
                )
            )
        );


    public function testSomething() {
        $this->waitUntil(function() {
            $this->byId("com.app.tokobagus.betterb:id/entrance_btnFb");
            return true;
        }, 200000000);
    }
}