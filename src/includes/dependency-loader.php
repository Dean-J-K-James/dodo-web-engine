<?php

#
foreach (json_decode($_SESSION['brand']['dependencies'], true) as $dependency) { require 'includes/' . $dependency . '.php'; }
