function sendData(){
    
    var myName= document.getElementById('myName').value;
    var myRoll= document.getElementById('myRoll').value;
    var myClass= document.getElementById('myClass').value;
    
    var url = '/curdinsertData';
    var data = {name:myName, roll:myRoll, class:myClass};
    axios.post(url, data)
    .then(function (response){
        alert(response.data);
    })
    .catch(function (error){
        alert('error');
    });
}


function deleteData(){
    var myID = document.getElementById('myID').value;
    var url = '/curddeleteData';
    var data={id:myID};
    axios.post(url, data)
    .then(function (response){
        alert(response.data);
    })
    .catch(function (error){
        alert('error');
    });
}
function updateData(){
    var myID = document.getElementById('myID').value;
    var myName= document.getElementById('myName').value;
    var myRoll= document.getElementById('myRoll').value;
    var myClass= document.getElementById('myClass').value;
    
    var url = '/curdupdateData';
    var data = {id:myID, name:myName, roll:myRoll, class:myClass};
    axios.post(url, data)
    .then(function (response){
        alert(response.data);
    })
    .catch(function (error){
        alert('error');
    });
}