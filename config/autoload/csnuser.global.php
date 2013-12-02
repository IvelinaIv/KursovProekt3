<?php
/**
 * CsnUser Configuration
 *
 * If you have a ./config/autoload/ directory set up for your project, you can
 * drop this config file in it and change the values as you wish.
 */
$settings = array(
    /**
     * Login Redirect Route
     *
     * Upon successful login the user will be redirected to the entered route
     *
     * Default value: 'csnuser'
     * Accepted values: A valid route name within your application
     *
     */
    'login_redirect_route' => 'user',

    /**
     * Logout Redirect Route
     *
     * Upon logging out the user will be redirected to the enterd route
     *
     * Default value: 'csnuser/login'
     * Accepted values: A valid route name within your application
     */
    'logout_redirect_route' => 'login',

);

/**
 * You do not need to edit below this line
 */
return array(
    'csnuser' => $settings,
);
