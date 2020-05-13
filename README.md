# Laravel Settings

## Usage

1. Set a setting
```
setting_set('emails.bcc-recipients', ['email_111@domain.com', 'email_222@domain.com']);
```

2. Get a setting
```
$bccRecipients = setting_get('emails.bcc-recipients');
```
