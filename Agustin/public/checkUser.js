function getUser(cookie){
    let user = document.cookie
    .split('; ')
    .find(row => row.startsWith('username='))
    .split('=')[1];

    return user;
}