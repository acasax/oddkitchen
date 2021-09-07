grecaptcha.ready(() => {
    grecaptcha.execute('6Lfed08cAAAAAN6NcmTlghCN_b92YY8T_SpAkFVs')
        .then((token) => {
            recaptchaResponse = document.getElementById('recaptchaResponse');
            recaptchaResponse.value = token;
        });
});