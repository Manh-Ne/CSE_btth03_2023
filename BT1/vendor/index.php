<?php
require_once("../Email/EmailSender.php");
require_once("../Email/MyEmailServer.php");
 $emailServer = new MyEmailServer();
 $emailSender = new EmailSender($emailServer);
 $emailSender->send("manh031002@gmail.com", "Test Email", "Nguyễn Quang Mạnh-62TH");
 ?>