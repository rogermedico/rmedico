(function () {
    fetch(process.env.MIX_RAPIDAPI_DAD_JOKES_ENDPOINT, {
        "method": "GET",
        "headers": {
            "x-rapidapi-host": process.env.MIX_RAPIDAPI_DAD_JOKES_HOST,
            "x-rapidapi-key": process.env.MIX_RAPIDAPI_DAD_JOKES_KEY
        }
    })
        .then(response => response.json())
        .then(response => {
            if ('message' in response) {
                console.log('Limit reached for today, sorry bruh...');
            } else {
                console.log(response);
                setTimeout(response => (console.log(response.punch)), 1000);
            }
        })
        .catch(err => {
            // console.error(err);
        });
})();
