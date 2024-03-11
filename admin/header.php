<!--
# Copyright (C) 2013-2015 Chaoyi Zha
# Polr is an open-source project licensed under the GPL.
# The above copyright notice and the following license are applicable to
# the entire project, unless explicitly defined otherwise.
# http://github.com/cydrobolt/polr
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or (at
# your option) any later version.
# See http://www.gnu.org/copyleft/gpl.html  for the full text of the
# license.
#
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php require_once('../config.php'); echo htmlspecialchars($wsn, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo !$theme ? '../css/bootstrap.min.css' : htmlspecialchars($theme, ENT_QUOTES, 'UTF-8'); ?>"/>
    <link rel="stylesheet" href="../css/main.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.1/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" />
</head>
<body style="padding-top:60px">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="../index.php"><?php echo htmlspecialchars($wsn, ENT_QUOTES, 'UTF-8'); ?></a>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="../about.php">About</a></li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <?php require_once('../lib-auth.php');
                        $polrauth = new polrauth();
                        $polrauth->headblock(); ?>
                        <?php require_once('../config.php'); if ($regtype != 'none') { echo '<li class="nav-item"><a class="nav-link" href="../register.php">Sign Up</a></li>'; } ?>
                        <!-- Login Dropdown -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sign In</a>
                            <div class="dropdown-menu dropdown-menu-end" style="padding: 15px;">
                                <form action="../handle-login.php" method="post" accept-charset="UTF-8">
                                    <div class="mb-3">
                                        <label for="user_username" class="form-label">Username</label>
                                        <input id="user_username" type="text" name="username" placeholder="Username" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="user_password" class="form-label">Password</label>
                                        <input id="user_password" type="password" name="password" placeholder="Password" class="form-control">
                                    </div>
                                    <button type="submit" name="login" class="btn btn-success w-100">Sign In</button>
                                </form>
                            </div>
                        </li>
                        <?php $polrauth->headendblock(true); ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="jumbotron" style="text-align:center; padding-top:80px; background-color: rgba(0,0,0,0);">
