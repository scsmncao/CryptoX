<?php
    function generateCookie() {
        return sha1(rand(0, getrandmax()));
    }
    function getCookie() {
    }