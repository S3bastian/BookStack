<?php

/**
 * Third party service configuration options.
 *
 * Changes to these config files are not supported by BookStack and may break upon updates.
 * Configuration should be altered via the `.env` file or environment variables.
 * Do not edit this file unless you're happy to maintain any changes yourself.
 */

return [

    // Single option to disable non-auth external services such as Gravatar and Draw.io
    'disable_services' => env('DISABLE_EXTERNAL_SERVICES', false),

    // Draw.io integration active
    'drawio' => env('DRAWIO', !env('DISABLE_EXTERNAL_SERVICES', false)),

    // URL for fetching avatars
    'avatar_url' => env('AVATAR_URL', ''),

    // Callback URL for social authentication methods
    'callback_url' => env('APP_URL', false),

    'github'   => [
        'client_id'     => env('GITHUB_APP_ID', false),
        'client_secret' => env('GITHUB_APP_SECRET', false),
        'redirect'      => env('APP_URL') . '/login/service/github/callback',
        'name'          => 'GitHub',
        'auto_register' => env('GITHUB_AUTO_REGISTER', false),
        'auto_confirm'  => env('GITHUB_AUTO_CONFIRM_EMAIL', false),
    ],

    'google'   => [
        'client_id'      => env('GOOGLE_APP_ID', false),
        'client_secret'  => env('GOOGLE_APP_SECRET', false),
        'redirect'       => env('APP_URL') . '/login/service/google/callback',
        'name'           => 'Google',
        'auto_register'  => env('GOOGLE_AUTO_REGISTER', false),
        'auto_confirm'   => env('GOOGLE_AUTO_CONFIRM_EMAIL', false),
        'select_account' => env('GOOGLE_SELECT_ACCOUNT', false),
    ],

    'slack'   => [
        'client_id'     => env('SLACK_APP_ID', false),
        'client_secret' => env('SLACK_APP_SECRET', false),
        'redirect'      => env('APP_URL') . '/login/service/slack/callback',
        'name'          => 'Slack',
        'auto_register' => env('SLACK_AUTO_REGISTER', false),
        'auto_confirm'  => env('SLACK_AUTO_CONFIRM_EMAIL', false),
    ],

    'facebook'   => [
        'client_id'     => env('FACEBOOK_APP_ID', false),
        'client_secret' => env('FACEBOOK_APP_SECRET', false),
        'redirect'      => env('APP_URL') . '/login/service/facebook/callback',
        'name'          => 'Facebook',
        'auto_register' => env('FACEBOOK_AUTO_REGISTER', false),
        'auto_confirm'  => env('FACEBOOK_AUTO_CONFIRM_EMAIL', false),
    ],

    'twitter'   => [
        'client_id'     => env('TWITTER_APP_ID', false),
        'client_secret' => env('TWITTER_APP_SECRET', false),
        'redirect'      => env('APP_URL') . '/login/service/twitter/callback',
        'name'          => 'Twitter',
        'auto_register' => env('TWITTER_AUTO_REGISTER', false),
        'auto_confirm'  => env('TWITTER_AUTO_CONFIRM_EMAIL', false),
    ],

    'azure'   => [
        'client_id'     => env('AZURE_APP_ID', false),
        'client_secret' => env('AZURE_APP_SECRET', false),
        'tenant'        => env('AZURE_TENANT', false),
        'redirect'      => env('APP_URL') . '/login/service/azure/callback',
        'name'          => 'Microsoft Azure',
        'auto_register' => env('AZURE_AUTO_REGISTER', false),
        'auto_confirm'  => env('AZURE_AUTO_CONFIRM_EMAIL', false),
    ],

    'okta' => [
        'client_id'     => env('OKTA_APP_ID'),
        'client_secret' => env('OKTA_APP_SECRET'),
        'redirect'      => env('APP_URL') . '/login/service/okta/callback',
        'base_url'      => env('OKTA_BASE_URL'),
        'name'          => 'Okta',
        'auto_register' => env('OKTA_AUTO_REGISTER', false),
        'auto_confirm'  => env('OKTA_AUTO_CONFIRM_EMAIL', false),
    ],

    'gitlab' => [
        'client_id'     => env('GITLAB_APP_ID'),
        'client_secret' => env('GITLAB_APP_SECRET'),
        'redirect'      => env('APP_URL') . '/login/service/gitlab/callback',
        'instance_uri'  => env('GITLAB_BASE_URI'), // Needed only for self hosted instances
        'name'          => 'GitLab',
        'auto_register' => env('GITLAB_AUTO_REGISTER', false),
        'auto_confirm'  => env('GITLAB_AUTO_CONFIRM_EMAIL', false),
    ],

    'twitch' => [
        'client_id'     => env('TWITCH_APP_ID'),
        'client_secret' => env('TWITCH_APP_SECRET'),
        'redirect'      => env('APP_URL') . '/login/service/twitch/callback',
        'name'          => 'Twitch',
        'auto_register' => env('TWITCH_AUTO_REGISTER', false),
        'auto_confirm'  => env('TWITCH_AUTO_CONFIRM_EMAIL', false),
    ],

    'discord' => [
        'client_id'     => env('DISCORD_APP_ID'),
        'client_secret' => env('DISCORD_APP_SECRET'),
        'redirect'      => env('APP_URL') . '/login/service/discord/callback',
        'name'          => 'Discord',
        'auto_register' => env('DISCORD_AUTO_REGISTER', false),
        'auto_confirm'  => env('DISCORD_AUTO_CONFIRM_EMAIL', false),
    ],

    'ldap' => [
        'server'                 => env('LDAP_SERVER', false),
        'dump_user_details'      => env('LDAP_DUMP_USER_DETAILS', false),
        'dump_user_groups'       => env('LDAP_DUMP_USER_GROUPS', false),
        'dn'                     => env('LDAP_DN', false),
        'pass'                   => env('LDAP_PASS', false),
        'base_dn'                => env('LDAP_BASE_DN', false),
        'user_filter'            => env('LDAP_USER_FILTER', '(&(uid={user}))'),
        'version'                => env('LDAP_VERSION', false),
        'id_attribute'           => env('LDAP_ID_ATTRIBUTE', 'uid'),
        'email_attribute'        => env('LDAP_EMAIL_ATTRIBUTE', 'mail'),
        'display_name_attribute' => env('LDAP_DISPLAY_NAME_ATTRIBUTE', 'cn'),
        'follow_referrals'       => env('LDAP_FOLLOW_REFERRALS', false),
        'user_to_groups'         => env('LDAP_USER_TO_GROUPS', false),
        'group_attribute'        => env('LDAP_GROUP_ATTRIBUTE', 'memberOf'),
        'remove_from_groups'     => env('LDAP_REMOVE_FROM_GROUPS', false),
        'tls_insecure'           => env('LDAP_TLS_INSECURE', false),
        'tls_ca_cert'            => env('LDAP_TLS_CA_CERT', false),
        'start_tls'              => env('LDAP_START_TLS', false),
        'thumbnail_attribute'    => env('LDAP_THUMBNAIL_ATTRIBUTE', null),
    ],

];
