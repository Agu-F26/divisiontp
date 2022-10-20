function isLogged(cookie){
    let isLogged = document.cookie
    .split('; ')
    .find(row => row.startsWith('isLogged='))
    .split('=')[1];

    if (isLogged == "true") return true;
    else return false;
}