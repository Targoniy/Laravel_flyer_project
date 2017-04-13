<?php

        function a($p) {
            return 'Hello ' . $p();
        }

        echo a(function() {
            return 'World';
        });