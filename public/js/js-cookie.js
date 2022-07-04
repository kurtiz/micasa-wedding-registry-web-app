/**
 * creates or updates a cookie
 * @param cname the name or the id of the cookie
 * @param cvalue the value or content of the cookie
 * @param expiry the number of days till the cookie expires
 * @author Aaron will Djaba
 */
function setCookie(cname, cvalue, expiry) {
    const date = new Date();
    date.setTime(date.getTime() + (expiry * 24 * 60 * 60 * 1000));
    let expiresOn = "expires=" + date.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expiresOn + ";path=/";
}

/**
 *
 * @param cname
 * @returns {string}
 */
function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let content = decodedCookie.split(';');
    for (let i = 0; i < content.length; i++) {
        let c = content[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


/**
 *
 * @param obj
 * @param key
 * @param val
 * @returns return an array of objects according to key, value, or key and value matching
 */
function getObjects(obj, key, val) {
    let objects = [];
    for (let i in obj) {
        if (!obj.hasOwnProperty(i)) continue;
        if (typeof obj[i] == 'object') {
            objects = objects.concat(getObjects(obj[i], key, val));
        } else
            //if key matches and value matches or if key matches and value is not passed
            // (eliminating the case where key matches but passed value does not)
        if (i === key && obj[i] === val || i === key && val === '') { //
            objects.push(obj);
        } else if (obj[i] === val && key === '') {
            //only add if the object is not already in the array
            if (objects.lastIndexOf(obj) === -1) {
                objects.push(obj);
            }
        }
    }
    return objects;
}

/**
 *
 * @param obj
 * @param key
 * @returns return an array of values that match on a certain key
 */
function getValues(obj, key) {
    let objects = [];
    for (let i in obj) {
        if (!obj.hasOwnProperty(i)) continue;
        if (typeof obj[i] == 'object') {
            objects = objects.concat(getValues(obj[i], key));
        } else if (i === key) {
            objects.push(obj[i]);
        }
    }
    return objects;
}


/**
 *
 * @param obj
 * @param val
 * @returns return an array of keys that match on a certain value
 */
function getKeys(obj, val) {
    let objects = [];
    for (let i in obj) {
        if (!obj.hasOwnProperty(i)) continue;
        if (typeof obj[i] == 'object') {
            objects = objects.concat(getKeys(obj[i], val));
        } else if (obj[i] === val) {
            objects.push(i);
        }
    }
    return objects;
}


/**
 * converts the currency of a group of selected
 * values and switches the currency symbol
 * @param currency the currency to convert to
 * @param elementClass class of the elements to be affected
 */
function switchSymbol(currency, elementClass) {
    let currencySymbols = $(`.${elementClass}`);
    let savedCurrency = getCookie("currency");
    let amount = $(".commas")
    let converted;


    switch (currency) {
        case "usd":
            for (let i = 0; i < currencySymbols.length; i++) {
                if (savedCurrency !== currency) {
                    currencySymbols[i].innerText = "$";
                    let stripped = amount[i].textContent.replaceAll(",", "")
                    converted = convertToUsd(stripped);
                    console.log(converted)
                    amount[i].textContent = converted.toLocaleString()
                    setCookie("currency", currency, 3);

                }
            }
            $.toast({
                text: 'Converted to US Dollars',
                showHideTransition: 'fade',
                icon: 'success',
                position: "top-right",
                bgColor: '#757575',
                textColor: '#1a1a1a'
            })
            break;

        case "ghs":
            for (let i = 0; i < currencySymbols.length; i++) {
                if (savedCurrency !== currency) {
                    currencySymbols[i].innerText = "₵";
                    let stripped = amount[i].textContent.replaceAll(",", "")
                    converted = convertToGhs(stripped);
                    console.log(converted)
                    amount[i].textContent = converted.toLocaleString()
                    setCookie("currency", currency, 3);

                }
            }
            $.toast({
                text: 'Converted to Ghana Cedis',
                showHideTransition: 'fade',
                icon: 'success',
                iconColor: '#1a1a1a',
                position: "top-right",
                bgColor: '#fffce0',
                textColor: '#1a1a1a'
            })
            break;
    }
}


/**
 * places comma between large numbers to help
 * make them easy to read
 * @param className class of the selected group of elements
 */
function addComma(className) {
    let d = document.getElementsByClassName(className);
    for (let i = 0; i < d.length; i++) {
        if (d[i].innerText.search(",") !== -1) {
            num = d[i].innerText.replaceAll(",", "")
            num = Number(num)
            d[i].innerText = num.toLocaleString("en-US");
        } else {
            num = Number(d[i].innerText)
            d[i].innerText = num.toLocaleString("en-US");
        }

    }
}

/**
 * converts large numbers to shorter and more readable format
 * for instance 2000 = 2k
 * @param num
 * @returns {string|number}
 */
function kFormatter(num) {
    return Math.abs(num) > 999 ? Math.sign(num) * ((Math.abs(num) / 1000).toFixed(1)) + 'k' : Math.sign(num) * Math.abs(num)
}

/**
 * converts a value to USD
 * @param value
 * @returns {number}
 */
function convertToUsd(value) {
    return value / 7.9;
}

/**
 * converts a value to GHS
 * @param value
 * @returns {number}
 */
function convertToGhs(value) {
    return value * 7.9;
}
