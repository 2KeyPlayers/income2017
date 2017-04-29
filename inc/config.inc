<?php
define ('SERVERNAME', '???');
define ('USERNAME', '???');
define ('PASSWORD', '???');
define ('DBNAME', '???');

define ('VUB_ID', 12345678);
define ('VUB_KEY', '???');

define ('FROM', 'income2017@saske.sk');
define ('SUBJECT', 'Registration @ INCOME2017');
define ('MESSAGE_PART_1', "\r\n\r\nThank you for your registration! Please use the payment option on the INCOME2017 website to pay the registration fee.");
define ('MESSAGE_PART_2', "\r\n\r\nYour payment ID is: ");
define ('MESSAGE_PART_3', "\r\nYour password is: ");
define ('MESSAGE_PART_4', "\r\nAmount to pay: ");
define ('MESSAGE_PART_PRESENTATION_1', "\r\n\r\nThe title of your ");
define ('MESSAGE_PART_PRESENTATION_2', " presentation is: ");
define ('MESSAGE_PART_ABSTRACT', "\r\nPlease submit your abstract by sending it to income2017@saske.sk until 30.04.2017.");
define ('MESSAGE_PART_5', "\r\n\r\nWe're looking forward to meeting you in Košice.\r\n\r\nKind regards,\r\nOrganizers of INCOME2017");

define ('PAYMENT_SUBJECT', 'Payment @ INCOME2017');
define ('PAYMENT_OK_PART_1', "\r\n\r\nThe payment with ID ");
define ('PAYMENT_OK_PART_2', " was successful. Thank you!");
define ('PAYMENT_OK_PART_3', "\r\n\r\nWe're looking forward to meeting you in Košice.\r\n\r\nKind regards,\r\nOrganizers of INCOME2017");
define ('PAYMENT_ERROR_PART_1', "The payment with ID ");
define ('PAYMENT_ERROR_PART_2', " was not successful!");
define ('PAYMENT_ERROR_PART_3', "\r\n\r\nKind regards,\r\nOrganizers of INCOME2017");

define ('REQUIRED', 'Please fill in all required fields.');
define ('INVALID_TYPE', 'Invalid registration type. Only Regular-1 to Regular-5 and Student are allowed.');
define ('INVALID_EMAIL', 'Invalid e-mail address. Please use a valid e-mail address (email@address.com).');
define ('INVALID_PHONE', 'Invalid phone number. Please use a valid format (+42123456789).');
define ('AGREEMENT', 'Your agreement is required.');
define ('CAPTCHA_FAILED', 'Robot verification failed, please try again.');
define ('CAPTCHA_NOT_PRESENT', 'Please click on the reCAPTCHA box.');
define ('EMAIL_ALREADY_REGISTERED', 'This e-mail is already registered.');
define ('SUCCESS', 'Registration successful. Please check your e-mail for further instructions. Thank you!');

define ('PAYMENTID_REQUIRED', 'Please enter your Payment ID.');
define ('PASSWORD_REQUIRED', 'Please enter your password.');
define ('PAYMENTID_NOT_RECOGNIZED', 'Payment ID not recognized.');
define ('WRONG_PASSWORD', 'Wrong password.');
define ('PAYMENT_ALREADY_MADE', 'Payment has already been made for this Payment ID.');
?>
