<?php

// Local Database

use Google\Service\CloudAsset\Resource\V1;

define("DB_HOST",             "localhost");
define("DB_USER",             "root");
define("DB_PASSWORD",         "Emmagist@1994204");
define("DB_NAME",             "in_domino_farm_1");

// Online Database
// define("DB_HOST",              "https://www.db4free.net/");
// define("DB_USER",              "in_domino_farm_1");
// define("DB_PASSWORD",          "in_domino_farm_1");
// define("DB_NAME",              "in_domino_farm_1");

// Mailer
//SUPPORT
define("EMAIL",               "verify@sanmtosapp.com");
define("EMAIL_PASSWORD",      "Sanmtos204");

// Gateway
// PayStack
define("KEY",   "");

// Tables
define("TBL_ADMIN",                 "admins");
define("TBL_CATEGORY",              "category");
define("TBL_PRODUCT",               "products");
define("TBL_USERS",                 "users");
define("TBL_ORDER",                 "orders");
define("TBL_PAYMENTS_LOG",          "payments_log");
define("TBL_TRANSACTION_LOG",       "transaction_logs");
define("TBL_REGISTRATION_CODE",     "registration_code");
