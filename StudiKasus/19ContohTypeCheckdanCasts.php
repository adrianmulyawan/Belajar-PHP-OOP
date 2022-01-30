<?php

require_once "data/Programmer.php";

sayHelloProgrammer(new Programmer("Adrian"));
# Hello, nama saya Adrian
# Adrian adalah seorang Fullstack Developer

sayHelloProgrammer(new BackendProgrammer("Hakaman"));
# Hello, nama saya Hakaman
# Hakaman adalah seorang Backend Developer

sayHelloProgrammer(new FrontendProgrammer("Irfan"));
# Hello, nama saya Irfan
# Irfan adalah seorang Frontend Developer