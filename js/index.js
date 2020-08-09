//get elements 
const email = document.getElementById('email');
const password = document.getElementById('password');

//add login event
login.addEventListener('click', e => {
    //get email and pass
    const email = email.value;
    const password = password.value;
    const auth = firebase.auth();
    //sign in 
    constpromise = auth.signInWithEmailAndPassword(email, password)
    promise.catche;
    console.log(e.message);



});


//add signup event
submit.addEventListener('click', e => {
    //get email and pass
    //TODO:check 4 real email 

    const email = email.value;
    const password = password.value;
    const auth = firebase.auth();
    //sign up 
    constpromise = auth.createUserWithEmailAndPassword(email, password)
    promise
        .then(user => console.log(user))
        .catche = console.log(e.message);


});