# UnCAPTCHA
UnCAPTCHA is a simple ReCAPTCHA V1 recreation in PHP.

![uncaptcha](https://github.com/breadtf/uncaptcha/assets/103989916/dd5b80ea-60ff-4d20-a87c-fdd9f1ad13a8)


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
