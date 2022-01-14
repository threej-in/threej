# threeJ
light weight php library consisting common useful functions

### Features
1. Support text Captchas [Powered by [Gregwar/captcha](https://github.com/Gregwar/Captcha)]
2. Automatic error handling


### Getting started
1. Download the contents of [src/](https://github.com/threej-in/threej/tree/main/src/) folder
2. Include the [src/class3j/threej.php](https://github.com/threej-in/threej/blob/main/src/class3j/threej.php) file into your project


### List of available functions
- $t->print() - Fixed Preformatted div for better debugging.
- $t->getCaptcha() - Gives base64 string to use in src attribute of img tag.
- $t->validateCaptcha() - validates the captcha stored in session with the phrase entered by user.
