<?php
/**
 * Authentication Language Lines
 * The following language lines are used during authentication for various
 * messages that we need to display to the user.
 */
return [

    'failed' => 'Nid yw\'r manylion hyn yn cyfateb i\'n cofnodion.',
    'throttle' => 'Gormod o ymdrechion mewngofnodi. Rhowch gynnig arall arni o gwmpas :seconds eiliadau.',

    // Login & Register
    'sign_up' => 'Cofrestru',
    'log_in' => 'Mewngofnodi',
    'log_in_with' => 'Mewngofnodi efo :socialDriver',
    'sign_up_with' => 'Cofrestru efo :socialDriver',
    'logout' => 'Allgofnodi',

    'name' => 'Enw',
    'username' => 'Enw defnyddiwr',
    'email' => 'Ebost',
    'password' => 'Cyfrinair',
    'password_confirm' => 'Cadarnhau cyfrinair',
    'password_hint' => 'Rhaid bod o leiaf 8 nod',
    'forgot_password' => 'Wedi anghofio cyfrinair?',
    'remember_me' => 'Cofiwch fi',
    'ldap_email_hint' => 'Rhowch e-bost i\'w ddefnyddio ar gyfer y cyfrif hwn.',
    'create_account' => 'Creu cyfrif',
    'already_have_account' => 'Oes gennych chi gyfrif yn barod?',
    'dont_have_account' => 'Dim cyfrif?',
    'social_login' => 'Mewngofnodi cymdeithasol',
    'social_registration' => 'Cofrestru cymdeithasol',
    'social_registration_text' => 'Cofrestru a mewngofnodi gan ddefnyddio dyfais arall.',

    'register_thanks' => 'Diolch am cofrestru!',
    'register_confirm' => 'Gwiriwch eich e-bost a chliciwch ar y botwm cadarnhau i gael mynediad i: appName.',
    'registrations_disabled' => 'Mae cofrestriadau wedi\'u hanalluogi ar hyn o bryd',
    'registration_email_domain_invalid' => 'Nid oes gan y parth e-bost hwnnw fynediad i\'r rhaglen hon',
    'register_success' => 'Diolch am arwyddo! Rydych bellach wedi cofrestru ac wedi mewngofnodi.',

    // Login auto-initiation
    'auto_init_starting' => 'Wrthi\'n ceisio mewngofnodi',
    'auto_init_starting_desc' => 'We\'re contacting your authentication system to start the login process. If there\'s no progress after 5 seconds you can try clicking the link below.',
    'auto_init_start_link' => 'Parhau gyda dilysu',

    // Password Reset
    'reset_password' => 'Ailosod cyfrinair',
    'reset_password_send_instructions' => 'Rhowch eich e-bost isod ac anfonir e-bost atoch gyda dolen ailosod cyfrinair.',
    'reset_password_send_button' => 'Anfon Dolen Ailosod',
    'reset_password_sent' => 'A password reset link will be sent to :email if that email address is found in the system.',
    'reset_password_success' => 'Your password has been successfully reset.',
    'email_reset_subject' => 'Ailosod eich gair pass :appName',
    'email_reset_text' => 'You are receiving this email because we received a password reset request for your account.',
    'email_reset_not_requested' => 'Os nad oeddwch chi\'n ceisio ailosod eich gair pass, does dim byd arall i wneud.',

    // Email Confirmation
    'email_confirm_subject' => 'Cadarnhewch eich e-bost chi a :appName',
    'email_confirm_greeting' => 'Diolch am ymuno â :appName!',
    'email_confirm_text' => 'Os gwelwch yn dda cadarnhewch eich e-bost chi gan clicio ar y botwm isod:',
    'email_confirm_action' => 'Cadarnhau E-bost',
    'email_confirm_send_error' => 'Email confirmation required but the system could not send the email. Contact the admin to ensure email is set up correctly.',
    'email_confirm_success' => 'Your email has been confirmed! You should now be able to login using this email address.',
    'email_confirm_resent' => 'Confirmation email resent, Please check your inbox.',
    'email_confirm_thanks' => 'Diolch am gadarnhau!',
    'email_confirm_thanks_desc' => 'Please wait a moment while your confirmation is handled. If you are not redirected after 3 seconds press the "Continue" link below to proceed.',

    'email_not_confirmed' => 'Cyfeiriad E-bost heb ei Gadarnhau',
    'email_not_confirmed_text' => 'Dyw eich cyfeiriad e-bost chi ddim wedi cael ei gadarnhau eto.',
    'email_not_confirmed_click_link' => 'Please click the link in the email that was sent shortly after you registered.',
    'email_not_confirmed_resend' => 'If you cannot find the email you can re-send the confirmation email by submitting the form below.',
    'email_not_confirmed_resend_button' => 'Resend Confirmation Email',

    // User Invite
    'user_invite_email_subject' => 'You have been invited to join :appName!',
    'user_invite_email_greeting' => 'Mae cyfrif wedi cae ei greu i chi ar :appName.',
    'user_invite_email_text' => 'Click the button below to set an account password and gain access:',
    'user_invite_email_action' => 'Set Account Password',
    'user_invite_page_welcome' => 'Croeso i :appName!',
    'user_invite_page_text' => 'To finalise your account and gain access you need to set a password which will be used to log-in to :appName on future visits.',
    'user_invite_page_confirm_button' => 'Cadarnhau cyfrinair',
    'user_invite_success_login' => 'Password set, you should now be able to login using your set password to access :appName!',

    // Multi-factor Authentication
    'mfa_setup' => 'Setup Multi-Factor Authentication',
    'mfa_setup_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'mfa_setup_configured' => 'Wedi\'i ail-ffurfweddu\'n barod',
    'mfa_setup_reconfigure' => 'Ail-ffurfweddu',
    'mfa_setup_remove_confirmation' => 'Are you sure you want to remove this multi-factor authentication method?',
    'mfa_setup_action' => 'Gosodiad',
    'mfa_backup_codes_usage_limit_warning' => 'You have less than 5 backup codes remaining, Please generate and store a new set before you run out of codes to prevent being locked out of your account.',
    'mfa_option_totp_title' => 'Ap Ffôn Symudol',
    'mfa_option_totp_desc' => 'To use multi-factor authentication you\'ll need a mobile application that supports TOTP such as Google Authenticator, Authy or Microsoft Authenticator.',
    'mfa_option_backup_codes_title' => 'Codau wrth Gefn',
    'mfa_option_backup_codes_desc' => 'Generates a set of one-time-use backup codes which you\'ll enter on login to verify your identity. Make sure to store these in a safe & secure place.',
    'mfa_gen_confirm_and_enable' => 'Confirm and Enable',
    'mfa_gen_backup_codes_title' => 'Gosodiad Codau wrth Gefn',
    'mfa_gen_backup_codes_desc' => 'Store the below list of codes in a safe place. When accessing the system you\'ll be able to use one of the codes as a second authentication mechanism.',
    'mfa_gen_backup_codes_download' => 'Llwytho Codau i Lawr',
    'mfa_gen_backup_codes_usage_warning' => 'Each code can only be used once',
    'mfa_gen_totp_title' => 'Mobile App Setup',
    'mfa_gen_totp_desc' => 'To use multi-factor authentication you\'ll need a mobile application that supports TOTP such as Google Authenticator, Authy or Microsoft Authenticator.',
    'mfa_gen_totp_scan' => 'Scan the QR code below using your preferred authentication app to get started.',
    'mfa_gen_totp_verify_setup' => 'Verify Setup',
    'mfa_gen_totp_verify_setup_desc' => 'Verify that all is working by entering a code, generated within your authentication app, in the input box below:',
    'mfa_gen_totp_provide_code_here' => 'Provide your app generated code here',
    'mfa_verify_access' => 'Gwirio Mynediad',
    'mfa_verify_access_desc' => 'Your user account requires you to confirm your identity via an additional level of verification before you\'re granted access. Verify using one of your configured methods to continue.',
    'mfa_verify_no_methods' => 'No Methods Configured',
    'mfa_verify_no_methods_desc' => 'No multi-factor authentication methods could be found for your account. You\'ll need to set up at least one method before you gain access.',
    'mfa_verify_use_totp' => 'Gwirio gan ap ffôn',
    'mfa_verify_use_backup_codes' => 'Gwirio gan god wrth gefn',
    'mfa_verify_backup_code' => 'Cod wrth Gefn',
    'mfa_verify_backup_code_desc' => 'Enter one of your remaining backup codes below:',
    'mfa_verify_backup_code_enter_here' => 'Cofnodi cod wrth gefn yma',
    'mfa_verify_totp_desc' => 'Enter the code, generated using your mobile app, below:',
    'mfa_setup_login_notification' => 'Multi-factor method configured, Please now login again using the configured method.',
];
