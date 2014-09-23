#CSRF Token Rotation

Magento will keep the same CSRF token on the frontend regardless of whether the user has logged in or logged out.  It is stored against the session, meaning that it will persist and continue to be the same value as long as the session is around.  As a result, the token could survive multiple logins and logouts, meaning that different customers could share the same CSRF token, giving an attacker a vector to bypass CSRF protection.

#Installation

    modman clone git@github.com:meanbee/magento-csrf-token-rotation.git
    modman deploy magento-csrf-token-rotation

#Usage

It just works™.