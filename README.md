# UnCAPTCHA
UnCAPTCHA is a simple ReCAPTCHA V1 recreation in PHP.

## Installation
Copy all of the files in this repo into the relevent locations on your webserver.

> If you are not using the `img` and `style` directories, make sure to edit them in `captcha.php`

## Usage

Adding UnCAPTCHA to a page is as simple as `require`ing the script file.

```
<form method="post">
...

<?php require("captcha.php") ?>

...
</form>
```

The CAPTCHA answer is stored in the sesion variable `captchaAnswer`.

See [example.php](example.php) for an example implementation.