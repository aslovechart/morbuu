<?php

    #AUTOGENERATED BY HYBRIDAUTH 2.1.1-dev INSTALLER - Sunday 6th of October 2013 07:17:26 PM

    /* !
     * HybridAuth
     * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
     * (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
     */

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------
//
//return 
//	array(
//		"base_url" => "http://smiletarvel.com/site/oauth", 
//
//		"providers" => array ( 
//			// openid providers
//			"OpenID" => array (
//				"enabled" => true
//			),
//
//			"AOL"  => array ( 
//				"enabled" => true 
//			),
//
//			"Yahoo" => array ( 
//				"enabled" => true,
//				"keys"    => array ( "id" => "", "secret" => "" )
//			),
//
//			"Google" => array ( 
//				"enabled" => true,
//				"keys"    => array ( "id" => "405335998304.apps.googleusercontent.com", "secret" => "TAeK_B5gul_qXK8DhUQ-grA_" )
//			),
//
//			"Facebook" => array ( 
//				"enabled" => true,
//				"keys"    => array ( "id" => "", "secret" => "" )
//			),
//
//			"Twitter" => array ( 
//				"enabled" => true,
//				"keys"    => array ( "key" => "", "secret" => "" ) 
//			),
//
//			// windows live
//			"Live" => array ( 
//				"enabled" => true,
//				"keys"    => array ( "id" => "", "secret" => "" ) 
//			),
//
//			"MySpace" => array ( 
//				"enabled" => true,
//				"keys"    => array ( "key" => "", "secret" => "" ) 
//			),
//
//			"LinkedIn" => array ( 
//				"enabled" => true,
//				"keys"    => array ( "key" => "", "secret" => "" ) 
//			),
//
//			"Foursquare" => array (
//				"enabled" => true,
//				"keys"    => array ( "id" => "", "secret" => "" ) 
//			),
//		),
//
//		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
//		"debug_mode" => false,
//
//		"debug_file" => ""
//	);


    return
            array(
                    "base_url" => "http://" . $_SERVER['SERVER_NAME'] . "/site/oauth",
                    "providers" => array(
                            // openid providers


                            "Google" => array(
                                    "enabled" => true,
                                    "keys" => array("id" => "405335998304-q48lgf9ala62su1dd3ksnonc3tg29148.apps.googleusercontent.com", "secret" => "KHYNiqIIBo3P9U8ah2mVpoRO")
                            ),
                            "Facebook" => array(
                                    "enabled" => true,
                                    "keys" => array("id" => "1421110408116945", "secret" => "6ea4f6677d529c37e11f89529f5c4e9f")
                            ),
//
//			// windows live
//			"Live" => array ( 
//				"enabled" => true,
//				"keys"    => array ( "id" => "", "secret" => "" ) 
//			),
//
//			"MySpace" => array ( 
//				"enabled" => true,
//				"keys"    => array ( "key" => "", "secret" => "" ) 
//			),
//
//			"LinkedIn" => array ( 
//				"enabled" => true,
//				"keys"    => array ( "key" => "", "secret" => "" ) 
//			),
//
//			"Foursquare" => array (
//				"enabled" => true,
//				"keys"    => array ( "id" => "", "secret" => "" ) 
//			),
                    ),
                    // if you want to enable logging, set "debug_mode' to true  then provide a writable file by the web server on "debug_file"
                    "debug_mode" => false,
                    "debug_file" => ""
    );

    