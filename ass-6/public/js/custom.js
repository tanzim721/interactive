function sendData(){

    var myName= document.getElementById('myName').value;
    var myRoll= document.getElementById('myRoll').value;
    var myClass= document.getElementById('myClass').value;

    var url = '/insertData';
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
    var url = "/deleteData";
    var data = {id:myID};

    axios.post(url, data)
    .then(function (response){
        alert(response.data);
    })
    .catch(function(error){
        alert('error');
    });
}

function updateData(){
    var myID = document.getElementById('myID').value;
    var myName= document.getElementById('myName').value;
    var myRoll= document.getElementById('myRoll').value;
    var myClass= document.getElementById('myClass').value;

    var url = '/updateData';
    var data = {id:myID, name:myName, roll:myRoll, class:myClass};
    axios.post(url, data)
    .then(function (response){
        alert(response.data);
    })
    .catch(function (error){
        alert('error');
    });
}



$('.addBtn').on('click', function(){
    alert('ok');
})

function multiFile(){
    let newTableRow =
        "<tr>"+
            "<td><input type='file' name='' id='' class='form-control'></td>"+
            "<td class='fileSize'>File size</td>"+
            "<td class='cancelBtn'><button class='btn btn-danger btn-sm'>Cancel</button></td>"+
            "<td class='upBtn'><button class='btn btn-primary btn-sm'>Upload</button></td>"+
            "<td class='fileUpMB'>Uploaded(MB)</td>"+
            "<td class='fileUpPercentage'>Uploaded(%)</td>"+
        "</tr>"
    $('.fileList').append(newTableRow);

}

