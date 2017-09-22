

function submitClick(){

  var firebaseRef=firebase.database().ref();
  firebaseRef.child("Status").set(1);
}


function submitClick1(){

  var firebaseRef=firebase.database().ref();
  firebaseRef.child("Status").set(0);
}
